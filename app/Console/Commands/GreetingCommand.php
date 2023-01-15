<?php

namespace App\Console\Commands;

use Weebel\Console\Command;
use Weebel\Console\HasClimate;

class GreetingCommand extends Command
{
    protected const NAME = 'greeting';
    use HasClimate;


    public function __invoke($name)
    {
        $this->yellow("Hello $name");
    }
}