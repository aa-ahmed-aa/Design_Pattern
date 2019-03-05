<?php

namespace Iterator\Entities;


use Iterator\Interfaces\Menu;
use Iterator\Iterators\DinerMenuIterator;

class DinerMenu implements Menu
{
    private $menuItems = array();
    private $name = "Lunch";

    public function __construct()
    {
        $this->addItem("Vegetarian BLT", "(Fakin’) Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29);
        $this->addItem("Hotdog", "A hot dog, with saurkraut, relish, onions, topped with cheese", false, 3.05);
        $this->addItem("Steamed Veggies and Brown Rice", "Steamed vegetables over brown rice", true, 3.99);
        $this->addItem("Pasta", "Spaghetti with Marinara Sauce and a slice of sourdough bread", false, 3.89);
    }

    public function addItem( $name, $description, $vegetarian, $price )
    {
        $item = new MenuItem($name, $description, $vegetarian, $price);
        array_push($this->menuItems, $item);
    }

    public function createIterator()
    {
        return new DinerMenuIterator($this->menuItems);
    }

    public function getName()
    {
        return $this->name;
    }
}