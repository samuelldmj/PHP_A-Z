<?php 
//INTEGERS: numbers without decimal points.
//to check the size of integers
PHP_INT_MAX;
PHP_INT_MIN;
PHP_INT_SIZE;

//base 10 integers
$x = 5;

//hexadecimal integers
$y = 0x2A . "<br>";
echo $y . "<br>"; //output: 42

//binary numbers
$a = 0b11;
// echo $a . "<br>"; //output: 3

//out of bounds integers
$b = PHP_INT_MAX + 1;
echo var_dump($b) . "<br>"; //output: float(9.223372036854776E+18) 

//casting into integers
// you can use (int) | (integer)
 $c = (int) true; //output: int(1)
 $c = (int) false; //output: int(0)
 $c = (int) 5.49; //output: int(5)
 $c = (int) "5.5"; //output: int(5)
 $c = (int) "test"; //output: int(0)
 $c = (int) null; //output: int(0)
echo var_dump($c) . "<br>" ;

//to check if a variable is integer or not use is_int()
//you can have underscore in your integers
$e = 200_000;
echo var_dump($e) . "<br>";


//floats or double: numbers with decimal points
// $d = 3.15;
// $d = 13.5e3;
// $d = 13.5e-3;
$d = 13_000.5e-3; //output: float(13.0005) 
echo var_dump($d) . "<br>";

//to check the size of float
PHP_FLOAT_MAX;
PHP_FLOAT_MIN;

//out of bounds float, you get infinity
$f = PHP_FLOAT_MAX * 2; //output:INF
echo $f . "<br>";

//casting 
$g = (float) 7;
$g = floatval(7);
echo    var_dump($g)  . "<br>"; 

//NB: only numerics can be properly converted to floats
$h =  (float) "jedi";
echo var_dump($h);
?>