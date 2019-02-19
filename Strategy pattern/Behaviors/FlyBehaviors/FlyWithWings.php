<?php
namespace Strategy\Behaviors\FlyBehaviors;

use Strategy\Behaviors\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    /**
     * Implementation of the fly No wings behavior
     */
    public function fly()
    {
        echo "I'm Flying\n";
    }
}

