<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('process-pilot');
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('host')->end()
                ->scalarNode('project_id')->end()
                ->scalarNode('project_hash')->end()
                ->booleanNode('enabled')->defaultTrue()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
