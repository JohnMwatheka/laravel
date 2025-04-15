<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\C2BSetup;
Use App\Models\Event;

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

        // Here you would typically save the ticket information to your database
        // For now, we'll just return a JSON response

        // Process the STK Push
        $this->processStkPush($validated['phone'], $totalAmount, '1234567890');

        return response()->json([
            'status' => 'success',
            'message' => 'Payment request sent successfully, you will receive a payment prompt shortly',
            'data' => $validated
        ]);
    }



    public function processStkPush($phone, $amount, $reference)
    {

        try {


            $phone = '254' . substr($phone, -9);
            // $paybill = env('MPESA_SHORT_CODE');
            $paybill =  "4048581";
            $callBackURL = 'https://pay.m-tip.app/api/v1/c2b-stk-callback';

            $transactionType = "CustomerPayBillOnline";
            $accountReference = $reference;
            $token =  $this->generateC2bMpesaToken();

            $stkPushSimulation = $this->stkPush($paybill, $transactionType, $amount, $phone, $paybill, $phone, $callBackURL, $accountReference, null, null, $token);

            $response = json_decode($stkPushSimulation, true);
            // Log::create([
            //     'source' => 'Stk Callback res',
            //     'content' => json_encode($response),
            // ]);
            $status = 'success';
            $message = 'Success. Request accepted for processing';
            if (empty($response['CheckoutRequestID'])) {
                $status = 'error';
                $message = $response['errorMessage'];
            }

            $CheckoutRequestID = $response['CheckoutRequestID'];
            $MerchantRequestID = $response['MerchantRequestID'];


            // $this->logPayTracker($token, 'stkPushSimulation', json_encode($request->all()), 'n/a', json_encode($response), $platform_id, $CheckoutRequestID, $MerchantRequestID, $accountReference);

            return response()->json([
                'status' => $status,
                'data'   => json_decode($stkPushSimulation),
                'message' => $message,
            ]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
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


}
