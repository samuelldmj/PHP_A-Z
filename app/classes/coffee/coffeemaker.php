<?php

namespace App\classes\coffee;

class CoffeeMaker 
{

    public function makeCoffee(){
        echo static::class . " is making coffee" . PHP_EOL;
    }
}