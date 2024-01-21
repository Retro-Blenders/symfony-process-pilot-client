<?php

namespace ProcessPilot\Symfony\Client;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ProcessPilotSymfonyClientBundle extends Bundle
{
//    public function configure(DefinitionConfigurator $definition): void
//    {
//        $definition->rootNode()
//            ->children()
//            ->scalarNode('host')->end()
//            ->scalarNode('project_id')->end()
//            ->scalarNode('project_hash')->end()
//            ->booleanNode('enabled')->defaultTrue()->end()
//            ->end()
//        ;
//    }
//
//    /**
//     * @return string
//     */
//    public function getExtensionAlias(): string
//    {
//        return 'process-pilot';
//    }
//
//    public function loadExtension(array $config, ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void
//    {
//        $settings = $containerConfigurator->services()
//            ->get('process_pilot.client.settings')
//        ;
//
//        dd($settings);
//    }
}
