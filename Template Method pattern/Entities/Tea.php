<?php


namespace TemplateMethod\Entities;


use TemplateMethod\Templates\CaffeineBeverage;

class Tea extends CaffeineBeverage
{
    public function brew()
    {
        print "Stepping the tea...\n";
    }

    public function addCondiments()
    {
        print "Adding Lemon...\n";
    }
}