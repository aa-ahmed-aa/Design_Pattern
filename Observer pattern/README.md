# Observer Pattern (Keeping your objects in the know)
Defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.<br>
you may see this pattern used alot in the front-end framework because it needs to eep track of data synced to the UI.


### Problem
We have a weather station predicts the weather and display the results to many other places it displays the weather status to forecast, statistics ....etc we need to keep track of the weather status for all formats.

### In the future (we want)
- add display for other ways(types) for example TV news weather.
- perform some operations before we update weather for specific form :<br>
imagine this scenario the weather station needs to send weather status to army but before it is been sent we want to notify the military stations in the area first.

### Now pattern talks

#### UML Diagram
![Strategy patter](https://wlloo.files.wordpress.com/2011/08/screen-shot-2011-08-01-at-9-50-49-pm.png)
#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Entities     (holds the entities that will implement the weather status in some way)
│       CurrentConditionsDisplay.php
│       ForecastDisplay.php
│       StatisticsDisplay.php
│
├───Interfaces    (holds all of the interfaces for our program)
│       DisplayElement.php
│       Observer.php
│       Subject.php
│
└───Objects    (holds our main feature to keep track of the weather)
        WeatherData.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.