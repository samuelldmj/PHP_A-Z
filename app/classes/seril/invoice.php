<?php

namespace App\classes\seril;

class Invoice 
{

    public $id;

    public function  __construct(
    public $amount, 
    public $description,
    public $creditCardNumber)
    {

    }

    // public function __construct()
    // {
    //     $this->id = uniqid("invoice_");
    // }

    //This is called before  serialization happens
    //can be used to serialize some specific properties
    public function __sleep():array
    {
        return ["id", "amount"];
    }

    //This is called after object unserialization happens    
    public function __wakeup(){

    }

    //The serialize and the unserialize magic methods solve some of the limitations that come with the sleep, wakeup magic methods and serializable interface

    //returns an arrays that represent the object
    //when we have sleep and serialze magic methods the latter will take precedence, the former wont be executed
    public function __serialize():array
    {
        return [
            "id" => $this->id = uniqid('invoice_'),
            "amount" => $this->amount,
            "description" => $this->description,
            "creditCardNumber" => base64_encode($this->creditCardNumber)
        ];
    }

     //when we have wakeup and unserialze magic methods the latter will take precedence, the former won't be executed
    public function __unserialize(array $data)
    {
        
        
             $this->id = $data['id'];
             $this->amount = $data['amount'];
             $this->description = $data['description'];
             $this->creditCardNumber = base64_decode($data['creditCardNumber']);
        
    }
    


    


}

