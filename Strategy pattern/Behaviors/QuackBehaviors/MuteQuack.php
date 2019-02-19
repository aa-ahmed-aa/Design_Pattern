<?php
namespace Strategy\Behaviors\QuackBehaviors;

use Strategy\Behaviors\QuackBehavior;

class MuteQuack implements QuackBehavior{
    
    /**
     * Implementation of simple Quack
     */
    public function quack()
    {
        echo "Mute Quack\n";
    }
}