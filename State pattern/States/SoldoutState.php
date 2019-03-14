<?php

namespace State\States;


use State\Entities\GumballMachine;
use State\Interfaces\State;

class SoldoutState implements State
{
    private $gumballMachine;

    public function __construct( GumballMachine $gumballMachine )
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo "You can't insert a quarter , the machine is sold out\n";
    }

    public function ejectQuarter()
    {
        echo "You can't eject, You haven't inserted a quarter yet\n";
    }

    public function turnCrank()
    {
        echo "You turned, but there are no gumballs\n";
    }

    public function dispense()
    {
        echo "No gumball dispensed \n";
    }
}