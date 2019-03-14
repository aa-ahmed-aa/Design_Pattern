<?php
require_once '../vendor/autoload.php';

use State\Entities\GumballMachine;

$gumballMachine = new GumballMachine(5);

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();