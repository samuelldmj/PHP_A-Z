<?php

namespace App\classes\coffee;

trait LatteTrait
{

    private string $milkQty = "whole milk";
    public function makeLatte()
    {
        echo static::class . " is making latte with a " .$this->milkQty. PHP_EOL;
    }

    public function setMilkQty(string $milkQty):static 
    {
        $this->milkQty = $milkQty;
        return $this;
    }

}
