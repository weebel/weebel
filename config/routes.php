<?php

use App\Http\Controllers\MasterController;
use Symfony\Component\Routing\Route;

return [
    new Route('/', ['_controller' => MasterController::class, '_method' => 'index'], methods: ['GET'])
];