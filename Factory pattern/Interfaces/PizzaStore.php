<?php

namespace Factory\Interfaces;

use Factory\Factories\SimpleFactory;

class PizzaStore
{
    protected $factory;

    public function __construct( SimpleFactory $factory )
    {
        $this->factory = $factory;
    }

    public function orderPizza( $type )
    {
        $pizza = $this->factory->createPizza( $type );

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

}