<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;

final class ProcessPilotSymfonyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        var_dump('We\'re alive!');die;
    }
}
