<?php
namespace Strategy\Objects;

use Strategy\Behaviors\QuackBehaviors\MuteQuack;
use Strategy\Behaviors\FlyBehaviors\FlyNoWay;
use Strategy\Types\Duck;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->setflyBehavior( new FlyNoWay() );
        $this->setQuackBehavior( new MuteQuack() );
    }

    public function display()
    {
        echo "i'm a RubberDuck\n";
    }
}