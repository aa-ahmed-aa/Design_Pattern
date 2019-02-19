<?php
namespace Strategy\Types;

use Strategy\Behaviors\FlyBehavior;
use Strategy\Behaviors\QuackBehavior;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public abstract function display();

    public function __construct(FlyBehavior $fb, QuackBehavior $qb)
    {
        $this->flyBehavior = $fb;
        $this->quackBehavior = $qb;
    }

    public function setFlyBehavior($fb)
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior($qb)
    {
        $this->quackBehavior = $qb;
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    /**
     * Template for any future behavior
     */
    public function performAnyThing()
    {
    //   $this->AnyThingBehavior.AnyThing();
    }
}
