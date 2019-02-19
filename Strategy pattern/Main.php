<?php
require_once '../vendor/autoload.php';


use Strategy\Objects\RubberDuck;
use Strategy\Objects\MallardDuck;

$rubberDuck = new RubberDuck();
$rubberDuck->display();
$rubberDuck->performQuack();
$rubberDuck->performFly();

echo "-----------------------";

$rubberDuck = new MallardDuck();
$rubberDuck->display();
$rubberDuck->performQuack();
$rubberDuck->performFly();