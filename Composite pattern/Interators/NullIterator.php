<?php

namespace Composite\Interators;


use Composite\Interfaces\IteratorInterface;

class NullIterator implements IteratorInterface
{
    public function next()
    {
        return NULL;
    }

    public function hasNext()
    {
        return false;
    }
}