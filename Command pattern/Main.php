<?php
require_once '../vendor/autoload.php';

use Command\Invocations\RemoteControl;
use Command\Entities\Light;
use Command\Entities\CeilingFan;
use Command\Entities\GarageDoor;
use Command\Entities\Stereo;
use Command\Commands\Light\LightOnCommand;
use Command\Commands\Light\LightOffCommand;
use Command\Commands\CeilingFan\CeilingFanHighCommand;
use Command\Commands\CeilingFan\CeilingFanOffCommand;
use Command\Commands\GarageDoor\GarageDoorOpen;
use Command\Commands\GarageDoor\GarageDoorClose;
use Command\Commands\Stereo\StereoOnCommand;
use Command\Commands\Stereo\StereoOffCommand;

$remoteControl = new RemoteControl();

//out main house devices
$livingRoomLight = new Light("Living Room");
$kitchenLight = new Light("Kitchen");
$ceilingFan = new CeilingFan("Living Room");
$garageDoor = new GarageDoor();
$stereo = new Stereo("Living Room");

//our commands on the remote control
$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);
$garageDoorUp = new GarageDoorOpen($garageDoor);
$garageDoorClose = new GarageDoorClose($garageDoor);
$stereoOn = new StereoOnCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);

//set the commands
$remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remoteControl->setCommand(2, $ceilingFanHigh, $ceilingFanOff);
$remoteControl->setCommand(3, $stereoOn, $stereoOff);

$remoteControl->onButtonWasPushed(0);
$remoteControl->offButtonWasPushed(0);
$remoteControl->undoButtonWasPushed();

