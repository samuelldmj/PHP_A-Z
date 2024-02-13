<?php
//NAMESPACE
//The required file contains classes named Transaction
require_once __DIR__ . "../app/namespace/pad/paddlenamespace.php";
require_once __DIR__ . "../app/namespace/pad/customerprofile.php";
require_once  __DIR__ . "../app/namespace/stripe/stripenamespace.php";


/*
=>it is not recommended to use multiple namespaces in the same file
=>They allow the same name to be used for more than one class
=>Namespaces are declared at the beginning of a file using the namespace keyword:
=>A namespace declaration must be the first thing in the PHP file
=>if i need to access builtin classes i will need to add a backslash to tell php to load it from the global space and not from the local name space
=> builtin functions fallback to global namespace if it doesn't exist in the local namespace, it scan the local namespace before going to the global namespace
=>aliasing permit the use of (use keyword) to call classes with similar names. if i use the use keyword without aliasing to call classes with similar names,
i will get an error
=> aliasing can also be used to deal with long class names
*/

//calling the class files based on the namespace name set in the files
// var_dump(new stripe\Transaction());
// var_dump(new paddle\Transaction());

//calling the class file using the use keyword
//you can use namespace for your functions and constant and then import them using the use keyword
//use paddle\Transaction;
// var_dump(new Transaction());

//aliasing and use keyword
//aliasing permit the use of classes with similar name in the same file
use app\namespace\paddle\Transaction;
//this display paddle transaction class, to display stripe transaction class, i wll need to indicate this userdefined name (stripeTransaction), as a temporary class name.
use app\namespace\stripe\Transaction as stripeTransaction;

$paddleTransaction = new Transaction;
$stripeTransaction =  new stripeTransaction;
var_dump($paddleTransaction, $stripeTransaction);

