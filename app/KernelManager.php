<?php

namespace App;

use App\Providers\AppConsoleProvider;
use App\Providers\AppHttpProvider;
use App\Providers\AppProvider;
use Weebel\ControllerCaller\ControllerCallerProvider;
use Weebel\Router\RouterProvider;

class KernelManager extends \Weebel\Framework\KernelManager
{
    protected $providers = [
        AppProvider::class
        //...
    ];

    protected $modeProviders = [
        'http' => [
            RouterProvider::class,
            ControllerCallerProvider::class,
            AppHttpProvider::class
            //...
        ],
        'console' => [
            AppConsoleProvider::class
            //...
        ]
    ];

}