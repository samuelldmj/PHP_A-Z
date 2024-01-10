<?php  
//OPERATOR PRECEDENCE & ASSOCIATIVITY
//when multiple operators are used in an expression, they are grouped by their precedence
//if they have similar precedence their associativity decides how they are grouped
$x = 5 + 3 * 5; //if there was no precendece it would have been 5+3, multiplied by 5 equals 40
echo $x. "<br>";//output:20 due to precedence the answer would be 20
//if you want the 5+3 to be executed first, you put it in a parenthesis
$x = (5 + 3) * 5;//output:40
echo $x . "<br>";

//ASSOCIATIVITY (from operator precedence table on php documentation website)
//The higher its position on a table the higher the level of precedence
$x = $y = 5 . "<br>";
//assignment operators has right associativity, hence, $x would be whatever value $y evaluate to.


$x = 5;
$y = 2;
$z = 10;
// division and multiplication has the same precedence, there associativity is considered. they have left associativity
$result = $x / $y * $z; //output: 25
echo $result . "<br>";


$x = true;
$y = false;

// $z = $x && $y; 
$z = $x and $y; //output: bool(true): assigment operator evaluate first, then the other side and $y is discarded
//to avoid this, use parethensis, it enhance readability and clarity and avoid the problem of precedence
var_dump($z);//output: bool(false)





















?>