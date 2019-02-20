<?php
require_once '../vendor/autoload.php';

use ObserverPattern\Objects\WeatherData;
use ObserverPattern\Entities\CurrentConditionsDisplay;
use ObserverPattern\Entities\StatisticsDisplay;
use ObserverPattern\Entities\ForecastDisplay;

$weatherData = new WeatherData();

$currentDisplay = new CurrentConditionsDisplay( $weatherData );
$statisticsDisplay = new StatisticsDisplay( $weatherData );
$forecastDisplay = new ForecastDisplay( $weatherData );

$weatherData->setMeasurements(80, 45, 29);
echo "------------------------------------------\n";
$weatherData->setMeasurements(92, 20, 21);
echo "------------------------------------------\n";
$weatherData->setMeasurements(85, 29, 15);

