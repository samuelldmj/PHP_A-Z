<?php

/*
==Error Handling In PHP - Exceptions & Try Catch Finally Blocks==

Exeption: Exception handling is used to change the normal flow of the code execution if a specified error
(exceptional) condition occurs. This condition is called an exception.

=>When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block.
=>If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.

=>if you can not find a suitable builtin exception, then you can create a custom exception class that extends the functionality of the base exception
class or one of the builtin exception class


Try, throw and catch
=>To avoid the error from the example above, we need to create the proper code to handle an exception.

Proper exception code should include:
=>try - A function using an exception should be in a "try" block.
 If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
=>throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
=>catch - A "catch" block retrieves an exception and creates an object containing the exception information

Finally;
A finally block may also be specified after or instead of catch blocks.
Code within the finally block will always be executed after the try and catch blocks,
regardless of whether an exception has been thrown, and before normal execution resumes.

Return statement and finally block
One notable interaction is between the finally block and a return statement.
If a return statement is encountered inside either the try or the catch blocks,
the finally block will still be executed.
Moreover, the return statement is evaluated when encountered,
but the result will be returned after the finally block is executed.
Additionally, if the finally block also contains a return statement, the value from the finally block is returned. 

Global exception handler
The set_exception_handler() function sets a user-defined function to handle all uncaught exceptions:

*/


require __DIR__ . "/../vendor/autoload.php";
use App\classes\ehandling\Invoice;
use App\classes\ehandling\Customer;

//$invoice = new Invoice(new Customer);

// $invoice->process(25);


//Try, throw, catch and finally
try {
$invoice->process(25);
} 
catch(\App\classes\ehandling\MissingBillingInfoException $e) {
    echo $e->getMessage(). " " . $e->getFile()." Line". ":"  . $e->getLine() . PHP_EOL;
} 
catch(\InvalidArgumentException){
    echo "Invalid Argument" . PHP_EOL;
}finally{
    echo "Finally Block is executed";
}


//testing the interaction between return statement and finally statement
 function process(){
    try {
        $invoice = new Invoice(new Customer);
        $invoice->process(-25);
        return true;
        } 
        catch(\Exception $e){
            echo $e->getMessage(). PHP_EOL;
            return false;
        }
    
        finally{
            echo "Finally Block is executed" . PHP_EOL;
            return -1;
        };

}
var_dump(process());

set_exception_handler(function(\Throwable $e){
    var_dump($e->getMessage());

});
echo array_rand([], 1);
$invoice = new Invoice(new Customer());
$invoice->process(25);
