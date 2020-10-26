<?php

require_once '../vendor/autoload.php';

// init sender
$sender = new \GGGMnASDK\Service\StringeeX(
    new \GuzzleHttp\Client(),
    new \GGGMnASDK\Abstraction\Object\Authentication(
        [
            'apiBaseUrl' => 'http://10.28.1.140/api/v1/',
            'token' => 'this is token'
        ]
    )
);

// message
$message = new \GGGMnASDK\Abstraction\Object\StringeeX(
    [
        'type' => 'external',
        'receiver' => '0987802175',
        'action' => 'talk',
        'content' => 'Dev: Mã OTP của bạn là 0913'
    ]
);

// client
$client = new \GGGMnASDK\Service\Client($sender, $message);

// send message
var_dump($client->sendMessage());