<?php
//FUNCTIONS
//it is a block of code which takes input do some magic (lol!) returns value(s)

//how to create a function
//declare it
//then invoke it.

// function foo(){
//     //write something here
//     //echo "Hello World!";
//     return "Hello World!";
// }
// //invoking it
// $x = foo();
// echo $x . "<br>";
// var_dump($x);


//invoke it before declaring it.
// $x = foo();
// var_dump($x);
// function foo(){
//     //write something here
//     //echo "Hello World!";
//     return "Hello World!";
// }

//exemptions to calling functions before declaring it.
//if the function will need conditions to run then i need to declare it first, before calling it
//there will be an error if i call a function that requires a condition to run
// $x = foo();
// var_dump($x);
// if (true){
//     function foo(){
//         //write something here
//         //echo "Hello World!";
//         return "Hello World!";
//     }
// }

//if i have a function of functions, i will need to call the first function before the inner function
//before declaring it

foo();
bar();
function foo(){
    echo "Hello World!". "<br>";
    function bar(){
        echo "bar";
    }
}

















?>