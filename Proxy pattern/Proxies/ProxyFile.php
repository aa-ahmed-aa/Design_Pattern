<?php

namespace Proxy\Proxies;


use Proxy\Entities\RealFile;
use Proxy\Interfaces\File;

class ProxyFile implements File
{
    private $realFile, $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * Proxy pattern
     **/
    public function display()
    {
        if ($this->realFile == null)
            $this->realFile = new RealFile($this->fileName);

        print $this->realFile->display();
    }
}