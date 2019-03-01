<?php

namespace Command\Commands\Light;

use Command\Entities\Light;
use Command\Interfaces\Command;

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }

    public function test()
    {
        echo "testing";
    }
}