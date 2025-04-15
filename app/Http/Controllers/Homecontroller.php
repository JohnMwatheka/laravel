<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\C2BSetup;
use Illuminate\Support\Facades\Log;
use App\Models\Event;
use App\Models\Ticket;

class Homecontroller extends Controller
{
    use C2BSetup;

    //

    public function home()
    {
        // Get all events (if needed in future) and the event with id = 1
        $events = Event::all();
        $highlightedEvent = Event::find(1); // or use firstWhere('id', 1);

        return view('welcome', compact('events', 'highlightedEvent'));
    }
    public function Index(Event $event)
    {
        $highlightedEvent = Event::find(1);
        $amount = $event->tickets['early_bird'] ?? 0; // Fetch ticket amount
        return view('ticket.index', compact('event', 'amount', 'highlightedEvent'));
    }


    public function Contact()
    {
        $highlightedEvent = Event::find(1);
        return view('contact', compact('highlightedEvent'));
    }

    public function Ticket(Request $request)
    {
        // Validate the request including the new fields
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'school' => 'required|string|max:255',
            'ticket_amount' => 'required|numeric|min:1',
            'ticket_quantity' => 'required|integer|min:1',
            'event_id' => 'required|integer', //Added static event id
        ]);

        // Calculate total amount
        $totalAmount = $validated['ticket_amount'] * $validated['ticket_quantity'];

        // Generate unique reference for this ticket
        $reference = Ticket::generateReference();

        // Create and save the ticket
        $ticket = Ticket::create([
            'event_id' => $validated['event_id'],
            'first_name' => $validated['firstName'],
            'last_name' => $validated['lastName'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'school' => $validated['school'],
            'amount' => $validated['ticket_amount'],
            'quantity' => $validated['ticket_quantity'],
            'total_amount' => $totalAmount,
            'reference' => $reference,
            'payment_status' => 'pending'
        ]);

        // Process the STK Push with the ticket reference
        $stkResponse = $this->processStkPush($validated['phone'], $totalAmount, $reference);

        // If STK push failed, return error
        if (isset($stkResponse['status']) && $stkResponse['status'] == 'error') {
            return response()->json([
                'status' => 'error',
                'message' => $stkResponse['message'] ?? 'Payment request failed',
                'data' => $validated
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Payment request sent successfully, you will receive a payment prompt shortly',
            'data' => [
                'ticket' => $ticket,
                'payment' => $stkResponse['data'] ?? null
            ]
        ]);
    }



    public function processStkPush($phone, $amount, $reference)
    {
        try {
            $phone = '254' . substr($phone, -9);
            // $paybill = env('MPESA_SHORT_CODE');
            $paybill =  "4083001";
            $callBackURL = url('/api/v1/c2b-stk-callback');

            $transactionType = "CustomerPayBillOnline";
            $accountReference = $reference;
            $token =  $this->generateC2bMpesaToken();

            $stkPushSimulation = $this->stkPush($paybill, $transactionType, $amount, $phone, $paybill, $phone, $callBackURL, $accountReference, null, null, $token);

            $response = json_decode($stkPushSimulation, true);

            Log::info($response);

            // Log::create([
            //     'source' => 'Stk Callback res',
            //     'content' => json_encode($response),
            // ]);

            $status = 'success';
            $message = 'Success. Request accepted for processing';
            if (empty($response['CheckoutRequestID'])) {
                $status = 'error';
                $message = $response['errorMessage'] ?? 'Payment processing failed';
            }

            $CheckoutRequestID = $response['CheckoutRequestID'] ?? null;
            $MerchantRequestID = $response['MerchantRequestID'] ?? null;

            // Return the response as an array instead of a JSON response
            return [
                'status' => $status,
                'data'   => $response,
                'message' => $message,
            ];
        } catch (\Exception $exception) {
            Log::error('STK Push Exception: ' . $exception->getMessage());
            return [
                'status' => 'error',
                'message' => $exception->getMessage(),
                'data' => null
            ];
        }
    }
    //Method to return to event page

    public function CreateEvent(Request $request)
    {
        // return to event page
        $highlightedEvent = Event::find(1);
        return view('events.create-event', compact('highlightedEvent'));
    }
    //Method to create event
    // Method to create event
    public function store(Request $request)
    {
        $validated = $request->validate([
            'venue' => 'required|string|max:255',
            'date' => 'required|date',
            'early_bird' => 'required|numeric',
            'advance' => 'required|numeric',
            'gate' => 'required|numeric',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'intro_video' => 'nullable|url'
        ]);

        // Handle image upload manually to public/uploads/events
        $imagePath = null;
        if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/events'), $imageName);
            $imagePath = 'uploads/events/' . $imageName; // relative path to use in HTML
        }

        Event::create([
            'venue' => $validated['venue'],
            'date' => $validated['date'],
            'tickets' => [
                'early_bird' => $validated['early_bird'],
                'advance' => $validated['advance'],
                'gate' => $validated['gate'],
            ],
            'event_image' => $imagePath,
            'intro_video' => $validated['intro_video'] ?? null,
        ]);

        return back()->with('success', 'Event created successfully!');
    }

    public function StkCallback(Request $request)
    {
        try {
            $data = $request->all();

            if (!isset($data['Body']['stkCallback'])) {
                Log::error('Invalid STK callback data format', $data);
                return response()->json([
                    'ResponseCode' => '00000000',
                    'ResponseDesc' => 'Accept service request successfully',
                ]);
            }

            $resultCode = $data['Body']['stkCallback']['ResultCode'];
            $merchant_request_id = $data['Body']['stkCallback']['MerchantRequestID'];
            $checkout_request_id = $data['Body']['stkCallback']['CheckoutRequestID'];
            $resultDesc = $data['Body']['stkCallback']['ResultDesc'];

            if ($resultCode == 0) {
                $amount = 0;
                $mpesaReceiptNumber = '';
                $phone_number = '';

                foreach ($data['Body']['stkCallback']['CallbackMetadata']['Item'] as $item) {
                    if ($item['Name'] === 'Amount') {
                        $amount = $item['Value'];
                    } else if ($item['Name'] === 'MpesaReceiptNumber') {
                        $mpesaReceiptNumber = $item['Value'];
                    } else if ($item['Name'] === 'PhoneNumber') {
                        $phone_number = $item['Value'];
                    }
                }

                // Find the ticket by reference (we're assuming the reference is stored in AccountReference)
                $ticket = \App\Models\Ticket::where('reference', $data['Body']['stkCallback']['AccountReference'] ?? '')
                    ->first();

                if ($ticket) {
                    // Update the ticket with payment details
                    $ticket->payment_status = 'completed';
                    $ticket->mpesa_receipt_number = $mpesaReceiptNumber;
                    $ticket->payment_date = now();
                    $ticket->save();

                    Log::info("Payment completed for ticket: {$ticket->id}, Receipt: {$mpesaReceiptNumber}");
                } else {
                    Log::warning("Ticket not found for reference: " . ($data['Body']['stkCallback']['AccountReference'] ?? 'Unknown'));
                }
            } else {
                Log::error("STK Push failed with code: {$resultCode}, Desc: {$resultDesc}");

                // Find the ticket and mark it as failed
                $ticket = \App\Models\Ticket::where('reference', $data['Body']['stkCallback']['AccountReference'] ?? '')
                    ->first();

                if ($ticket) {
                    $ticket->payment_status = 'failed';
                    $ticket->save();

                    Log::info("Payment failed for ticket: {$ticket->id}");
                }
            }
        } catch (\Exception $exception) {
            Log::error("STK Callback Exception: " . $exception->getMessage());
        }

        return response()->json([
            'ResponseCode' => '00000000',
            'ResponseDesc' => 'Accept service request successfully',
        ]);
    }

     /**
     * Handle M-Pesa confirmation callback
     */
    public function handleConfirmation(Request $request)
    {
        // Log the confirmation request
        Log::info('M-Pesa Confirmation Callback', ['data' => $request->all()]);
        
        // Process the confirmation data
        // This is typically where you'd update transaction status after receiving payment
        
        return response()->json(['ResultCode' => 0, 'ResultDesc' => 'Confirmation received successfully']);
    }

    /**
     * Handle M-Pesa validation callback
     */
    public function handleValidation(Request $request)
    {
        // Log the validation request
        Log::info('M-Pesa Validation Callback', ['data' => $request->all()]);
        
        // You can perform validation logic here if needed
        // For example, check if the account number exists or if the customer has sufficient balance
        
        // Return a success response to accept the transaction
        return response()->json(['ResultCode' => 0, 'ResultDesc' => 'Validation successful']);
    }
}
