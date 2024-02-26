<?php

namespace App\classes\inter;

class CollectionAgency implements DebtCollector

{
    public function collect(float $owedAmount)
    {
        $guranteed = $owedAmount * 0.5;
        return mt_rand($guranteed, $owedAmount);
    }

}

