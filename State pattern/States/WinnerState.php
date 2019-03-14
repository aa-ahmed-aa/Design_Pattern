<?php

namespace State\States;


use State\Entities\GumballMachine;
use State\Interfaces\State;

class WinnerState implements State
{

    private $gumballMachine;

    public function __construct( GumballMachine $gumballMachine )
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        print "Please wait, we are already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        print "Sorry, you already turned the crank\n";
    }

    public function turnCrank()
    {
        print "Turning twice doesn't get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if( $this->gumballMachine->getCount() == 0 )
        {
            $this->gumballMachine->setState( $this->gumballMachine->getSoldOutState() );
        } else {
            $this->gumballMachine->releaseBall();
            print "You are a WINNER! you got two gumballs for your quarter.\n";
            if($this->gumballMachine->getCount() > 0)
            {
                $this->gumballMachine->setState( $this->gumballMachine->getNoQuarterState() );
            } else {
                print "Oops, out of gumballs!!\n";
                $this->gumballMachine->setState( $this->gumballMachine->getSoldOutState() );
            }
        }
    }

}