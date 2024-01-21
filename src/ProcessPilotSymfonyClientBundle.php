<?php

namespace ProcessPilot\Symfony\Client;

use ProcessPilot\Symfony\Client\DependencyInjection\ProcessPilotSymfonyClientExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class ProcessPilotSymfonyClientBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new ProcessPilotSymfonyClientExtension();
        }

        return $this->extension;
    }
}
