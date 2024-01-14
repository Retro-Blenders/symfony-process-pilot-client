<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class ProcessPilotSymfonyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        var_dump('We\'re alive!');die;
    }
}
