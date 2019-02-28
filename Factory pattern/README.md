# Factory Pattern
Factory pattern divided into two main types (Factory method and Abstract factory), In this pattern i will focus on the difference between the two subset patterns and will code only the factory method.

## We need to talk 
#### Abstract Factory 
Provide an interface creating families of related or dependent objects without specifying their concrete classes.
with the Abstract Factory pattern, a class delegates the responsibility of object instantiation to another object via composition.

#### Factory Method 
Defines an interface for creating an object, but let the subclass decides which class to instantiate Factory Method lets a class defer instantiation to the subclass.
the Factory Method pattern uses inheritance and relies on a subclass to handle the desired object instantiation.

###### check out this awesome answer [link](https://stackoverflow.com/q/5739611/5701752)

### Problem
We have a pizza store this store has Cheese, Veggie, Clam, Pepperoni Pizza except in 
some little details and they have the same process for every pizza prepare(), bake(), cut(), box().

### In the future (we want)
- Add types of pizzas.
- Add stores and every store has it's own types of pizzas.

### Now pattern talks

#### UML Diagram
![Decorator Pattern](https://www.oreilly.com/library/view/head-first-design/0596007124/figs/web/119fig01.png.jpg)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Entities                (holds the types of the pizzas)
│       CheesePizza.php
│       ClamPizza.php
│       PepperoniPizza.php
│       VeggiePizza.php
│
├───Factories               (our pizza factory)
│       SimpleFactory.php   (our factory method pattern applied here)
│
└───Interfaces
        Pizza.php
        PizzaStore.php      (we might apply the abstract factory here in the future if we added more branches to our store)
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.