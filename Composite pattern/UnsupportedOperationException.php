<?php

namespace Composite;


class UnsupportedOperationException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Unsupported Operation");
    }
}