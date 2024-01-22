<?php

namespace ProcessPilot\Symfony\Client;

use ProcessPilot\Client\ErrorHandler;
use ProcessPilot\Client\Service\PilotClientService;
use ProcessPilot\Client\Settings;
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

    public function boot(): void
    {
        /** @var Settings $settings */
        $settings = $this->container->get(Settings::class);

        $pilotClientService = PilotClientService::getInstance();
        $pilotClientService::setSettings($settings);

        if ($settings->isEnabled()) {
            ErrorHandler::registerShutdownHandler();
        }
    }
}
