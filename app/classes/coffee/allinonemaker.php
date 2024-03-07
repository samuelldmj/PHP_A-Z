<?php

namespace App\classes\coffee;

class AllInOneMaker extends CoffeeMaker
{

    use LatteTrait;
    // {
    //     LatteTrait::makeLatte insteadOf CappucinoTrait;

    // }

    // use CappucinoTrait;

        //setting the visibility modifier using "as" alias
    use CappucinoTrait
    {
        CappucinoTrait::makeCappucino as public;
    }


}