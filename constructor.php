<?php
//CONSTRUCTOR PROPERTY PROMOTION AND NULL SAFE OPERATOR

declare(strict_types= 1);

// class Transaction {
//     private $amount;
//     private $description;

//     public function __construct(float $amount, string $description){

//         $this->amount = $amount;
//         $this->description = $description;

//     }
//}

//shortcut to the above code
/* when php sees that i added accessibility modifier to the constructor parameter, it handles the argument in the constructor as 
properties and as constructor argument. so there may be no need to declare a property outside or inside the constructor block as seen above.
=>This can be called constructor property promotion.
=>I can not have duplicate when promoting a property
=>I can assign default values to promoted properties(simple expression and constant values)
 */

// class Transaction {

//     public function __construct(private float  $amount, private string $description){


//     }


//promoting one property

// class Transaction {
//     private $amount;
   
//     public function __construct(float $amount, private string $description = "Hello"){

//         $this->amount = $amount;
//         $this->description = $description;

//     }

//accessing promoted properties
// class Transaction {
   
//     public function __construct(private float $amount, private string $description = "Hello"){

//     // echo  $this->description;

//        //without $this keyword
//        echo $description;
//     }
// }

// $transaction = new Transaction(5);



//NULL SAFE OPERATOR
/*=> null safe operator is used to call methods on object that might be null.
=> if the object in question is null, the nullsafe operator will simply return null, instead of throwing an error
=>without the null safe operator i would have a long nested checks for null

*/


class Customer{
    // ?paymentProfile indicate it is a nullabe data type
    private ?PaymentProfile $paymentProfile = null;

    public function getPayment(): ?PaymentProfile{
        return $this->paymentProfile;
    }
}

class Paymentprofile {
    public int $id;

    public function __construct(){
        $this->id = rand();
    }
    

}

class Transaction {
    // ?Customer indicate it is a nullabe data type
   private ?Customer $customer = null;
    public function __construct(private float $amount, private string $description = "Hello" . "<br>"){

    // echo  $this->description;
    
       //without $this keyword
       echo $description;
    }

    public function getCustomer(): ?Customer{
        return $this->customer;
    }
}

$transaction = new Transaction(5);
//customer and paymentProfile returns null, the default value foo is displayed
// echo $transaction->customer?->paymentProfile?->id ?? "foo";

//using methods
echo $transaction->getCustomer()?->getPayment()?->id ?? "foo";
