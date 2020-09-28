<?php
namespace GGGMnASDK\Abstraction\Contract;

interface ISender {
    public function send(IMessage $message);
}
