<?php

namespace Dehuk\Bundle\JsonRpcClient;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JsonRpcClientBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
