<?php
namespace GGGMnASDK\Abstraction\Object;

use GGGMnASDK\Abstraction\Core\AObject;

class Authentication extends AObject {

    private $token;

    private $apiBaseUrl;

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return mixed
     */
    public function getApiBaseUrl()
    {
        return $this->apiBaseUrl;
    }

    /**
     * @param mixed $apiBaseUrl
     */
    public function setApiBaseUrl($apiBaseUrl)
    {
        $this->apiBaseUrl = $apiBaseUrl;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    public function __construct($params = [])
    {
        parent::__construct($params);
    }

}