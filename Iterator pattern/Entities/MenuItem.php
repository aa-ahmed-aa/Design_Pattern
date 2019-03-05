<?php

namespace Iterator\Entities;


class MenuItem
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

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
}