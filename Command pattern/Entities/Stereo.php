<?php

namespace Command\Entities;


class Stereo
{
    private $roomName;

    public function __construct($roomName)
    {
        $this->roomName = $roomName;
    }

    public function on()
    {
        print "Stereo is on";
    }

    public function off()
    {
        print "Stereo is off";
    }

    public function setCD()
    {
        print "\t Set CD.\n";
    }

    public function setDvd()
    {
        print "\t Set Dvd.\n";
    }

    public function setRadio()
    {
        print "\t Set Radio.\n";
    }

    public function setVolume( $volume )
    {
        print "\t Set volume to $volume.\n";
    }
}