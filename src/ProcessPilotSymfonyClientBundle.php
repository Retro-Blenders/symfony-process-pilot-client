<?php

namespace ProcessPilot\Symfony\Client;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ProcessPilotSymfonyClientBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->getRootNode()
            ->children()
                ->scalarNode('host')->end()
                ->scalarNode('project_id')->end()
                ->scalarNode('project_hash')->end()
                ->booleanNode('enabled')->defaultTrue()->end()
            ->end()
        ;
    }

    /**
     * @return string
     */
    public function getExtensionAlias(): string
    {
        return 'process-pilot';
    }

    public function loadExtension(array $config, ContainerConfigurator $containerConfigurator, ContainerBuilder $containerBuilder): void
    {
        dd($config);
    }
}
