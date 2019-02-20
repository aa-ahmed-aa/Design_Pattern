<?php
namespace Decorator\Entities;

abstract class Beverage
{
    protected $description = "Unknown description";

    public function getDescription()
    {
//        die($this->description);
        return $this->description;
    }

    public abstract function cost();

}