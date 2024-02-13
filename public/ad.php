<?php
//PHP Coding Standards, Autoloading (PSR-4) & Composer 

//The required file contains classes named Transaction
// require_once "../app/namespace/pad/paddlenamespace.php";
// require_once "../app/namespace/pad/customerprofile.php";
// require_once "../app/namespace/stripe/stripenamespace.php";

//AUTOLOADING
/*
=>In order to use a class defined in another PHP script, we can incorporate it with include or require statements. However,
    PHP’s autoloading feature does not need such explicit inclusion. Instead,
    when a class is used (for declaring its object etc.) PHP parser loads it automatically,
    if it is registered with spl_autoload_register() function. Any number of classes can thus be registered.
    This way PHP parser gets a last chance to load the class/interface before emitting an error.

=>if i use many autoloader functions, it execute them one by one from top to bottom.
=> to change the order of execution, i will need to use the prepend keyword
*/
// spl_autoload_register(function ($class){
//     var_dump("Autoloader 1");
// });

//using prepend to change the order here
// spl_autoload_register(function ($class){
//     var_dump("Autoloader 2");
// }, prepend:true);


//getting the files using autoloading
// spl_autoload_register(function ($class){
// // $path = __DIR__ . './../' . lcfirst(str_replace('\\', '/', $class)) . 'php';
// //     require $path;
// // require "../app/namespace/pad/paddlenamespace.php";

// });

// require __DIR__ . " ../vendor/autoload.php";

// use app\namespace\paddle\Transaction;

// $paddleTransaction = new Transaction;
// var_dump($paddleTransaction);

//COMPOSER
/*
=> composer is a tool for dependency management in php, it lets you install various libraries and packages into your project.
=> it also helps in autoloading
*/

//autoloading using composer
//working with a unique identifier package
require __DIR__ . " /../vendor/autoload.php";

use app\namespace\paddle\Transaction;

// $paddleTransaction = new Transaction;
// var_dump($paddleTransaction);

$id = new \Ramsey\Uuid\UuidFactory();
echo $id->uuid4();
