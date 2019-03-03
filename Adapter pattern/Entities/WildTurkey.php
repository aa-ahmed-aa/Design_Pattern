<?php

namespace Adapter\Entities;


use Adapter\Interfaces\Turkey;

class WildTurkey implements Turkey
{
    public function gobble()
    {
        print "Gobble gobble...\n";
    }

    public function fly()
    {
        print "i'm flying a short distance...\n";
    }
}