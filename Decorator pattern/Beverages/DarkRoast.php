<?php
namespace Decorator\Beverages;

use Decorator\Entities\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "Dark Roast.";
    }

    function cost()
    {
        return 0.99;
    }

}