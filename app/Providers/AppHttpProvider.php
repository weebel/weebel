<?php

namespace App\Providers;

use Weebel\Configuration\Configuration;
use Weebel\Contracts\Bootable;

class AppHttpProvider implements Bootable
{
public function __construct(protected Configuration $configuration)
{
}

    public function boot(): void
    {
        //dd($this->configuration->get('routes'));
    }
}