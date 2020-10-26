<?php

namespace GGGMnASDK\Service;

use GGGMnASDK\Abstraction\Contract\IAuth;
use GGGMnASDK\Abstraction\Contract\IClient;
use GGGMnASDK\Abstraction\Contract\IMessage;
use GGGMnASDK\Abstraction\Contract\ISender;
use GGGMnASDK\Abstraction\Object\Authentication;
use GGGMnASDK\Abstraction\Object\MessageSystem;
use GuzzleHttp\ClientInterface;

class Client implements IClient {

    private $message;

    private $sender;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return ISender
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param ISender $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

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