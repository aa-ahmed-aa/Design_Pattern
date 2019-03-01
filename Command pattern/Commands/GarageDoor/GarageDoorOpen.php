<?php

namespace Command\Commands\GarageDoor;


use Command\Entities\GarageDoor;
use Command\Interfaces\Command;

class GarageDoorOpen implements Command
{
    private $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute()
    {
        $this->door->open();
    }

    public function undo()
    {
        $this->door->close();
    }
}