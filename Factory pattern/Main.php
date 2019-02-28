<?php
require_once '../vendor/autoload.php';

use Factory\Factories\SimpleFactory;
use Factory\Interfaces\PizzaStore;

$factory = new SimpleFactory();
$pizzaStore = new PizzaStore($factory);

$pizzaStore->orderPizza("pepperoni");

print "Done.\n";