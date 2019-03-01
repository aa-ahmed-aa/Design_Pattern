<?php

namespace Command\Entities;


class CeilingFan
{
    public static $HIGH = 3;
    public static $MEDIUM = 2;
    public static $LOW = 1;
    public static $OFF = 0;
    public $location;
    public $speed;

    private $roomName;

    public function __construct($roomName)
    {
        $this->roomName = $roomName;
    }

    public function high()
    {
        $this->speed = $this->HIGH;
        print "Ceiling fan is high.\n";
    }

    public function medium()
    {
        $this->speed = $this->MEDIUM;
        print "Ceiling fan is medium.\n";
    }

    public function low()
    {
        $this->speed = $this->LOW;
        print "Ceiling fan is low.\n";
    }

    public function off()
    {
        $this->speed = $this->OFF;
        print "Ceiling fan is off.\n";
    }

    public function getSpeed()
    {
        return $this->speed;
    }
}