<?php

namespace App\classes\ehandling;


class Customer 
{
    public function __construct(private array $billingInfo = [])
    {

    }

    public function getBillingInfo(): array 
    {
        return $this->billingInfo;
    }


}