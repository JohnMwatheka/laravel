<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

trait C2BSetup
{

    public function stkPush($businessShortCode, $transactionType, $amount, $partyA, $partyB, $phoneNumber, $callBackURL, $accountReference, $transactionDesc, $remark, $token)
    {

        $url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $lipaNaMpesaPasskey = Config::get('mpesa.lipa_na_mpesa_passkey');
       
        $timestamp = '20' . date("ymdhis");
        $password = base64_encode($businessShortCode . $lipaNaMpesaPasskey . $timestamp);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token));
        $curl_post_data = array(
            'BusinessShortCode' => $businessShortCode,
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => $transactionType,
            'Amount' => $amount,
            'PartyA' => $partyA,
            'PartyB' => $partyB,
            'PhoneNumber' => $phoneNumber,
            'CallBackURL' => $callBackURL,
            'AccountReference' => $accountReference,
            'TransactionDesc' => $transactionType
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $curl_response = curl_exec($curl);
        return $curl_response;
    }

    public static function generateC2bMpesaToken()
    {

        $consumer_key = Config::get('mpesa.consumer_key');
        $consumer_secret = Config::get('mpesa.consumer_secret');
        $credentials = base64_encode($consumer_key . ':' . $consumer_secret);

        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $curl_response = curl_exec($curl);

        return json_decode($curl_response)->access_token;
    }

    function registerC2bMpesaCallBacks($confirmationURL, $validationURL, $shortCode, $token)
    {

        $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Authorization:Bearer ' . $token)); //setting custom header

        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'ShortCode' => $shortCode,
            'ResponseType' => 'Completed',
            'ConfirmationURL' => $confirmationURL,
            'ValidationURL' => $validationURL
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }
}
