<?php

namespace Factory\Factories;

use Factory\Entities\CheesePizza;
use Factory\Entities\ClamPizza;
use Factory\Entities\PepperoniPizza;
use Factory\Entities\VeggiePizza;

class SimpleFactory
{
    public static function createPizza($type)
    {
        $pizza = null;

        switch ( $type ) {
            case "cheese":
                $pizza = new CheesePizza();
                break;
            case "pepperoni":
                $pizza = new PepperoniPizza();
                break;
            case "clam":
                $pizza = new ClamPizza();
                break;
            case "veggie":
                $pizza = new VeggiePizza();
                break;
            default:
                break;
        }

        return $pizza;
    }
}

?>