<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 2/20/2019
 * Time: 2:56 AM
 */

namespace Decorator\Condiments;

use Decorator\Entities\CondimentDecorator;

class SteamedMilk extends CondimentDecorator
{
    protected $beverage;

    public function __construct( $beverage )
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->beverage->getDescription() . ", SteamedMilk";
    }

    function cost()
    {
        return $this->beverage->cost() + 0.1;
    }
}