<?php 
//VARIABLE, CALLABLE, ANONYMOUS, CLOSURE AND ARROW

//variable functions

function sum(int|float ...$number):int|float{
    return array_sum($number);
}
$x = "sum";
$x = "sub"; //output: not callable
echo sum(1,2,3,4) . "<br>";

/* when php detect a parethesis near a variable, it would look for a function with the same name and whatever the variable evaluate to.
The variable above evaluate to sum and calls the function, if the variable sum does not exist, it would throw an error. 
To avoid such errors we can use a function called is_callable(), to check if the variable can be called as function*/
echo $x(1,2,3,4);
if(is_callable($x)){
    echo $x(1,2,3,4) ."<br>";
}else{ 
    echo "not callable";
}


//==============================================================================================================
//ANONYMOUS FUNCTIONS OR LAMBDA FUNCTION
//a function that has no name
//it must end with a semicolon
//as said earlier, function has a local scope, i can access a variable from the parent scope using the use() keyword,
//and passing the variable we want to access in it. this called the "CLOSURE": which means i can access a var from outside the local scope
$x = 7;
$sum = function (int|float ...$number)use($x):int|float{
    /* when i change the value of $x here, the value is changed but the value of $x outside local scope will still be printed,
    because it is copied */
    $x = 25;
    echo $x . "<br>"; //output: 7
    return array_sum($number);
};
echo $sum(2,4,6,8) . "<br>";
echo  $x ;

//==============================================================================================================
//CALLABLE DATA TYPES AND CALLABLE FUNCTION
//When a function is passsed to another function as an argument and then called within that function, it is called a callback function
$array = [2,4,6,8];
$array2 = array_map(function($element){
    return $element * 2;
}, $array);

echo "<pre>";

print_r($array2);
print_r($array);

echo "<pre>";


$sum = function (callable $callback, int|float ...$number):int|float{
    return $callback(array_sum($number));  
};

echo $sum(function($element){
    return $element * 2;
}, 2,4,6,8);

//==============================================================================================================
//ARROW FUNCTION
//Introduced in PHP 7.4, cleaner version of anonymous function
//useful as inline callback function, like passing it as an argument to many of the php built-in functions for example:

$array3 = [1,2,3,4];
$array4 = array_map(function($numbers){
    return $numbers * $numbers;
}, $array3);

echo "<pre>";
print_r($array4);
echo "<pre>";

//ARROW METHOD
$array4 = array_map(fn($numbers) => $numbers * $numbers, $array3);
echo "<pre>";
print_r($array4);
echo "<pre>";
















?>