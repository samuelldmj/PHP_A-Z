<?php
/*
====ABSTRACT CLASS====
=>Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
=>An abstract class is a class that contains at least one abstract method.
=>An abstract class or method is defined with the abstract keyword:
=>When inheriting from an abstract class,
the child class method must be defined with the same name, and the same or a less restricted access modifier.
So, if the abstract method is defined as protected, the child class method must be defined as either protected or public,
but not private. Also, the type and number of required arguments must be the same.
However, the child classes may have optional arguments in addition.

So, when a child class is inherited from an abstract class, we have the following rules:
    The child class method must be defined with the same name and it redeclares the parent abstract method
    The child class method must be defined with the same or a less restricted access modifier
    The number of required arguments must be the same. However, the child class may have optional arguments in addition

    ====From W3schools.com====

*/
require __DIR__ . "/../vendor/autoload.php";

$fields = 
[
    //new \App\classes\abstr\Field("Base Field"),
    new \App\classes\abstr\Text("textField"),
    new \App\classes\abstr\Checkbox("checkboxField"),
    new \App\classes\abstr\Radio("RadioField"),
    //new \App\classes\abstr\Boolean("BooleanField")

];

foreach($fields as $field){
    echo $field->render() . "<br>";
}


// $field = new \App\classes\abstr\Field("Bread");
// var_dump($field);

