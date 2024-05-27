<?php 

/*
=======INTERFACE AND POLYMORPHISM======
=>Interfaces allow you to specify what methods a class should implement.
=>Interfaces make it easy to use a variety of different classes in the same way.
=>When one or more classes use the same interface, it is referred to as "polymorphism".
=>Interfaces are declared with the interface keyword:


=====ABSTRACT VS INTERFACE======
==>Interfaces cannot have properties, while abstract classes can
==>All interface methods must be public, while abstract class methods is public or protected
==>All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
==>Classes can implement an interface while inheriting from another class at the same time
==>We can implement multiple interface, that is by seperating them by commas, they must implement the methods from the interface class
==>i can use the extend keyword to inherit more interfaces


*/
/*
==Implementation of what i learnt==
The classes i created is about an agency and an individual person that tries to help people collect back a certain percentage of their debts,
from a debetor.

So i created a class CollectionAgency with a method that collects an argument which represents the amount owned. 
Say, there is a guranteed amount of 50% to be collected by the collection agency from the debtor, so i automated the process by
using random in built function to know much would be collected, given the money owed.
*/
require __DIR__ . "/../vendor/autoload.php";

// $collector = new \App\classes\inter\CollectionAgency();
// echo $collector->collect(100) . PHP_EOL;


//Service based debt collection
$service = new \App\classes\inter\DebtCollectionService();
$service->collectDebt( new \App\classes\inter\Rocky());























































































