<?php

namespace Strategy\Objects;

use Strategy\Behaviors\FlyBehavior;
use Strategy\Behaviors\FlyBehaviors\FlyNoWay;
use Strategy\Behaviors\QuackBehavior;
use Strategy\Behaviors\QuackBehaviors\Squack;
use Strategy\Types\Duck;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior( new FlyNoWay() );
        $this->setQuackBehavior( new Squack() );
    }

    public function display()
    {
        echo "i'm a MallardDuck.\n";
    }
}