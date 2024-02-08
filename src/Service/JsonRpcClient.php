<?php

namespace Dehuk\Bundle\JsonRpcClient\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;

class JsonRpcClient
{
    private ContainerBagInterface $params;

    public function __construct(ContainerBagInterface $params)
    {
        $this->params = $params;
    }

    public function getJsonRpcSettings()
    {
        return $this->params->get("json_rpc_client.product_type");
    }
}
