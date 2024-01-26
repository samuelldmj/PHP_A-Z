<?php
//ERROR HANDLING IN PHP
/*
=>We have a lot of errors that can be generated in php, just to mention few:
->Fatal error
->syntax error
->parse error etc
=>some error stops the code execution e.g Fatal error, while some would not.
=>PHP determines the error to report based on the error report configuration in the php.ini . 
=>i can override error by setting the error arguments to zero{0} 
error_reporting(0); no errors will be reported
error_reporting(E_ALL); this will report all errors
error_reporting(E_ALL & E_WARNING); This will report all errors EXCEPT warnings

=>You can manually trigger errors using
trigger_error('Example error', E_USER_ERROR); This trigger a fatal error and stop the code execution
echo 1; This won't execute
trigger_error('Example error', E_USER_WARNING); This trigger a warning and continues the code execution
echo 1; this would execute

=>When errors occurs in php, php will decides whether the errors should be displayed or not by using the 
display_errors() configuration directives.
N.B: This should always be turned off in production, to prevent the display of sensitive errors on the screen or to the users
=>This errors will be logged for you, even if i am not displaying them, as long i have the error logging turned on 
=>Xamp server make it easy to display errors, by logs on the appache row, then click PHP (php_error_log)
=>I can also do it manually by using the error_log(), then pass the message as argument and it would log in that file

=>PHP allows me to create a custom error handler to tell PHP to catch errors at run time.
=> to register my customary error handler, i need to create a function

*/

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null){
    //since i dont know what my file would be
    //for demostration purpose in to check what i am doing, i wouldn't want to display error on the screen
    echo $type . ":" . $msg . "in" . $file . "on line" . $line; 
    //to continue code execution
    //return true;
    //to stop the code execution
    exit;
}

error_reporting(E_ALL & ~E_WARNING);
//the variable x has not been defined, it would trigger ~E_WARNING
//since the error is related to warning, and i have used the bitwise not operator on ~E_WARNING, nothing will display
echo $x;

//this override whatever set in error_reporting() configuration settings
//errors before the customary error handlers will not be handled by the custom functions
set_error_handler('errorHandler', E_ALL);
//echo $x;













?>