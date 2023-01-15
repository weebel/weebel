<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Weebel\Framework\Application(kernelManager: fn($arguments)=>new \App\KernelManager($arguments), basePath:__DIR__.'/../');

$app->run('http');