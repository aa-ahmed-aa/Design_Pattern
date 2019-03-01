<?php

namespace Command\Commands\CeilingFan;


use Command\Entities\CeilingFan;
use Command\Interfaces\Command;

class CeilingFanLowCommand implements Command
{
    private $ceilingFan;
    private $prevSpeed;

    public function __construct(CeilingFan $ceilingFan)
    {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute()
    {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
        $this->ceilingFan->low();
    }

    public function undo()
    {
        switch ($this->prevSpeed){
            case CeilingFan::$HIGH:
                $this->ceilingFan->high();
                break;
            case CeilingFan::$MEDIUM:
                $this->ceilingFan->medium();
                break;
            case CeilingFan::$LOW:
                $this->ceilingFan->low();
                break;
            case CeilingFan::$OFF:
                $this->ceilingFan->off();
                break;
        }
    }

}