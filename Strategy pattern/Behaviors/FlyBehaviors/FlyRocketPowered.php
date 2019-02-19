<?php
namespace Strategy\Behaviors\FlyBehaviors;

use Strategy\Behaviors\FlyBehavior;

class FlyRocketPowered implements FlyBehavior
{
    /**
     * Implementation of the fly with rocket behavior
     */
    public function fly()
    {
        echo "Flying with a rocket\n";
    }
}

