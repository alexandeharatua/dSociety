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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id'     => '233139118449936',
        'client_secret' => 'dc07b70a1fe5fca59261b95c0a7f78f6',
        'redirect'      => 'https://127.0.0.1:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id'     => '325649909197-2o5kb16mgeed56i5u7l2la3h2tmf0lev.apps.googleusercontent.com',
        'client_secret' => '3i3ZJXgNVNJL8hQE6CVOTyYM',
        'redirect'      =>  'http://127.0.0.1:8000/auth/google/callback',
    ],

];
