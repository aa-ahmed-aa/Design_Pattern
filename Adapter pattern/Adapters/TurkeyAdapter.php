<?php

namespace Adapter\Adapters;


use Adapter\Interfaces\Duck;
use Adapter\Interfaces\Turkey;

class TurkeyAdapter implements Duck
{
    public $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for($i=0; $i < 5 ; $i++)
        {
            $this->turkey->fly();
        }
    }

}