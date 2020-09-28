<?php

namespace GGGMnASDK\Abstraction\Object;

use GGGMnASDK\Abstraction\Contract\IMessage;
use GGGMnASDK\Abstraction\Core\AObject;
use GGGMnASDK\Abstraction\Core\IObject;
use GGGMnASDK\Abstraction\Core\TObject;

class StringeeX extends AObject implements IMessage, IObject
{
    use TObject;

    private $receiver;

    private $type;

    private $action;

    private $content;

    private $messageId;

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
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param mixed $messageId
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    public function __construct($params = [])
    {
        parent::__construct($params);
    }
}
