<?php

namespace State\States;


use State\Entities\GumballMachine;
use State\Interfaces\State;

class HasQuarterState implements State
{
    private $gumballMachine;
    private $randomWinner;

    public function __construct( GumballMachine $gumballMachine )
    {
        $this->gumballMachine = $gumballMachine;
        $this->randomWinner = rand(0,999);
    }

    public function insertQuarter()
    {
        print "You can't insert another quarter...\n";
    }

    public function ejectQuarter()
    {
        print "Quarter returned...\n";
        $this->gumballMachine->setState( $this->gumballMachine->getNoQuarterState() );
    }

    public function turnCrank()
    {
        print "You turned...\n";

        if( ($this->randomWinner == 10) && ($this->gumballMachine->getCount() > 1) )
        {
            $this->gumballMachine->setState( $this->gumballMachine->getWinnerState() );
        } else {
            $this->randomWinner = rand(0,999);
            $this->gumballMachine->setState( $this->gumballMachine->getSoldState() );
        }

    }

    public function dispense()
    {
        print "No gumball dispense...\n";
    }
}