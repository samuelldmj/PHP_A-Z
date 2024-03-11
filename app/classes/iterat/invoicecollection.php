<?php
namespace App\classes\iterat;

// class InvoiceCollection implements \Iterator

// {

//     public function __construct(public array $invoices)
//     {

//     }

//     //Iterator::current — Return the current element
//     public function current()
//     {
//         echo __METHOD__ . PHP_EOL;
//         return current($this->invoices);
//     }

//     //Iterator::next — Move forward to next element
//     public function next()
//     {
//         echo __METHOD__ . PHP_EOL;
//         next($this->invoices);
//     }

//         //Iterator::key — Return the key of the current element
//        public function key()
//     {
//         echo __METHOD__ . PHP_EOL;
//         return key($this->invoices);
//     }

//     //Iterator::valid — Checks if current position is valid
//     public function valid()
//     {
//         echo __METHOD__ . PHP_EOL;
//         return current($this->invoices) !== false;
//     }

//     //Iterator::rewind — Rewind the Iterator to the first element
//     public function rewind()
//     {
//         echo __METHOD__ . PHP_EOL;
//         reset($this->invoices);
//     }


//     }




//simpler way to iterate through object
class InvoiceCollection implements \IteratorAggregate
{


public function __construct(public array $invoices)
    {

    }


    public function getIterator()
    {
        return new \ArrayIterator($this->invoices);
    }


}



















