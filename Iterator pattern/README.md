# Iterator Pattern
Provide a way to access of an aggregation object sequentially without exposing it's underlying representation.

## Scenario
we have two menus one for breakfast and another for dinner we want to iterate over those two menus without writing a duplicated code.

### In the future (we want)
- add more shared features between those menus(or what kind of object they were).

### Now pattern talks

#### UML Diagram
![Iterator Pattern](https://github.com/LionRoar/Head-First-Design-Patterns-PHP/raw/master/ch09/iterator.png)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Entities                            (holds the entities like the pancake, waitress and dinner)
│       DinerMenu.php
│       MenuItem.php
│       PancakeHouseMenu.php
│       Waitress.php
│
├───Interfaces                           (static interfaces used in our application most important is the iterator)
│       Iterator.php
│       Menu.php
│
└───Iterators                            (implemented iterators used for the pancake and dinner)
        DinerMenuIterator.php
        PancakeHouseMenuIterator.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.