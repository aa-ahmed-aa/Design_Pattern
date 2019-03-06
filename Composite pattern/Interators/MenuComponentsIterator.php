<?php

namespace Composite\Interators;


use Composite\Interfaces\IteratorInterface;

class MenuComponentsIterator implements IteratorInterface
{
    private $menuItems;
    private $index = 0;

    public function __construct( $array )
    {
        $this->menuItems = $array;
    }

    public function next()
    {
        return $this->menuItems[$this->index++];
    }

    public function hasNext()
    {
        if($this->index >= count($this->menuItems))
            return false;
        return true;
    }
}