<?php
namespace ObserverPattern\Entities;

use ObserverPattern\Interfaces\Observer;
use ObserverPattern\Interfaces\DisplayElement;
use ObserverPattern\Objects\WeatherData;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct( WeatherData $weatherData )
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver( $this );
    }

    public function update($temp, $humidity, $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display()
    {
        echo "Current conditions: $this->temperature F and $this->humidity % humidity.\n";
    }
}