<?php

/* 
=====PHP DocBlock - Adding Comments to Classes & Methods===
=>A DocBlock is a special type of comment that can provide verbose information about an element in your code.
=>It provides a better structured documentation for my codes
=>it can be used to generate api documentations
=>it can be used by other developers reading my code
=>doc blocks have tags
=>A tag always starts on a new line with an at-sign (@) followed by the name of the tag.

*/


//DOCBLOCK
/**
 * @param Customer $customer
 * @param float $amount
 * 
 * @return bool
 * @throws \Runtimeexception
 * @throws \InvalidArgumentException
 * 
 * @property int $x
 * @property float $y
 * 
*/

class Customer 
{
    public string $name;
}


class Transaction 
{

    // public function process(Customer $customer, float $amount)
    // {

    //     //Process Transaction

    //     //if failed return false

    //     //otherwise return true
    //     return true;
    // }

    public function __get(string $name){

    }

    public function __set(string $name, $value){
        
    }



}























































































































































































































































































































































