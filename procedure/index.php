<?php 

//introduction to php syntax
echo "<hr>";
//print vs echo
echo "using echo: Hello world" . "<br>";
print "using print: Hello world" . "<br>";


//variable
$name = 'Samuel' ;
echo $name; //output = Samuel

echo "<hr>";
//assigning by value
$x = 1;
$y = $x;
echo $y; //output = 1

echo "<hr>";
//assigning by reference
$x = 3;
$y = &$x;
echo " referenced y = " . $y; //output: referenced y = 3;

//variable inside quotes
echo "my name is $name"; //output: my name is Samuel

//comment
//single line comments using double slash
#using hash tag
/*
Multiline 
comment
*/









