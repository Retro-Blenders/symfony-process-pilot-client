<?php

namespace ProcessPilot\Symfony\Client\Listener;

class ExceptionListener
{
    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getException();

        var_dump($exception);
    }
}
