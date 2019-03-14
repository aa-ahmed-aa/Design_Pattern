<?php

namespace State\States;


use State\Entities\GumballMachine;
use State\Interfaces\State;

class NoQuarterState implements State
{
    private $gameballMachine;

    public function __construct( GumballMachine $gameballMachine )
    {
        $this->gameballMachine = $gameballMachine;
    }

    public function insertQuarter()
    {
        print "You inserted a quarter...\n";
        $this->gameballMachine->setState( $this->gameballMachine->getHasQuarterState() );
    }

    public function ejectQuarter()
    {
        print "You haven't inserted quarter...\n";
    }

    public function turnCrank()
    {
        print "You turned, but there's no quarter...\n";
    }

    public function dispense()
    {
        print "You need to pay first...\n";
    }
}