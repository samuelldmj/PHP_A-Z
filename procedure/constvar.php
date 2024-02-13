<?php 

//use define() to define a constant
//it is defined at run time
//can be used in a control structure
define('NAME', 'value');
/* where "NAME" is the name of the contstant variable.
 */
echo NAME . "<br>"; //output: value
//to check if a constant have been defined use defined()
echo defined("NAME") . "<br>"; //output: BOOLEAN 1

//using the const keyword
//it is defined at compiled time
//can't be used in a control structure
const FNAME = "sAMUEL" ;
echo FNAME . "<br>"; //output: sAMUEL

//you can use variable to define your name
$paid = "PAID";
define('STATUS_' . $paid, $paid);
// echo STATUS_PAID . "<br>"; //output: PAID

//  PHP PREDEFINED CONSTANT
echo PHP_VERSION;

// some few PHP magic CONSTANT
/* __FILE__: The full path and filename of the file with symlinks resolved
__LINE__ : The current line number of the file. 
__DIR__: The directory of the file. If used inside an include, the directory of the included file is returned.

*/

//variable variables
//treats the value of a variable as a variable
$foo = "bar";
$$foo = "baz";
echo $foo, $bar . "<br>";
//or
//if used in a double quote it will output only $foo = "bar"
//to make it work use a curly brace for the double dollar var
//you can put one dollar sign outside the curly brace
echo "$foo, {$$foo}";
// echo "$foo, ${$foo}";
echo $foo, $$foo;
?>