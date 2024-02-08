<?php

namespace Dehuk\Bundle\JsonRpcClient\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {

        $treeBuilder = new TreeBuilder("jsonrpc_settings");
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('product_type')->isRequired()->end()
            ->end();

        return $treeBuilder;

    }
}
