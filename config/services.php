<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'paypal'    => [
        'mode'          => env('PAYPAL_MODE',''),
        'username'      => env('PAYPAL_SANDBOX_API_USERNAME',''),
        'secret'        => env('PAYPAL_SANDBOX_API_SECRET',''),
        'currency'      => env('PAYPAL_CURRENCY',''),
        'cert'          => env('PAYPAL_SANDBOX_API_CERTIFICATE',''),
        'baseUri'       => '',
        'class'         => 'App\\PaymentGateways\\PayPal',
    ],
    'visa'    => [
        'mode'          => env('VISA_MODE',''),
        'username'      => env('VISA_SANDBOX_API_USERNAME',''),
        'secret'        => env('VISA_SANDBOX_API_SECRET',''),
        'currency'      => env('VISA_CURRENCY',''),
        'cert'          => env('VISA_SANDBOX_API_CERTIFICATE',''),
        'baseUri'       => '',
        'class'         => 'App\\PaymentGateways\\Visa',
    ],

];
