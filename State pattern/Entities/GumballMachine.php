<?php

namespace State\Entities;


use State\States\HasQuarterState;
use State\States\NoQuarterState;
use State\States\SoldoutState;
use State\States\SoldState;

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    private $winnerState;

    private $state;
    private $count = 0;

    public function __construct( $numberGumballs )
    {
        $this->soldOutState = new SoldoutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);

        $this->count = $numberGumballs;
        if( $numberGumballs > 0 )
        {
            $this->state = $this->noQuarterState;
        }else{
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState( $state )
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        print "A gumball comes rolling out the slot...";
        if( $this->count != 0 )
        {
            $this->count = $this->count -1;
        }
    }

    //getters for states

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    /**
     * @return SoldoutState
     */
    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return soldState
     */
    public function getSoldState()
    {
        return $this->soldState;
    }

    /**
     * @return SoldoutState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getWinnerState()
    {
        return $this->winnerState;
    }
}