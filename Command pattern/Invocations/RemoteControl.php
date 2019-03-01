<?php

namespace Command\Invocations;

use Command\Interfaces\Command;
use Command\Interfaces\NoCommand;

class RemoteControl
{
    private $onCommands;
    private $offCommands;
    private $undoCommand;

    public function __construct()
    {
        for($i = 0; $i < 7; $i++)
        {
            $this->onCommands[$i] = NoCommand::class;
            $this->offCommands[$i] = NoCommand::class;
        }

        $this->undoCommand = NoCommand::class;
    }

    public function setCommand( $slot,Command $onCommand,Command $offCommand )
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed( $slot )
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonWasPushed( $slot )
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
    }
}