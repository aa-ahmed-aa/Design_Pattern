<?php


namespace TemplateMethod\Entities;


use TemplateMethod\Templates\CaffeineBeverage;

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        print "Dripping coffee throw the filter...\n";
    }

    public function addCondiments()
    {
        print "Adding suger and milk...\n";
    }

    public function customerWantsCondiments()
    {
        print "Would you like milk and sugar in your coffee?\n";
        $answer = rtrim(fgets(STDIN));

        if($answer == 'y')
        {
            return true;
        }else{
            return false;
        }
    }
}