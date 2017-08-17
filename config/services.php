<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '247175135792723',
        'client_secret' => '11e321a63b790ad5d68f20434e32e857',
        'redirect' => 'http://jlaupa.group-celit.com/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '380932250213-6ohhv687iugcal8s0laqekah2ectpnsg.apps.googleusercontent.com',
        'client_secret' => '801RxoN0pCBbZVOazZ8q7EKu',
        'redirect' => 'http://jlaupa.group-celit.com/auth/google/callback',
    ],
];
