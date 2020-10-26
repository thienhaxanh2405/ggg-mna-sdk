<?php
namespace GGGMnASDK\Service;

use GGGMnASDK\Abstraction\Contract\ASender;
use GGGMnASDK\Abstraction\Contract\IMessage;
use GGGMnASDK\Abstraction\Contract\ISender;
use GGGMnASDK\Abstraction\Object\Authentication;
use GGGMnASDK\Abstraction\Object\MessageSystem;
use GGGMnASDK\Abstraction\Object\Result;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class StringeeX extends ASender implements ISender {

    public function send(IMessage $message)
    {
        $res = new Result();

        try {
            $doSend = $this->httpClient->request(
                'post',
                $this->authentication->getApiBaseUrl().'call/stringee/make-a-call',
                [
                    RequestOptions::HEADERS => [
                        'Authorization' => 'Bearer '.$this->authentication->getToken()
                    ],
                    RequestOptions::JSON => [
                        'number' => $message->getReceiver(),
                        'type' => $message->getType(),
                        'action' => $message->getAction(),
                        'content' => $message->getContent(),
                        'messageId' => $message->getMessageId()
                    ]
                ]
            );

            $strResponse = $doSend->getBody()->getContents();

            $jsonResponse = \json_decode($strResponse);
            if ($jsonResponse) {
                if ($jsonResponse->messageCode == 1) {
                    $res->messageCode = MessageSystem::SUCCESS;
                    $res->message = 'Success';
                    $res->result = $jsonResponse->result;
                } else {
                    $res->messageCode = MessageSystem::GENERAL_ERROR;
                    $res->message = $jsonResponse->message;
                }
            } else {
                $res->messageCode = MessageSystem::GENERAL_ERROR;
                $res->message = 'Fail to parse json';
            }
        } catch (GuzzleException $e) {
            $res->messageCode = $e->getCode();
            $res->message = $e->getMessage();
        } catch (\Exception $e) {
            $res->messageCode = MessageSystem::GENERAL_ERROR;
            $res->message = 'Exception: '.$e->getMessage();
        }

        return $res;

    }

    public function __construct(ClientInterface $client, Authentication $authentication)
    {
        parent::__construct($client, $authentication);
    }

}