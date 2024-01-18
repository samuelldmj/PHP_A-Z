<?php   
//require, require_once, include, include_once
//this function helps us to organize and structure our codes
/* when the scripts is not found, incude throws a warning and continues the code below it, 
but requires stops and throw an error */

//include
//include "file.php"; 
/* output: Warning: include(file.php): Failed to open stream:
 No such file or directory in C:\xampp\htdocs\phptut\reqin.php on line 8 
 Hello World
 */

//require 
// require "file.php"; 
// require "file.php"; 
//the require will execute as long as it is called and the file is available, as seen above
//output:Fatal error: Uncaught Error:...

//require_once and include_once
//this will include the file once, if it hasn't be included already as seen below
// require_once "file.php";
// $x++;
// echo $x . "<br>";//output: 6

// require_once "file.php";
// echo $x . "<br>"; //output: 6

//require overwrites the additional code written to complement the required files. see the two examples below
// require "file.php";
// $x++;
// echo $x . "<br>";//output: 6

// require "file.php";
// echo $x . "<br>"; //output: 5
// echo "Hello world";

//require can inherit the variable scope of the parent file.
//i create a variable here and increment it in file.php
//this is not a best practise, declaring variable in one file and modifying it another file.
$x = 5;
require "file.php";
echo $x . "<br>";//output: 6

require "file.php";
echo $x . "<br>"; //output: 7
echo "Hello world";


//when to use them(require, require_once, include, include_once)...copied from stackoverflow.
/* 
    require
    when the file is required by your application, e.g.
     an important message template or a file containing configuration variables without which the app would break.

    require_once
    when the file contains content that would produce an error on subsequent inclusion,
     e.g. function important() {  important code } is definitely needed in your application
      but since functions cannot be redeclared should not be included again.

    include when the file is not required and application flow should continue when not found, e.g.
    great for templates referencing variables from the current scope or something

    include_once
    optional dependencies that would produce errors on subsequent loading or maybe remote file
     inclusion that you do not want to happen twice due to the HTTP overhead
 */
















?>