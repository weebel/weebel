<?php

namespace App\Providers;

use Weebel\Contracts\Bootable;
use Weebel\Contracts\Container;

class AppProvider implements Bootable
{

    public function __construct(protected Container $container)
    {
    }

    public function boot(): void
    {
    }
}