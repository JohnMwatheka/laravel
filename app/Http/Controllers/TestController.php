<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Traits\C2BSetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    use C2BSetup;

    /**
     * Test the STK push functionality
     */
    public function testStkPush()
    {
        // Sample data
        $phone = '0700000000'; // Replace with a test phone number
        $amount = 1; // Small amount for testing
        $reference = Ticket::generateReference();

        // Use the same method from Homecontroller
        $result = $this->processStkPush($phone, $amount, $reference);

        return response()->json([
            'message' => 'Test STK push initiated',
            'reference' => $reference,
            'result' => $result
        ]);
    }

    /**
     * Register callback URL with M-Pesa
     */
    public function registerCallbackUrl()
    {
        try {
            $token = $this->generateC2bMpesaToken();
            $url = env('MPESA_REGISTER_URL', 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl');
            
            $shortCode = env('MPESA_SHORT_CODE', '4083001');
            $confirmationUrl = env('MPESA_CONFIRMATION_URL', url('/api/v1/c2b-confirmation'));
            $validationUrl = env('MPESA_VALIDATION_URL', url('/api/v1/c2b-validation'));
            
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Content-Type:application/json',
                'Authorization:Bearer '.$token
            )); 
            
            $curl_post_data = array(
                'ShortCode' => $shortCode,
                'ResponseType' => 'Completed',
                'ConfirmationURL' => $confirmationUrl,
                'ValidationURL' => $validationUrl
            );
            
            $data_string = json_encode($curl_post_data);
            
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
            
            $curl_response = curl_exec($curl);
            
            return response()->json(json_decode($curl_response));
            
        } catch (\Exception $e) {
            Log::error('Error registering callback URL: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Handle M-Pesa STK callback
     */
    public function handleStkCallback(Request $request)
    {
        // Log the entire request for debugging
        Log::info('STK Callback received', ['data' => $request->all()]);
        
        $callbackData = $request->all();
        
        if (isset($callbackData['Body']) && isset($callbackData['Body']['stkCallback'])) {
            $callback = $callbackData['Body']['stkCallback'];
            $merchantRequestID = $callback['MerchantRequestID'] ?? null;
            $checkoutRequestID = $callback['CheckoutRequestID'] ?? null;
            $resultCode = $callback['ResultCode'] ?? null;
            
            if ($resultCode == 0) {
                // Success - payment was completed
                $callbackMetadata = $callback['CallbackMetadata']['Item'] ?? [];
                $mpesaReceiptNumber = null;
                $amount = null;
                $phoneNumber = null;
                
                foreach ($callbackMetadata as $item) {
                    if ($item['Name'] == 'MpesaReceiptNumber') $mpesaReceiptNumber = $item['Value'];
                    if ($item['Name'] == 'Amount') $amount = $item['Value'];
                    if ($item['Name'] == 'PhoneNumber') $phoneNumber = $item['Value'];
                }
                
                // Find the ticket by MerchantRequestID or CheckoutRequestID
                // Assuming you have a reference field that matches one of these
                $ticket = Ticket::where('reference', $callback['merchantRequestID'] ?? 'unknown')->first();
                
                if ($ticket) {
                    // Update ticket payment status
                    $ticket->payment_status = 'completed';
                    $ticket->mpesa_receipt_number = $mpesaReceiptNumber;
                    $ticket->payment_date = now();
                    $ticket->save();
                    
                    Log::info('Payment completed for ticket', ['ticket_id' => $ticket->id]);
                } else {
                    Log::warning('Ticket not found for payment', [
                        'merchantRequestID' => $merchantRequestID, 
                        'checkoutRequestID' => $checkoutRequestID
                    ]);
                }
            } else {
                // Payment failed
                Log::warning('Payment failed', [
                    'resultCode' => $resultCode,
                    'resultDesc' => $callback['ResultDesc'] ?? 'No description'
                ]);
                
                // Find and update the ticket status if it exists
                $ticket = Ticket::where('reference', $callback['merchantRequestID'] ?? 'unknown')->first();
                if ($ticket) {
                    $ticket->payment_status = 'failed';
                    $ticket->save();
                }
            }
        }
        
        // Always return a success response to M-Pesa
        return response()->json(['ResultCode' => 0, 'ResultDesc' => 'Accepted']);
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

    /**
     * Process STK Push (copied from HomeController for testing)
     */
    public function processStkPush($phone, $amount, $reference)
    {
        try {
            $phone = '254' . substr($phone, -9);
            $paybill = env('MPESA_SHORT_CODE', '4083001');
            $callBackURL = env('MPESA_CALLBACK_URL', url('/api/v1/c2b-stk-callback'));

            $transactionType = "CustomerPayBillOnline";
            $accountReference = $reference;
            $token = $this->generateC2bMpesaToken();

            $stkPushSimulation = $this->stkPush(
                $paybill, 
                $transactionType, 
                $amount, 
                $phone, 
                $paybill, 
                $phone, 
                $callBackURL, 
                $accountReference, 
                null, 
                null, 
                $token
            );

            $response = json_decode($stkPushSimulation, true);

            Log::info('STK Push Response', $response);

            $status = 'success';
            $message = 'Success. Request accepted for processing';
            if (empty($response['CheckoutRequestID'])) {
                $status = 'error';
                $message = $response['errorMessage'] ?? 'Payment processing failed';
            }

            return [
                'status' => $status,
                'data' => $response,
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
} 