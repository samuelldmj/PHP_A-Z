<?php

/*
                                            ===============
                                            =====TRAIT=====
                                            ===============

=>PHP only supports single inheritance: a child class can inherit only from one single parent.
*Due to this drawback, PHP created a mechanism for code reuse.
======According  to PHP documentation.
    Traits are a mechanism for code reuse in single inheritance languages such as PHP.
A Trait is intended to reduce some limitations of single inheritance by enabling a developer to reuse sets of methods freely in several independent classes
living in different class hierarchies.
The semantics of the combination of Traits and classes is defined in a way which reduces complexity,
and avoids the typical problems associated with multiple inheritance and Mixins.

A Trait is similar to a class,
but only intended to group functionality in a fine-grained and consistent way.
It is not possible to instantiate a Trait on its own.
It is an addition to traditional inheritance and enables horizontal composition of behavior;
that is, the application of class members without requiring inheritance. ==============

=>Traits are declared with the trait keyword:
=>I can not instantiate the object of a trait, i will need to use the trait within the classes


=========PRECEDENCE===========
=>You are able to redefine the methods that is defined in a trait. if the class that uses the trait defines the same methods,
when that methods is called, the method defined directly in the class takes precedence and it will be used instead of the method is the trait.


===CONFLICT RESOLUTION======
=>If two Traits insert a method with the same name, a fatal error is produced, if the conflict is not explicitly resolved. 
=>To resolve naming conflicts between Traits used in the same class,
the insteadof operator needs to be used to choose exactly one of the conflicting methods. 
=>Since this only allows one to exclude methods,
the as operator can be used to add an alias to one of the methods.
Note the as operator does not rename the method and it does not affect any other method either.


======CHANGING VISIBITY========
=>You can access the private methods from the class that uses the trait
=>Using the as syntax, one can also adjust the visibility of the method in the exhibiting class. 

========================================================================================================
=>I can use trait inside trait
=>i can provide properties in the trait and underlying classes using or implementing the trait, but i can not redefined the property type, value and
accessibility modifier in the underlying class
=>i can a user defined setter function to access private properties in the trait, rether having abstract methods



*/
require __DIR__ . "/../vendor/autoload.php";

$coffeemaker = new App\classes\coffee\CoffeeMaker();
$coffeemaker->makeCoffee();


$lattemaker = new App\classes\coffee\LatteMaker();
$coffeemaker->makeCoffee();
$lattemaker->makeLatte();

$cappucinomaker = new App\classes\coffee\CappucinoMaker();
$coffeemaker->makeCoffee();
$cappucinomaker->makeCappucino();
$cappucinomaker->makeLatte();

$allinonecoffeemaker = new App\classes\coffee\AllInOneMaker();
$allinonecoffeemaker->makeCoffee();
$allinonecoffeemaker->makeLatte();
$allinonecoffeemaker->makeCappucino();
// $allinonecoffeemaker->foo();



































































































