<?php
require_once '../vendor/autoload.php';

use TemplateMethod\Entities\Tea;
use TemplateMethod\Entities\Coffee;

$tea = new Tea();
$coffee = new Coffee();

print "Making tea...\n";
$tea->prepareRecipe();

print "Making coffee...\n";
$coffee->prepareRecipe();

