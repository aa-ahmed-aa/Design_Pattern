# Facade Pattern
Provides a unified interface to a set of interfaces in a subsystem facade defines a higher-level interface that makes the subsystem easier to use.

### Problem
We have a set of devices (amplifier, projector, tunner, dvdplayer, popcorn machine) every device has its own task and we want to add a function to use those devices features.

### In the future (we want)
- add more complex tasks that overrides the system tasks without coupling them.

### Now pattern talks

#### UML Diagram
![Facade Pattern](http://blog.lukaszewski.it/wp-content/uploads/2013/08/facade_and_the_principle_of_least_knowledge.png)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Components                  ( holds our system main functions )
│       Amplifier.php
│       CdPlayer.php
│       DvdPlayer.php
│       PopcornPopper.php
│       Projector.php
│       Screen.php
│       TheaterLights.php
│       Tuner.php
│
└───Facades                     ( holds our main facades )
        HomeTheaterFacade.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.