<?php
//ENCAPSULATION AND ABSTRACTION

//==============
//ENCAPSULATION
//=> encapsulation ensures that objects manage its own state, nothing can change that unless it is explicitly allowed
//=============

/*
=>FOUR PRINCIPLES OF OOP
=>ENCAPSULATION
=>ABSTRACTION
=>INHERETANCE
=>POLYMORPHISM
*/

use app\classes\paymentgateway\paddle\Transaction;

require __DIR__ . "/../vendor/autoload.php";

$transaction = new Transaction(25);
//because my property was set to public i can change the property value here say;
// $transaction->amount = 125;

//this has overwritten the value of the constructor, it outputs 125
// $transaction->process();

//to restrict the access, i will need to set the property to private
//to access it, i will need to set the getter method to retrieve the property
//to change the value of the property, i will need to create a setter methods
// $transaction->setAmount(125);
// $transaction->process();


/*===========================
=>Breaking encapsulations: accessing private and protected methods and properties using php reflection API
=>reflection API adds the ability to introspect classes

*/
$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');
$reflectionProperty->setAccessible(true);

//modifying private property
$reflectionProperty->setValue($transaction, 125);

var_dump($reflectionProperty->getValue($transaction));
$transaction->process();

/*===========================
What is the point of private or protected when somehow, i can still access the properties or methods?
The point of private and protected accessibilty modifiers, is to let the one know, interacting with the objects that, certain properties
and methods are meant to be kept private or protected they are internal implementations, they are meant to be used within that class.
*/

/*======================================================================================================*/

/*======================
=>ABSTRACTION
=>Abstraction and abstract class is not the same thing
=>This means the internal implementation details of an object are hidden from the user, that is, hiding the implementation details from the user
====================*/






















