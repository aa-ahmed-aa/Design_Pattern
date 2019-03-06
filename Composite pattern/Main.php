<?php
require_once '../vendor/autoload.php';

use Composite\Entities\Menu;
use Composite\Entities\MenuItem;
use Composite\Entities\Waitress;

$pancakeHouseMenu = new Menu( "Pancake House Menu", "Breakfast" );
$dinerMenu = new Menu("Diner Menu", "Lunch");
$cafeMenu = new Menu("Cafe Menu", "Dinner");
$dessertMenu = new Menu("Dessert Menu", "Dessert of courses");

$allMenus = new Menu("All Menu", "All Menus Combined");

$allMenus->add( $pancakeHouseMenu );
$allMenus->add( $dinerMenu );
$allMenus->add( $cafeMenu );

//################################################################################################
//add pancake house menu items
$pancakeHouseMenu->add(new MenuItem("K&B’s Pancake Breakfast",
    "Pancakes with scrambled eggs, and toast ",
    true,
    2.99));
$pancakeHouseMenu->add(new MenuItem("Regular Pancake Breakfast",
    "Pancakes with fried eggs, sausage",
    false,
    2.99));
$pancakeHouseMenu->add(new MenuItem("Blueberry Pancakes",
    "Pancakes made with fresh blueberries",
    true,
    3.49));

//################################################################################################
//add dinermenu menu oitems
$dinerMenu->add(new MenuItem("Vegetarian BLT",
    "(Fakin’) Bacon with lettuce & tomato on whole wheat", true, 2.99));
$dinerMenu->add(new MenuItem("BLT",
    "Bacon with lettuce & tomato on whole wheat", false, 2.99));
$dinerMenu->add(new MenuItem(
    "Pasta","Spaghetti with Marinara Sauce, and a slice of sourdough bread",
    true, 3.89));

//################################################################################################
//add dessert menu items
$dessertMenu->add(new MenuItem(
    "Apple Pie","Apple pie with a flakey crust, topped with vanilla ice-cream",
    true, 1.59));
$dessertMenu->add(new MenuItem(
    "Cheesecake","Creamy New York cheesecake, with a chocolate graham crust",
    true, 1.99));
$dessertMenu->add(new MenuItem(
    "Sorbet","A scoop of raspberry and a scoop of lime",
    true, 1.89));

//add dessert menu to diner menu
$dinerMenu->add($dessertMenu);

//################################################################################################
//add cafe menu items
$cafeMenu->add(new MenuItem("Veggie Burger and Air Fries",
    "Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
    true, 3.99));
$cafeMenu->add(new MenuItem("Soup of the day",
    "A cup of the soup of the day, with a side salad",
    false, 3.69));
$cafeMenu->add(new MenuItem("Burrito",
    "A large burrito, with whole pinto beans, salsa, guacamole",
    true, 4.29));


$waitress = new Waitress($allMenus);

$waitress->printMenu();