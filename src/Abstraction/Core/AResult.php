<?php
namespace GGGMnASDK\Abstraction\Core;

/**
 * Class AResultObject
 *
 * @package SSAbstraction\Core
 */
abstract class AResult {
    /** @var string message */
    public $message;

    /** @var int code */
    public $messageCode;

    /** @var mixed result content everything of return data, eg: array, object.... */
    public $result;

}
