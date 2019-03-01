<?php

namespace Command\Commands\Hottub;


use Command\Entities\Hottub;
use Command\Interfaces\Command;

class HottubOff implements Command
{

    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->off();
    }

    public function undo()
    {
        $this->hottub->off();
    }

}