<?php

namespace ProcessPilot\Symfony\Client\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class ProcessPilotSymfonyClientExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        var_dump('we are alive'); die();
    }
}
