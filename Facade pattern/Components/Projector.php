<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 3/3/2019
 * Time: 11:46 PM
 */

namespace Facade\Components;


class Projector
{
    public function on(){
        echo "Projector on " . PHP_EOL;
    }

    public function wideScreenMode(){
        echo "Projector in to widescreen mode (16x9 aspect ratio) " . PHP_EOL;
    }

    public function off(){
        echo "Projector is off " . PHP_EOL;
    }
}