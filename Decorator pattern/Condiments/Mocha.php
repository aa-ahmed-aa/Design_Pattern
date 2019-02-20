<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 2/20/2019
 * Time: 2:55 AM
 */
namespace Decorator\Condiments;

use Decorator\Entities\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public $beverage;

    public function __construct( $beverage )
    {
        $this->beverage = $beverage;
    }

    function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    function cost()
    {
        return $this->beverage->cost() + 0.2;
    }
}