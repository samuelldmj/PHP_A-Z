<?php
/*
===PHP Iterators & Iterable Type - Iterate Over Objects===

=>PHP by default iterate through all the visible or accessible properties of an object
*/

require __DIR__ . "/../vendor/autoload.php";
use App\classes\iterat\Invoice;
use App\classes\iterat\InvoiceCollection;

//iterating over a simple array
// foreach(['a','b','c', 'd', 'e'] as $key => $value)
// {
//     echo $key . " - " . $value . PHP_EOL;

// }


//iterating over objects
// foreach(new Invoice(25) as $key => $value)
// {
//     echo $key . " - " . $value . PHP_EOL;

// }


$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25),new Invoice(30), new Invoice(35)] );
foreach($invoiceCollection as $invoice){
    //var_dump($invoice);
    echo $invoice->id . " - " . $invoice->amount . PHP_EOL;

}















