<?php
require_once '../vendor/autoload.php';

use Proxy\Proxies\ProxyFile;

$image = new ProxyFile('test.txt');
$image->display();

print "\n \n File already loaded from disk before, thus just display it now!\n";
$image->display();