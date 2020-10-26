<?php

require_once '../vendor/autoload.php';

$client = new \GGGMnASDK\Service\StringeeX(
    new \GuzzleHttp\Client(),
    new \GGGMnASDK\Abstraction\Object\Authentication(
        [
            'apiBaseUrl' => 'http://10.28.1.140/api/v1/',
            'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMC4yOC4xLjE0MFwvYXBpXC92MVwvdXNlcl94eHhcL2xvZ2luIiwiaWF0IjoxNTk5MTA4MjgwLCJleHAiOjE5MTQ0NjgyODAsIm5iZiI6MTU5OTEwODI4MCwianRpIjoiaXNoQ1hJSXN4cHNKR25BRiIsInN1YiI6MywicHJ2IjoiYjkxMjc5OTc4ZjExYWE3YmM1NjcwNDg3ZmZmMDFlMjI4MjUzZmU0OCIsInVzZXJuYW1lIjoidGdzIn0.tkwF7tXcVUbTE90VZ-yhQWcLURRlz9ZdmHoX_wfo8ZU'
        ]
    )
);

var_dump(
    $client->send(
        new \GGGMnASDK\Abstraction\Object\StringeeX(
            [
                'type' => 'external',
                'receiver' => '0987802175',
                'action' => 'talk',
                'content' => 'Dev: Mã OTP của bạn là 0913'
            ]
        )
    )
);