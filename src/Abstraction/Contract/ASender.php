<?php
namespace GGGMnASDK\Abstraction\Contract;

use GGGMnASDK\Abstraction\Object\Authentication;
use GuzzleHttp\ClientInterface;

abstract class ASender {

    protected $authentication;

    protected $httpClient;

    /**
     * @return mixed
     */
    public function getAuthentication()
    {
        return $this->authentication;
    }

    /**
     * @param mixed $authentication
     */
    public function setAuthentication($authentication)
    {
        $this->authentication = $authentication;
    }

    /**
     * @return mixed
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * @param mixed $httpClient
     */
    public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function __construct(ClientInterface $client, Authentication $authentication)
    {
        $this->httpClient = $client;
        $this->authentication = $authentication;
    }
}
