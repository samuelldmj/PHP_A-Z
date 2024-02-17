<?php

namespace app;


class DB{

public static ?DB $instance = null;

private function __construct(public array $config)
{
    echo "Instance Created";
}

public static function getInstance(array $config): DB 
{
    if(self::$instance === null)
    {
        self::$instance = new DB($config);
    }
    return self::$instance;
}

}

// $db = new DB();
$db =  DB::getInstance([]);