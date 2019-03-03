# Adapter Pattern
Convert the interface of a class into another interface clients expect.let's classes work together that couldn't otherwise because of incompatible interfaces.

### Problem
We have ducks and turkeys every one can fly but not every one make the same sound ducks duck and turkey's gobble so we need an adapter to can gobble and fly the same way as ducks do

### In the future (we want)
- add more composition between the turkeys and other kind of birds.

### Now pattern talks

#### UML Diagram
![Adapter Pattern](http://www.objectsbydesign.com/books/images/HF-AdapterUML.jpg)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Commands                           (holds the commands categorized by the device type)
│   ├───CeilingFan
│   │       CeilingFanHighCommand.php
│   │       CeilingFanLowCommand.php
│   │       CeilingFanMediumCommand.php
│   │       CeilingFanOffCommand.php
│   │
│   ├───GarageDoor
│   │       GarageDoorClose.php
│   │       GarageDoorOpen.php
│   │
│   ├───Hottub
│   │       HottubOff.php
│   │       HottubOn.php
│   │
│   ├───Light
│   │       LightOffCommand.php
│   │       LightOnCommand.php
│   │
│   └───Stereo
│           StereoOffCommand.php
│           StereoOnCommand.php
│
├───Entities                          (holds the main functions of every device)
│       CeilingFan.php
│       GarageDoor.php
│       Hottub.php
│       Light.php
│       Stereo.php
│
├───Interfaces                        (app interfaces)
│       Command.php
│       NoCommand.php
│
└───Invocations                       (the invocations for our commands)
        RemoteControl.php

```

-- Run `Main.php` and trace the execution to get familiar with the pattern.