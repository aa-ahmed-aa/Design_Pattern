# Composite pattern
Compose objects into tree structured to request part whole hierarchies, Composite let's clients treat individual objects and compositions of objects uniformly.

### Problem
We have restaurant that have many menus one for Breakfast, Dinner and Lunch and there is also a dessert menu and we need to maintain this program so we can have access to add items to submenus and make menus submenu of other menu( Menu Composition :D ).

### In the future (we want)
- add more menus.
- nest submenus in a 4 level menus let's say ( MainMenu => Breakfast => Kids Menus => Dessert ).
- have the flexibility of accessing any composed feature using the parent object.

### Now pattern talks
- this pattern is most commonly used in the graphics framework.
- use this pattern when dealing with tree structures Anything.
#### UML Diagram
Sorry for the bad quality
![Command Pattern](https://github.com/aa-ahmed-aa/Design_Pattern/blob/master/Composite%20pattern/UML.jpg)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Components                          (Components that holds fake interfaces for our application)
│       MenuComponent.php
│
├───Entities                            (Entities that will implement or use the component)
│       Menu.php
│       MenuItem.php
│       Waitress.php
│
├───Interators                          (iterators for our components to loop on items after composing objects)
│       CompositeIterator.php
│       MenuComponentsIterator.php
│       NullIterator.php
│
└───Interfaces                          (simple app interfaces )
        IteratorInterface.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.