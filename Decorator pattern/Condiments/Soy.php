<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 2/20/2019
 * Time: 2:56 AM
 */

namespace Decorator\Condiments;

use Decorator\Entities\CondimentDecorator;

class Soy extends CondimentDecorator
{
    protected $beverage;

    public function __construct( $beverage )
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }

    function cost()
    {
        return $this->beverage->cost() + 0.15;
    }
}