<?php
/*
===Object Cloning & Clone Magic Method =====
=>__construct does not get called when cloning an object
=>__clone get called on the instance of the clone object

*/


require __DIR__ . "/../vendor/autoload.php";

use App\classes\klone\Invoice;

$invoice = new Invoice();

// $invoice2 = new $invoice();
//cloning: This shallow copy invoice as invoice2
$invoice2 = clone $invoice;

var_dump($invoice, $invoice2, $invoice === $invoice2 );