<?php

require_once '../vendor/autoload.php';

$client = new \GGGMnASDK\Service\SMS(
    new \GuzzleHttp\Client(),
    new \GGGMnASDK\Abstraction\Object\Authentication(
        [
            'apiBaseUrl' => 'http://10.28.1.140/api/v1/',
            'token' => 'this is token'
        ]
    )
);

var_dump(
    $client->send(
        new \GGGMnASDK\Abstraction\Object\SMS(
            [
                'receiver' => '0987802175',
                'brandName' => 'GoldenGate',
                'message' => 'Dev: Mã OTP của bạn là 0913'
            ]
        )
    )
);