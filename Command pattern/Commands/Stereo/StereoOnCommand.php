<?php

namespace Command\Commands\Stereo;


use Command\Entities\Stereo;
use Command\Interfaces\Command;

class StereoOnCommand implements Command
{
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
    }

    public function undo()
    {
        $this->stereo->off();

    }

}