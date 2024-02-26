<?php
namespace App\classes\inter;

class Rocky implements DebtCollector
{

    public function collect(float $owedAmount)
    {
        return $owedAmount * 0.65;
    }



}