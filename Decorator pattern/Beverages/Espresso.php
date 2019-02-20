<?php
namespace Decorator\Beverages;

use Decorator\Entities\Beverage;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = "Espresso.";
    }

    function cost()
    {
        return 1.99;
    }

}