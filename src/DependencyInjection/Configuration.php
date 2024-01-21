<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('process_pilot');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('host')->defaultValue('no-host')->end()
                ->scalarNode('project_id')->defaultValue('no-id')->end()
                ->scalarNode('project_hash')->defaultValue('no-hash')->end()
                ->booleanNode('enabled')->defaultTrue()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
