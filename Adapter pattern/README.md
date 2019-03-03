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
├───Adapters                  (holds the application addapter)
│       TurkeyAdapter.php
│
├───Entities                  (animals ( classes ) we will use on the adapter)
│       MallardDuck.php
│       WildTurkey.php
│
└───Interfaces                (interfaces for our application)
        Duck.php
        Turkey.php

```

-- Run `Main.php` and trace the execution to get familiar with the pattern.