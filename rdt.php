<?php
//RETURN STATEMENT
//can be used to return the control of the program execution back to the environment it was called for
//it used to return the value of a particular expression
//it does not end the execution of a script



// function sum(int $x, int $y){
//     $z =  $x + $y;
//     return $z;
// }
// echo sum(5,10);
// echo "<br>";
// echo "Hello world!";


//when the return keyword is put outside a function as a global scope, it will end the execution of that script.
// function sum(int $x, int $y){
//     $z =  $x + $y;
//     return $z;
// }
// echo sum(5,10);
// return;
// echo "<br>";
// echo "Hello world!";


//DECLARE STATEMENT
//The declare construct is used to set execution directives for a block of code
//declare (ticks) / (events)
//it is an event that occurs for tickable low-level statement in php executed by the parser


//declaring a custom function to register each ticks
function onTicks(){
    echo 'Tick <br>';
}

// register_tick_function("onTicks");
// declare(ticks=1);
// $i = 0;
// $lenght = 10;

// while($i < $lenght){
//     echo $i++ . "<br>";
// }


//declare - encoding 

//declare - strict_types
//this apply to every codes written below it
//if i want to have strict type checking, i can use the declare(strict_types=) function with the default argument strict_types init.
declare(strict_types=1);
function sum(int $a, int $b){
    return $a + $b;
}

echo sum(7, 11); /* this would output without an error.
 if i modify one of the argument to string i will get an error because i have set it to strict data type in the declare function
*/
echo sum("7", 11); //output: error
?>