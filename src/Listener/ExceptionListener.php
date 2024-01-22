<?php

namespace ProcessPilot\Symfony\Client\Listener;

use ProcessPilot\Client\Service\PilotClientService;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

final class ExceptionListener
{
    public function onKernelException(ExceptionEvent $event): void
    {
        $pilotService = PilotClientService::getInstance();
        $pilotService->sendToServer($event->getThrowable());
    }
}
