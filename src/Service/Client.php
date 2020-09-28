<?php

namespace GGGMnASDK\Service;

use GGGMnASDK\Abstraction\Contract\IClient;
use GGGMnASDK\Abstraction\Contract\IMessage;
use GGGMnASDK\Abstraction\Contract\ISender;
use GGGMnASDK\Abstraction\Object\Authentication;
use GGGMnASDK\Abstraction\Object\MessageSystem;

class Client implements IClient {

    private $message;

    private $sender;

    public function __construct(ISender $sender, IMessage $message)
    {
        $this->sender = $sender;
        $this->message = $message;
    }

    public function sendMessage(IMessage $message = null)
    {
        if ($message !== null) {
            $this->message = $message;
        }

        return $this->sender->send($this->message);
    }

}