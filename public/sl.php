<?php 
/*
=========Serialization========
===PHP Serialize Objects & Serialize Magic Methods


=>Serilaization is simply the process of converting  a value in a string form
=>You can serialize anything in php except some few built in objects, resource or closure.
=>when serialing objects, it will serialize the properties and the class names while methods are not serilaized.

*/



require __DIR__ . "/../vendor/autoload.php";

use App\classes\seril\Invoice;

//serilaizing some specific properties
// $invoice = new Invoice(25, "invoice 1", 1253469787);
// $str = serialize($invoice);
// echo $str . PHP_EOL;

//unserializing some specific propertiies
$invoice = new Invoice(25, "invoice 1", 1253469787);
$str = serialize($invoice);
$invoice2 = unserialize($str);
var_dump($invoice2) . PHP_EOL;
//echo $invoice2 . PHP_EOL;


//serializing objects
// $str = serialize($invoice). PHP_EOL;
// $invoice2 = unserialize($str);

// var_dump($invoice, $invoice2, $invoice === $invoice2);

//working with serializing and unserialing functions
// echo serialize(true) . PHP_EOL;
// echo serialize(1) . PHP_EOL;
// echo serialize(2.5) . PHP_EOL;
// echo serialize("hello world") . PHP_EOL;
// echo serialize([1,2,3]) . PHP_EOL;
// echo serialize(["a" => 1,"b" => 2]) . PHP_EOL;
//  var_dump(serialize(["a" => 1,"b" => 2])) . PHP_EOL;
//  var_dump(unserialize(serialize(["a" => 1,"b" => 2]))). PHP_EOL;

