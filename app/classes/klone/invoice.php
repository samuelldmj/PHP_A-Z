<?php

namespace App\classes\klone;


class Invoice 
{
    private string $id;

    public function __construct(){
        $this->id = uniqid("invoice__");
        var_dump('__Construct');
    }


    // public static function create():static
    // {
    //         return new static();
    // }

    public function __clone()
    {
        $this->id = uniqid("invoice__");
        var_dump('__clone');
    }

}