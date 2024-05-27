<?php
/*
=====OBJECT COMPARISON======
=> (==) They are equal if they point to the same instance of the same class
=> The (==) does the comparison of the property values using the loose compparison
=> The (===) points to different object in the memory
*/

require __DIR__ . "/../vendor/autoload.php";

use App\classes\comp\Invoice;
use App\classes\comp\CustomInvoice;

// $invoice1 = new Invoice(25, "My invoice 1");
// $invoice2 = new Invoice(100, "My Invoice 2");

// $invoice1 = new Invoice(1, "My Invoice");
// $invoice2 = new Invoice(true, "My Invoice");


// $invoice1 = new Invoice(25, "My Invoice");
// $invoice2 = new Invoice(25, "My Invoice");

// echo "Invoice1  == Invoice2" . PHP_EOL;
// var_dump($invoice1 ==  $invoice2);

// echo "Invoice1  === Invoice2" . PHP_EOL;
// var_dump($invoice1 ===  $invoice2);




$invoice1 = new Invoice(25, "My Invoice");
$invoice2 = new CustomInvoice(25, "My Invoice");

//$invoice3 = $invoice1; //$invoice3 points to the same object that $invoice1 points to in the memory

echo "Invoice1  == Invoice2" . PHP_EOL;
var_dump($invoice1 ==  $invoice2);

echo "Invoice1  === Invoice2" . PHP_EOL;
var_dump($invoice1 ===  $invoice2);
//var_dump($invoice1, $invoice3);
var_dump($invoice1, $invoice2);