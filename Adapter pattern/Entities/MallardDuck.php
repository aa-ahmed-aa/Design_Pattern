<?php

namespace Adapter\Entities;


use Adapter\Interfaces\Duck;

class MallardDuck implements Duck
{
    public function quack()
    {
        print "Quack...\n";
    }

    public function fly()
    {
        print "Flying...\n";
    }
}