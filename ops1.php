<?php 
//OPERATORS PART 1

//Arithmetic operators: ( +, - , / , *, %, **)
//when the division is without a remainder we obtain an integer
//when the division is with a remainder we obtain a float
//when an integer is divided by float we obtain a float
//modulo will cast it value into integer if it is given in float
//if you want to do a proper modulo operation on float or by maintaining the float, use fmod()
//negative modulo takes the sign of the number you are dividing or numerator
$a = -10;
$x=8;
$b = 10.5;
$y = 3;
$k = 3.9;
// var_dump($x - $y) . "<br>";
// var_dump($x + $y) . "<br>";
// var_dump($x / $y) . "<br>";
var_dump($a % $y) . "<br>"; //output: int(-1)
// var_dump(fmod($b, $k)) . "<br>";
// var_dump($x ** $y) . "<br>";

//plus(+) and minus(-) can be used to convert a value or variable to integer
$x =  +"10";
$y = 4;
$z = "14";
// echo var_dump($x) . "<br>";
// echo var_dump(-$z). "<br>";

//dividing by zero
//this will throw a fatal error, prior to php 8, it will give a warning and output an infinity value
//if you insist in getting infinity value use the fdiv() function
$x = 10;
$y = 0;
var_dump(fdiv($x, $y)) . "<br>";

//ASSIGMENT OPERATOR: assigns value from right to the left
//shouldnt be confused with comparison operator (==) , (===)
$f = 5; //this is an assignment
//multiple variables5
$f = $g = 5; //5 is assigned to f and g
var_dump($f, $g) . "<br>";
//complex assignment
$h = ($r = 10) + 5;
echo var_dump($h, $r) . "<br>";
//combined assignment operator
$x = 10;
//can work with arithmetic operator(+*/...etc)
$y *= 5;
echo var_dump($x,$y)  . "<br>";

//STRING OPERTOR (. .=)
$fname = "Sam";
$lname = "Bol";
echo $fname . $lname . "<br>";//output: SamBol
echo $fname .= "Dan" . "<br>"; //output: SamDan

//COMPARISON OPERATOR: (==, ===, <, >...etc )
$x= 8;
$y = '8';
//loose comparison: checks if they are equal
var_dump($x == $y). "<br>";//output: bool(true)
var_dump($x != $y). "<br>";//output: bool(false)
//strict comparison: checks if they are equal and of the same datatypes
var_dump($x === $y). "<br>";//output: bool(false) 
var_dump($x !== $y). "<br>";//output: bool(true) 
//===============================================
var_dump($x <=> $y). "<br>";//output: bool(true)
//comparing strings and numerics
/* before php8, strings are converted to numbers before comparison take place, 
but in php8 when a string is not numeric the other side will be converted to string and string
comaprison will take place
*/
var_dump(0 == "hello"). "<br>";//output:bool(false) 

echo "<hr>";


//where strict comaprison can be useful
$greeting = "Hello World";
$pos = strpos($greeting, "H");

//loose comparison
if($pos == false){
    echo "H not found". "<br>";
}else{
    echo "H found at index " . $pos . "<br>";
}/*output: "H not found"; this is because H is occupying index 0, php is reading it has 0 == false,
0 converted to boolean is false in a loose comparison
*/

//strict comparison
if($pos === false){
    echo "H not found";
}else{
    echo "H found at index " . $pos . "<br>";
}//output: H found at index 0

echo "<hr>";
//TENARY OPERATOR
//when stacking tenary operators always use parenthesis

$result = $pos === false ? "H not found" : "H found at index " . $pos ;
echo $result; //output: H found at index 0














?>