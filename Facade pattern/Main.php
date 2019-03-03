<?php
require_once '../vendor/autoload.php';

use Facade\Components\Amplifier;
use Facade\Components\Tuner;
use Facade\Components\DvdPlayer;
use Facade\Components\CdPlayer;
use Facade\Components\Projector;
use Facade\Components\TheaterLights;
use Facade\Components\Screen;
use Facade\Components\PopcornPopper;
use Facade\Facades\HomeTheaterFacade;

//instances of devices
$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer;
$projector = new Projector();
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();

//
$homeTheater = new HomeTheaterFacade(
    $amp , $tuner , $dvd , $cd ,
    $projector , $screen , $lights ,$popper
);
$homeTheater->watchMovie("Stranger Things");
echo PHP_EOL;
$homeTheater->endMovie();