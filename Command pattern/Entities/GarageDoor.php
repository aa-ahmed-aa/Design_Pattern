<?php

namespace Command\Entities;


class GarageDoor
{
    public function open()
    {
        print "Garage door is open.\n";
    }

    public function close()
    {
        print "Garage door is closed.\n";
    }
}