<?php

namespace App\classes\coffee;

trait CappucinoTrait
{

     //alternative for the makeLatte methods
     use LatteTrait;

    private function makeCappucino()
    {
        echo static::class . " is making cappucino" . PHP_EOL;
    }

    // public function makeLatte()
    // {
    //     echo static::class . " is making latte (Cappucino Trait)" . PHP_EOL;
    // }

    public function foo()
    {
            $this->makeCappucino();
    }

}
