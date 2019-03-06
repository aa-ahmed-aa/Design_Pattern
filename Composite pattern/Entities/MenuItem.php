<?php

namespace Composite\Entities;


use Composite\Components\MenuComponent;
use Composite\Interators\NullIterator;

class MenuItem extends MenuComponent
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    private $nullIterator =  NULL;

    public function __construct( $name, $description, $vegetarian, $price )
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    public function printMenu()
    {
        echo " ". $this->getName();
        if($this->isVegetarian())
            echo "(v)";
        echo ", " .$this->getPrice();
        echo "   -- " . $this->getDescription() . "\n";
    }

    public function createIterator()
    {
        if(is_null($this->nullIterator))
            $this->nullIterator = new NullIterator();
        return $this->nullIterator;
    }
}