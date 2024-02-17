<?php              
//CLASS AND OBJECTS
//it must start with the keyword "class"
//it can have variables called properties and functions called methods
//it can also have access modifiers like (public, private amd protected)
//public modifier means it can interact with the objects outside the class
//private are only available within the class itself

declare(strict_types= 1);

class Transaction{
    //type hinting the properties, using float and string
    //i will get a fatal error if i tried to access (type hinted) properties which are not provided with a value
    // public float $amount;
    // public string $description;

    private float $amount;
    private string $description;

    //magic method
    //any time an instance or object is created, it get called
    public function __construct(float $amount, string $description){
        //to access the properties of a class or object within the class we use $this keyword
        $this->amount = $amount;
        $this->description = $description;
    }

    public function taxRate(float $rate)
    {
        $this->amount += $this->amount * $rate / 100;
        return $this;
    }

    public function discount(float $rate){
        $this->amount -= $this->amount * $rate / 100;
        return $this;
    }
    //this will not be accessible outside the class
    // private function discount(float $rate){
    //     $this->amount -= $this->amount * $rate / 100;
    // }

    //to be able to get the private properties, i will need to create a getter function
    public function get_amount(): float{
        return $this->amount ;
        return $this;
    }

    //A destructor is called when the object is destructed or the script is stopped or exited.
    //If you create a __destruct() function, PHP will automatically call this function at the end of the script.
    //it can be used to clean up resource or data base connection
    public function __destruct(){
        echo  "Destruct" . $this->description . "<br>";
    }
}
//objects where the class name is stored
// $class = "Transaction";
// $transaction = new $class( 100, "Transaction one");

$transaction1 = new Transaction( 100, " Transaction one");
// $transaction2 = new Transaction(200, "Transaction two");
//$transaction->amount = 15;
// $transaction->taxRate(8);
// $transaction->discount(10);

//i can get the value of amount by using the object operator (->)
//var_dump($transaction->amount);

//accessing the private amount using getter function
// var_dump($transaction->get_amount());

 /*if i use the object without specifying any properties, i will have an unintialized data type properties,
because i have defined the data type of the properties above. To solve the problem of accessing properties before initialization,
i will need to define the value directly or use the constructor method. */
//var_dump($transaction)

//method chaining
//it reduces object call duplications
$amount = $transaction1->taxRate(8)->discount(10)->get_amount();
var_dump($amount);
echo "<br>";

// $transaction2->taxRate(8)->discount(15);
// var_dump($transaction1->get_amount(), $transaction2->get_amount());

//you can also destruct your object using the unset() and null
// unset($transaction1);
$transaction1 = null





















?>