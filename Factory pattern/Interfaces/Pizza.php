<?php

namespace Factory\Interfaces;


class Pizza
{
    public function prepare()
    {
        print "Preparing......\n";
    }

    public function bake()
    {
        print "Baking......\n";
    }

    public function cut()
    {
        print "Cutting......\n";
    }

    public function box()
    {
        print "Boxing......\n";
    }
}