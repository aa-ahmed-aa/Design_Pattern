<?php
require_once '../vendor/autoload.php';

use Decorator\Beverages\Espresso;
use Decorator\Beverages\DarkRoast;
use Decorator\Beverages\HouseBlend;
use Decorator\Condiments\Mocha;
use Decorator\Condiments\Whip;
use Decorator\Condiments\Soy;

$beverage = new Espresso();
echo $beverage->getDescription() . " costs " . $beverage->cost() . "\n";

/** Awesome usage */
$beverage_2 = new DarkRoast();
$beverage_2 = new Mocha($beverage_2);
$beverage_2 = new Mocha($beverage_2);
$beverage_2 = new Whip($beverage_2);

echo $beverage_2->getDescription() . " costs " . $beverage_2->cost() . "\n";

$beverage_3 = new HouseBlend();
$beverage_3 = new Soy($beverage_3);
$beverage_3 = new Mocha($beverage_3);
$beverage_3 = new Whip($beverage_3);

echo $beverage_3->getDescription() . " costs " . $beverage_3->cost() . "\n";