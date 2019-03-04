<?php

namespace TemplateMethod\Templates;


abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if( $this->customerWantsCondiments() )
        {
            $this->addCondiments();
        }
    }

    abstract function brew();

    abstract function addCondiments();

    public function boilWater()
    {
        print "Boiling water...\n";
    }

    public function pourInCup()
    {
        print "Pouring in cup...\n";
    }

    public function customerWantsCondiments()
    {
        return true;
    }
}