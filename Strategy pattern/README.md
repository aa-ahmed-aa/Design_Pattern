## Strategy Pattern
Defines a family of algorithms ,encapsulates each one and makes them interchangable. strategy lets the algorithm vary independently

### Problem
we have a punch of ducks (MallardDuck, rubberduck ,...etc) and we want to write a program to describe each duck according to one of two features **can fly or not ?** and **can quack or not ?**.
<br>

### In the future (we want)
- add more animals to the types.
- add more features to every animal type.
- share common features between animals.

### Now pattern talks

#### UML Diagram
![Strategy patter](http://blog.lukaszewski.it/wp-content/uploads/2013/01/strategy-1024x520.png)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Behaviors   ------   (holds the Main behaviors and sub behavior)
│   │   FlyBehavior.php (Main Behaviors)
│   │   QuackBehavior.php
│   │
│   ├───FlyBehaviors   ------   (holds sub behaviors of the fly)
│   │       FlyNoWay.php
│   │       FlyRocketPowered.php
│   │       FlyWithWings.php
│   │
│   └───QuackBehaviors
│           MuteQuack.php
│           Quack.php
│           Squack.php
│
├───Objects   ------   (holds the types of every single duck)
│       MallardDuck.php
│       RubberDuck.php
│
└───Types   ------   (holds the base types)
        Duck.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.