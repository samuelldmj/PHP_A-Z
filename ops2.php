<?php 
//OPERATOR 2:
//ERROR CONTROL OPERATOR: USING @ 
//this suppress any error that may occur when used.
//it is not advisable to use, unless there is a very very genuine reason to use it.
//below file does not exist
// $non_existing_file = @file("foo.txt");

//INCREMENT AND DECREMENT OPERATOR ($x++, ++$x, --$x, $x-- )
//INCREMENT operator only affect number and strings
//DECREMENT operator have no effect on strings
$x = 7;
$y = "abc";
echo $x++ . "<br>";//output: 7
echo $x   . "<br>";//output: 8
echo ++$x . "<br>";//output: 8
echo --$x . "<br>";//output: 6
echo $x-- . "<br>";//output: 7
echo $x . "<br>"; //output: 6
//echo ++$y . "<br>";//output: abd
echo $y-- . "<br>";//output: no decrement

//LOGICAL OPERATOR (&&, ||, !, AND, OR, XOR)
//&&: True if both $x and $y are true
//||: True if either $x or $y is true
//!:  True if $x is not true
//and: True if both $x and $y are true
//or: True if either $x or $y is true
//xor: True if either $x or $y is true, but not both
// (&& n and) look like they do the same thing but they are different due to precedence

//SHORT CIRCUITING
//&& has higher precedence to ||

// $x = true;
// $y = false;

// $z = $x && $y;//output: bool(false) 
//$z = $x and $y; 
/* output: bool(true) NB: the assignment operator(left side) has higher precedence,
 it get evaluated first, hence the otherside of the statement is discarded */

//$z = $x || $y; //output: bool(true), the final answer will be true without getting to evaluate $y
// var_dump($z);

function hello(){
    echo "Hello world";
    return false;
}

// $z = $x || hello(); //output: bool(true) 
// $z = $x && hello(); //output: Hello world bool(false), both operand need to evaluate to true
// var_dump($z);

//BITWISE OPERATOR: they are used to prepare bitwise operation zero and one(& | ^ << >>)
// $x = 6;
// $y = 3;
//manual calculation of binary
//$x = 110
   //&
//$y = 011
//--------
//     010 = 2 base 10

// Bitwise OR
//$x = 110
   //|
//$y = 011
//--------
//     111 = 7 base 10

// Bitwise XOR
//$x = 110
   //^
//$y = 011
//--------
//     101 = 5 base 10

//~ (Bitwise NOT)
//$x = 110 => break down( not 1 == 0, not 1 == 0, not 0 == 1) = 001
//~$x = 001   
   //&
//$y = 011
//--------
//     001 = 1 base 10

//<< (Bitwise Left Shift) that is you are multiplying by 2
//shifting 6 by 3 to the left
//$x = 110
    //<<
    //shifted 3 times, that is, multiply by 2, three times, when coverted to base 10 we have 48.
//$x = 110000 = 48 base 10


//>> (Bitwise right Shift) that is you are dividing by 2, three times.
//you discard the digit starting from the right
//$x = 110
    // 110 >> 2 = 0 

// //var_dump($x & $y); //output: int(2)
// var_dump($x | $y); //output: int(7)
// var_dump($x ^ $y); //output: int(5)
// //THIS FLIP THE BIT or negate it
// var_dump(~$x & $y); //output: int(1)
// //shifting 6 by 3 to the left
// var_dump($x << $y); //output: int(48)
// var_dump($x >> $y); //output: int(0)

//ARRAY OPERATOR (==, ===, !=, <>, !===, +)
$x = ['a', 'b', 'c'];
$y = ['d', 'e', 'f'];

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['d' => 4, 'e' => 5, 'f' => 6, 'h' => 7]; //peradventure we have similar keys in $x and $y, it will use $x key
$z = $x + $y; /* output: Array ( [0] => a [1] => b [2] => c )  
this will append the element in variable y to x if they don't exist at the same index or keys */
$z = $x == $y; //only be true if both key-value are similar

$x = ['a' => 1, 'b' => 2, 'c' => 3];
$y = ['a' => 1, 'b' => "2", 'c' => 3];
$z = $x === $y; //check their data types in addition with key-value and must be in the same order.
print_r(var_dump($z));











?>