<?php
require_once '../vendor/autoload.php';

use Iterator\Entities\PancakeHouseMenu;
use Iterator\Entities\DinerMenu;
use Iterator\Entities\Waitress;

$pancake = new PancakeHouseMenu();
$dinner = new DinerMenu();

$waitress = new Waitress($pancake, $dinner);

$waitress->printMenu();