<?php

namespace GGGMnASDK\Abstraction\Contract;

interface IClient {
    public function sendMessage(IMessage $message);
}
