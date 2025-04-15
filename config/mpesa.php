<?php

use function PHPUnit\Framework\assertFileNotEqualsIgnoringCase;

return [

    /*
    |--------------------------------------------------------------------------
    | Lipa na MPESA Passkey
    |--------------------------------------------------------------------------
    |
    | This key is generated once the C2B paybill is created 
    | if not provided one can ask for it from safaricom
    | it is used for stk push requests.
    |
    */

        // 'lipa_na_mpesa_passkey' =>  "7f16598ed07666dfe4cf7b1c8fbda0f1b33e93939ea327ff8d0be6fbe75b3554", pepesa
        'lipa_na_mpesa_passkey' => env('MPESA_PASS_KEY', false), //dynamic

    /*
    |--------------------------------------------------------------------------
    | Consumer key and Secret
    |--------------------------------------------------------------------------
    |
    | This two are gotten from daraja once the app is taken to production
    | They are used for C2b transactions 
    | 
    |
    */

    // pepesa
    // 'consumer_key' => "TzGADH1lAOIGpZbuxb198mLkEtBEBKai",
    // 'consumer_secret' => "VzrMXOjmlxJurovY",

    'consumer_key' => env('MPESA_CONSUMER_KEY', false),
    'consumer_secret' => env('MPESA_CONSUMER_SECRET', false),


    /*
    |--------------------------------------------------------------------------
    | B2c Consumer key and Secret
    |--------------------------------------------------------------------------
    |
    | This two are gotten from daraja once the app is taken to production
    | They are used for B2c transactions 
    | 
    |
    */

    'b2c_consumer_key' => "ILLw41fn0kxjWOFfbA4iYnCrGtvfvDP5MnyR4tNW1EymdGhA",
    'b2c_consumer_secret' => "ChOUl0IDlQ7ovpKwVQVfKEl2vWZOS4lnnZ1GgpLtEu9PEP3nmvTZpFfqTWAD46nu",

    /*
    |--------------------------------------------------------------------------
    | api user name and password for both b2c and b2b
    |--------------------------------------------------------------------------
    |
    | This two are gotten from mpesa portal. to get their you need the following.
    | 1. The admin will create a user with a Business manager role and assigns him/her manage org initiator passwords role..
    | 2. The user logs in the web portal, go to my functions > operator management > search either the admin or manager.
    | 3. The user selects operation icon > roles > click on edit > select set restrict role > enter reason and submit.
    |    the user admin/active manager will have been added the set restrict role and you will be able to see it.
    | 4. The set restrict role user log in the web, select the api user > operation icon > set password which should be alpha numeric. The api user will receive the password and will use the credentials to log in their api .
    | 5. Log in as the Business manager > go to my functions > operator management > search username (for the admin) > select operation icon > roles > click on edit > select set restrict role > enter reason and submit.
    | 6. Once done, log back in as the Business Administrator, select the api user > operation icon > set password which should be alpha numeric. The api user will receive the password and will use the credentials to log in their api.
    |
    |
    */

    // https://org.ke.m-pesa.com
    //    3031467

    'api_user' => env('MPESA_API_USER', false),
    'api_user_password' => env('MPESA_API_USER_PASSWORD', false),

    //TODO remember to clean up all the hardcoded links from the controllers
    //TODO remember to a short description of how money transfer works 

];
