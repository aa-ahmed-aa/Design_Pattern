<?php

namespace Facade\Facades;

use Facade\Components\Amplifier;
use Facade\Components\Tuner;
use Facade\Components\DvdPlayer;
use Facade\Components\CdPlayer;
use Facade\Components\Projector;
use Facade\Components\TheaterLights;
use Facade\Components\Screen;
use Facade\Components\PopcornPopper;

class HomeTheaterFacade
{
    private $amp;
    private $tuner;
    private $dvd;
    private $cd;
    private $projector;
    private $lights;
    private $screen;
    private $popper;

    public function __construct(
        Amplifier $amp ,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        Screen $screen,
        TheaterLights $lights,
        PopcornPopper $popper
    ){
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->screen = $screen;
        $this->lights = $lights;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie){
        echo "Get ready to watch a movie..." . PHP_EOL;
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie(){
        echo "Shutting movie theater down... " . PHP_EOL;
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}