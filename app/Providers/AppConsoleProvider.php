<?php

namespace App\Providers;

use App\Console\Commands\GreetingCommand;
use Weebel\Console\CommandContainer;
use Weebel\Contracts\Bootable;
use Weebel\Contracts\Container;

class AppConsoleProvider implements Bootable
{

    public function __construct(protected Container $container, protected CommandContainer $commandContainer)
    {
    }

    public function boot(): void
    {
        $this->commandContainer->register(GreetingCommand::class);
    }
}