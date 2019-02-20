<?php
namespace Decorator\Beverages;

use Decorator\Entities\Beverage;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = "Decaf.";
    }

    function cost()
    {
        return 1.05;
    }
}