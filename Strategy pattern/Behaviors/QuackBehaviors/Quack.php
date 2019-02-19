<?php
namespace Ahmed\Behaviors\QuackBehaviors;

use Ahmed\Behaviors;

class Quack implements QuackBehavior{
    
    /**
     * Implementation of simple Quack
     */
    public function quack()
    {
        echo "Quack Quack\n";
    }
}