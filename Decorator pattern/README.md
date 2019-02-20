# Decorator Pattern (Decorating Objects)
Decorators provide a flexibile alternative to subclassing extending functionality.

### Problem
We have a coffee shop called StarBuzz and they have coffee and condiments every list with it's prices:-<br>
```
Coffee
   House Blend        0.89
   Dark Roast         0.99
   Decaf              1.05
   Espresso           1.99
Condiments
   Steamed Milk       0.10
   Mocha              0.20
   Soy                0.15
   Whip               0.10
```
for example the customer might order (Decaf, double Mocha, Whip ) so it costs (1.05 + 2 * 0.20 + 0.10)
we want to maintain this program :).

### In the future (we want)
- add other items to the menu.
- add another factor to calculate the price size for example(large , medium, small).

### Now pattern talks

#### UML Diagram
![Decorator Pattern](https://i.stack.imgur.com/ctCkm.png)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Beverages       (holds the beverages for our menu)
│       DarkRoast.php
│       Decaf.php
│       Espresso.php
│       HouseBlend.php
│
├───Condiments     (holds the condiments for our menu)
│       Mocha.php
│       Soy.php
│       SteamedMilk.php
│       Whip.php
│
└───Entities       (main entities in the program)
        Beverage.php
        CondimentDecorator.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.