# State Pattern
Allow an object to alter its behavior when its internal state changes the object will appear to change its class.

### Problem
We have a gumball machine and the machine have many states to manage (insert, turnCrank, and dispense) write code that manages this problem

### In the future (we want)
- add more states to the machine.

### Now pattern talks

#### UML Diagram
![State patter](https://raw.githubusercontent.com/LionRoar/Head-First-Design-Patterns-PHP/master/ch10/state_pattern.png)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Entities                    (holds the entities of the application)
│       GumballMachine.php
│
├───Interfaces                  (holds the app interfaces)
│       State.php
│
└───States                      (application statuses)
        HasQuarterState.php
        NoQuarterState.php
        SoldoutState.php
        SoldState.php
        WinnerState.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.