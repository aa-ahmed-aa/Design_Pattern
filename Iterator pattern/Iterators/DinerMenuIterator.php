<?php

namespace Iterator\Iterators;


use Iterator\Interfaces\Iterator;

class DinerMenuIterator implements Iterator
{
    private $items;
    private $position = 0;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function next()
    {
        return $this->items[$this->position++];
    }

    public function hasNext()
    {
        if($this->position >= count($this->items))
            return false;
        return true;
    }
}