<?php
namespace Strategy\Behaviors\FlyBehaviors;

use Strategy\Behaviors\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    /**
     * Implementation of the fly with wings behavior
     */
    public function fly()
    {
        echo "i can't fly\n";
    }
}

