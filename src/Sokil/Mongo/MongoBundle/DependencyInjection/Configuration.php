<?php

namespace Sokil\Mongo\MongoBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('mongo');

        $rootNode
            ->children()
                ->scalarNode('dsn')->end()
            ->end();

        return $treeBuilder;
    }
}
