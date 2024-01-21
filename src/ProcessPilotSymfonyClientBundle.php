<?php

namespace ProcessPilot\Symfony\Client;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ProcessPilotSymfonyClientBundle extends AbstractBundle
{
    /**
     * @return string
     */
    public function getExtensionAlias(): string
    {
        return 'process-pilot';
    }
}
