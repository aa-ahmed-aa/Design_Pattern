<?php

namespace Command\Commands\GarageDoor;


use Command\Entities\GarageDoor;
use Command\Interfaces\Command;

class GarageDoorClose Implements Command
{
    private $door;

    public function __construct(GarageDoor $door )
    {
        $this->door = $door;
    }

    public function execute()
    {
        $this->door->close();
    }

    public function undo()
    {
        $this->door->open();
    }

}