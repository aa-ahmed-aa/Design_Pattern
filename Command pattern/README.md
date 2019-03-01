# Command Pattern (Encapsulating Invocation)
Encapsulates a request as an object, thereby letting you parameterize clients with different requests, queue or log requests, and support undoable operations.

### Problem
We have a simple home operations and a remote control and we want to create a program to automate the task of controlling the come using the remote. 

### In the future (we want)
- add more button functions to the remote control.
- undo specific button from the remote.
- create a button that will execute more functions at the same time.

### Now pattern talks

#### UML Diagram
![Command Pattern](https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Command_pattern.svg/700px-Command_pattern.svg.png)
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