<?php

namespace Proxy\Entities;


use Proxy\Interfaces\File;

class RealFile implements File
{
    private $fileName, $content;

    public function __construct(string $fileName)
    {
        $this->fileName = $fileName;

        $this->load($fileName);
    }

    public function load(string $fileName)
    {
        print "Loading '$fileName'...\n";

        $openedFile = fopen($fileName, "r");

        $this->content = fread($openedFile, filesize($this->fileName));
    }

    public function display()
    {
        print $this->content;
    }
}