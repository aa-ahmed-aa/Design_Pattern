<?php
namespace ObserverPattern\Interfaces;

interface Observer
{

    public function update( $temp, $humidity, $pressure );

}