<?php

namespace Command\Commands\Hottub;


use Command\Entities\Hottub;
use Command\Interfaces\Command;

class HottubOn implements Command
{
    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->on();
    }

    public function undo()
    {
        $this->hottub->off();
    }

}