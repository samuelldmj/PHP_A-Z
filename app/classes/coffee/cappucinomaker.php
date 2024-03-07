<?php

namespace App\classes\coffee;

class CappucinoMaker extends CoffeeMaker
{
    use CappucinoTrait
    {
        CappucinoTrait::makeCappucino as public;
    }
   
}