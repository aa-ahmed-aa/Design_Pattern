<?php
namespace Strategy\Behaviors\QuackBehaviors;

use Strategy\Behaviors\QuackBehavior;

class Squack implements QuackBehavior{
    
    /**
     * Implementation of simple Quack
     */
    public function quack()
    {
        echo "SQuack\n";
    }
}