# Proxy Pattern
Provide a surrogate or placeholder for another object to control access to it

##### Note 
this pattern here is not from the book (HFDP) it is based on [this blog](https://medium.com/@devlob/proxy-design-pattern-to-speed-up-your-applications-2416816493d)

### Problem
Read-write operations will always be time consuming, since we directly access the disk and that takes some time, so you can write a code that minimises the amount of times that we have to access a central container, like the hard disk or the database, which they tend to be very slow compared to RAM

### In the future (we want)
- add more behaviors between proxies.
- Not repeating ( coupling ) actions so performance enhancement

### Now pattern talks

#### Folder Structure
read the following folder structure and then have a look on the code
```
├───Entities            (Behaviors you will use in the proxy)
│       RealFile.php
│
├───Interfaces          (interfaces that the proxy and the behaviors should implement)
│       File.php
│
└───Proxies             (Proxies means owner of the entities and it can access and use them)
        ProxyFile.php
```

-- Run `Main.php` and trace the execution to get familiar with the pattern.