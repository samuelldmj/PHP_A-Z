<?php
require __DIR__ . "/../vendor/autoload.php";

/*
=====Magic Methods=====
=>Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.
=>They are preceded with two underscores (__)
=>__get() is utilized for reading data from inaccessible (protected or private) or non-existing properties. 
=>__set() is run when writing data to inaccessible (protected or private) or non-existing properties. 
=>when the property exist the __get() and __set() does not run, except the accessibility modefier is set to private or protected.
=> __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
=>__unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties. 
=>__call() is triggered when invoking inaccessible methods in an object context. 
=> The __toString() method allows a class to decide how it will react when it is treated like a string.
For example, what echo $obj; will print. 
=>The __invoke() method is called when a script tries to call an object as a function.
=>This method is called by var_dump() when dumping an object to get the properties that should be shown.
If the method isn't defined on an object, then all public, protected and private properties will be shown. 

*/

$invoice = new App\classes\magikmet\Invoice(15);
// $invoice->amount = 15;
// var_dump(isset($invoice->amount));

//testing isset and unset magic methods
//unset($invoice->amount);
// var_dump(isset($invoice->amount));
// var_dump($invoice);
// unset($invoice->amount);
// var_dump($invoice);

//testing call and call_static magic methods
// echo $invoice->process('in object context');
// echo $invoice::process('in static context');

//testing __debugInfo magic method
var_dump($invoice);












