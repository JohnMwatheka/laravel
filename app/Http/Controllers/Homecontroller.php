<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\C2BSetup;
use Illuminate\Support\Facades\Log;


class Homecontroller extends Controller
{
    use C2BSetup;

    //
    public function Index()
    {
        return view('ticket.index');
    }

    public function Contact()
    {
        return view('contact');
    }

    public function Ticket(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'school' => 'required|string|max:255',
        ]);

        // Here you would typically save the ticket information to your database
        // For now, we'll just return a JSON response

        $this->processStkPush($validated['phone'], 100, '1234567890');

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
            $paybill =  "4083001";
            $callBackURL = 'https://pay.m-tip.app/api/v1/c2b-stk-callback';

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
}
