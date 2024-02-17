<?php
//===========================
//STATIC PROPERTIES AND METHODS
//===========================

/*
=>Static properties can be called directly - without creating an instance of a class.
=>The access of a static methods doesn't require the instance of a class, so you can't use $this keyword init
=>Static properties are declared with the static keyword:
=>you can't use the scope resolution operator (::) to access non static methods or properties
=>i can access static methods with an object operator(->)
=>when accessing the static properties within a class you can use self keyword or the name of the class itself
=>when a private static properties is created you can create a public static methods to access it


*/
use app\classes\paymentgateway\paddle\Transaction;

require __DIR__ . "/../vendor/autoload.php";

$transaction = new Transaction( 25, 'Transaction one');
var_dump($transaction::getCount());



