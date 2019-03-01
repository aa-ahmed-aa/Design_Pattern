<?php

namespace Command\Entities;


class Light
{
    private $roomName;

    public function __construct($roomName)
    {
        $this->roomName = $roomName;
    }

    public function on()
    {
        echo "Light is on.\n";
    }

    public function off()
    {
        echo "Light is off.\n";
    }
}