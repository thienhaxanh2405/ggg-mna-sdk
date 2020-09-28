<?php

namespace GGGMnASDK\Abstraction\Object;

use GGGMnASDK\Abstraction\Contract\IMessage;
use GGGMnASDK\Abstraction\Core\AObject;
use GGGMnASDK\Abstraction\Core\IObject;
use GGGMnASDK\Abstraction\Core\TObject;

class SMS extends AObject implements IMessage, IObject
{
    use TObject;

    private $brandName;

    private $receiver;

    private $message;

    /**
     * @return mixed
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * @param mixed $brandName
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

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

    public function __construct($params = [])
    {
        parent::__construct($params);
    }

}
