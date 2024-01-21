<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class ProcessPilotSymfonyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__, 2) . '/config/'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('process_pilot.client.settings');
        $definition->addMethodCall('setProjectId', [$config['project_id']]);
        $definition->addMethodCall('setProjectHash', [$config['project_hash']]);
        $definition->addMethodCall('setHost', [$config['host']]);
        $definition->addMethodCall('setEnabled', [$config['enabled']]);
    }

    public function getAlias(): string
    {
        return 'process_pilot';
    }
}
