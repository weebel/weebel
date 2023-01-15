<?php

namespace App\Http\Controllers;

use Weebel\Configuration\Configuration;

class MasterController
{

    public function __construct(protected Configuration $configuration)
    {
    }

    public function index(): string
    {
        return file_get_contents($this->configuration->getBasePath(). '/resources/views/welcome.html');
    }

}