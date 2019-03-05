<?php

namespace Iterator\Entities;


use Iterator\Interfaces\Iterator;

class Waitress
{
    private $panCakeHouseMenu;
    private $dinerMenu;

    public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu)
    {
        $this->panCakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $panCakeIterator = $this->panCakeHouseMenu->createIterator();
        $dinerMenu = $this->dinerMenu->createIterator();
        print "\nMenu\n-----------------\nBreakFast\n";
        $this->printSpecificMenu( $panCakeIterator );
        print "\nLunch\n";
        $this->printSpecificMenu( $dinerMenu );
    }

    private function printSpecificMenu(Iterator $iterator)
    {
        while( $iterator->hasNext() )
        {
            $menuItem = $iterator->next();
            print $menuItem->getName() . ", " . $menuItem->getPrice() . " -- " . $menuItem->getDescription() . "\n";
        }
    }
}