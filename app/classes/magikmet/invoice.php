<?php

namespace App\classes\magikmet;

class Invoice
{
    private float $amount;
    private int $id = 1;
    private string $acctNumber = "2245867894";
    //protected array $data = [];

    // public function __construct(float $amount){
    //     $this->amount = $amount;
    // }

    // public function __get(string $name)
    // {

    // if(property_exists($this, $name))
    // {
    //     return $this->name;
    // }

    // return null;
    // //var_dump($name);
    // }



//  public function __set(string $name, $value)
//  {
//     if(property_exists($this, $name))
//     {
//         $this->$name = $value;
//     }

//     //var_dump($name , $value);
//  }


// public function __isset(string $name)
// {

//     var_dump('isset');
//   return array_key_exists($name, $this->data);
// }

// public function __unset(string $name){
//     var_dump('unset');
//     unset($this->data[$name]);
// }


// public function __call($name, $arguments)
// {
//     // Note: value of $name is case sensitive.
//     echo "Calling object method '$name' "
//          . implode(', ', $arguments). "\n";
// }

// public static function __callStatic($name, $arguments)
//     {
//         // Note: value of $name is case sensitive.
//         echo "Calling static method '$name' "
//              . implode(' ', $arguments). "\n";
//     }


// public function __toString(): string{
//         return 'Hello';
// }


// public function __invoke()
// {
//    var_dump('invoked');
// }


public function __debugInfo()
{

return [
    'id' => $this->id,
    'Account Number' => "****" . substr($this->acctNumber, -4),

];

}
























































}