<?php

namespace Command\Interfaces;


interface Command
{
    public function execute();
    public function undo();
}