<?php

namespace Singleton;


class ChocolateBoiler
{
    private $empty;
    private $boiled;

    function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public function fill()
    {
        if( $this->isEmpty() )
        {
            $this->empty = false;
            $this->boiled = false;
            // fill the boiled with a milk/chocolate mixture
            print "fill the boiled with a milk/chocolate mixture......\n";
        }
    }

    public function drain()
    {
        if( ! $this->isEmpty() && $this->isBoiled() )
        {
            print "drain the boiled milk and chocolate....\n";
            $this->empty = true;
        }
    }

    public function boil()
    {
        if( ! $this->isEmpty() && ! $this->isBoiled() )
        {
            print "bring the contents to a boil.....\n";
            $this->boiled = true;
        }
    }

    public function isEmpty()
    {
        return $this->empty;
    }

    public function isBoiled()
    {
        return $this->boiled;
    }
}