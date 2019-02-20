<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 2/20/2019
 * Time: 2:54 AM
 */

namespace Decorator\Beverages;

use Decorator\Entities\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "HouseBlend";
    }

    function cost()
    {
        return 0.89;
    }
}