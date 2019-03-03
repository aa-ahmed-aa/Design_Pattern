<?php
require_once '../vendor/autoload.php';

use Adapter\Entities\MallardDuck;
use Adapter\Entities\WildTurkey;
use Adapter\Adapters\TurkeyAdapter;

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

print "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

print "The Duck says...\n";
$duck->quack();
$duck->fly();

print "The TurkeyAdapter says...\n";
$turkeyAdapter->quack();
$turkeyAdapter->fly();