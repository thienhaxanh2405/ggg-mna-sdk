<?php

require_once '../vendor/autoload.php';

// message
$message = new \GGGMnASDK\Abstraction\Object\SMS(
    [
        'receiver' => '0987802175',
        'brandName' => 'GoldenGate',
        'message' => 'Dev: Mã OTP của bạn là 0913'
    ]
);

// sender vnpay
$sender = new \GGGMnASDK\Service\VnpaySms(
    new \GuzzleHttp\Client(),
    new \GGGMnASDK\Abstraction\Object\Authentication(
        [
            'apiBaseUrl' => 'http://10.28.1.140/api/v1/',
            'token' => 'this token'
        ]
    )
);

// sender VMG
/*$sender = new \GGGMnASDK\Service\VMGSms(
    new \GuzzleHttp\Client(),
    new \GGGMnASDK\Abstraction\Object\Authentication(
        [
            'apiBaseUrl' => 'http://10.28.1.140/api/v1/',
            'token' => 'this is token'
        ]
    )
);*/

// init client
$client = new \GGGMnASDK\Service\Client($sender, $message);

// send message
var_dump($client->sendMessage());