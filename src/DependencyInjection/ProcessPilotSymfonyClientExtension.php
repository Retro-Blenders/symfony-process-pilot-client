<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class ProcessPilotSymfonyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(
                dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'config'
            )
        );

        $loader->load('services.xml');
    }
}
