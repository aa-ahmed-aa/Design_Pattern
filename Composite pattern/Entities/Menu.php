<?php

namespace Composite\Entities;


use Composite\Components\MenuComponent;
use Composite\Interators\CompositeIterator;
use Composite\Interators\MenuComponentsIterator;

class Menu extends MenuComponent
{
    private $menuComponents;
    private $name;
    private $description;

    private $compositeIterator = NULL;

    public function __construct( $name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent)
    {
        if (($key = array_search( $menuComponent, $this->menuComponents ) ) !== false) {
            unset($this->menuComponents[$key]);
        }
    }

    public function getChild(int $i)
    {
        return $this->menuComponents[$i];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function printMenu()
    {
        print "\n" . $this->getName() . " -- " . $this->getDescription() . "\n------------------------------------\n";

        $iterator = new MenuComponentsIterator($this->menuComponents);

        while( $iterator->hasNext() )
        {
            $menuComponent =  $iterator->next();
            $menuComponent->printMenu();
        }
    }

    public function createIterator()
    {
        if( is_null($this->compositeIterator) )
        {
            $this->compositeIterator = new CompositeIterator( new MenuComponentsIterator($this->menuComponents) );
        }

        return $this->compositeIterator;
    }
}