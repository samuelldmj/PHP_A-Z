<?php       
//VARIABLE SCOPE
//The boundary where the variable can be accessed
//we have the global and local scope
//the global variable get destroyed outside the boundary
//while the static variable does not, it retains its value

$x = 5; //this is a global scope, it is available throughout the script

//the variables within the functions has a local scope
// function foo(){
//     //to make variable to exist here we have 3 options
//     //we can define the variable in the function
//     //we define it as a parameter and pass an argument when calling it.
//     //we add the global keyword to the variable
//     //$x = 7;
//     global $x;
//     //we can change the global var, but it is a reference to the variable outside my function, rather printing 5, it prints 10
//     $x = 10;
//     echo $x . "<br>";
//     //php store global variable in an associative array called $GLOBALS, where the key is var name, and the value is the value of the variable
//     $GLOBALS['x'] = 15 ."<br>";
//     echo $GLOBALS['x'];
// }

// foo();//output: 10
// echo $x;//output: 10


//STATIC VARIABLES
//IT is a regular variable with the local scope

//this getValue function does some processing and get the value from someVeryExpensiveFunction()
function getValue(){
    // using static keyword to cache this variable
    //$value = someVeryExpensiveFunction();
    static $value = null;
    if($value == null){
      $value = someVeryExpensiveFunction(); 
    }
    return $value;
}

function someVeryExpensiveFunction(){
        sleep(2);
        return 10;
}

//wait for 2 seconds and print 10 to the screen
echo getValue() . "<br>";
//if i call it 2 more times, it is going to sleep for 6 seconds before it print to the screen
echo getValue() . "<br>";
echo getValue() . "<br>";
 // i can use static keyword to cache this, check above
 

















?>