<?php

namespace App\classes\inter;

interface DebtCollector {

        public function collect(float $owedAmount);

}