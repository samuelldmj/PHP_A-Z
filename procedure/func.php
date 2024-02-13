<?php
//FUNCTIONS
//it is a block of code which takes input do some magic (lol!) returns value(s)
//i can't have functions with similar names

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

//if i have a function of functions, i will need to call the first function before the inner function before declaring it
// foo();
//if i comment out foo() , and try calling bar(), i would get an error, foo hasn't run yet, then it is impossible for me access bar.
// bar();
// function foo(){
//     echo "Hello World!". "<br>";
//     function bar(){
//         echo "bar";
//     }
// }


//return types and strict types
//i can tell php the expected value to return
//if i don't tell php, php will dynamically figure out what type it should be then output it. 
//i can do that by adding colon then, stating the data type
//if i alter the data type, it will not throw an error because i didn't enable strict types and..
//php will try to figure out the data type, if not, error would be thrown
//if i want to enforce the strict types, i will need to call the declare fuction
//if i want to add multiple data type, i will need to use the pipe character(|),
//i can also use the mixed keyword

//declare(strict_types= 1);
//function foo(): int|float{
    function foo(): mixed{
    //return 1; output: int(1) 
    //return "1"; output: int(1)
    //return []; output: error
    return 1;
}
var_dump(foo());













?>