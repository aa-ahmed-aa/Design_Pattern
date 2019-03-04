# Template Method Pattern (Encapsulating Algorithms)
Define the skeleton of an algorithm in an operation, deferring some steps to subclasses.Template Method lets subclasses redefine certain steps of an algorithm without changing the algorithm's structure.

### Problem
We have two types of drinks(tea, coffee) that needs to be prepared from a recipe and those drinks have some steps on common
<br>

### In the future (we want)
- add drinks that shares recipe steps .
- control the algorithm of the template .


### Now pattern talks

#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Entities                       (holds our entities tea,coffeee)
│       Coffee.php
│       Tea.php
│
└───Templates                       (holds the abstract tempates for our algorithm)
        CaffeineBeverage.php       
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.