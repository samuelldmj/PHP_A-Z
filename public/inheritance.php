<?php
//INHERITANCE:
/*
=> Inheritance in OOP occurs When a class derives from another class.
=>The child class will inherit all the public and protected properties and methods from the parent class.
=>In addition, it can have its own properties and methods.
=>you can not override private properties
=>you can not decrease the visibility in the child class. say, if the parent class has public accessibilty, you can not set the child 
class to private
=>parent::__construct must be used with understanding,
it can affect the output of my code. make sure you have a constructor in the parent class before using in the child class.
=>final keyword prevents inheritance. could be used on the parent class or on methods.
*/

/*
=======implementation of what i learnt:==========
I was able to create a Toasting simulator, with normal and pro version.
The normal toasting simulator can only toast 2 slices of bread at a time, 
while the pro version can toast 4 slices at a time, work without connecting to a power source and has an option to toast a bagel.
*/
class Toaster {
    protected array $slices = [];
    protected int $size;
    //public int $size = 2;
    // private int $size = 2;

    // public function __construct()
    // {
    //     $this->slices = [];
    //     $this->size = 2;
    // }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size)
        {
            $this->slices[]= $slice;
        }
    }

    public function toast()
    {
        foreach($this->slices as $i => $slice)
        {
            echo ($i + 1) . ": Toasting  " . $slice . "<br>";
        }
    }

    }


    class ToasterPro extends Toaster{
        // public int $size = 4;

        public function __construct()
        {
            //parent::__construct();
            $this->size = 4;
        }

        public function workingWithoutConnectingToPowerSource(){
            if (count($this->slices) >= 4)
        {
            echo "Working with no power source" . "<br>";
        }
        }
    
        public function toastingBagel()
        {
            foreach($this->slices as $i => $slice)
            {
                echo ($i + 1) . ": Toasting  " . $slice ."with bagel options". "<br>";
            }
        }

        public function toast()
    {
        $this->workingWithoutConnectingToPowerSource() ;
        parent::toast();
    }
    
        }

// $toaster = new Toaster();
// $toaster->addSlice("Bread");
// $toaster->addSlice("Bread");
// $toaster->addSlice("Bread");
// $toaster->toast();

//you can not override private properties
//this will only display 2 out of 3
// $toaster = new ToasterPro();
// $toaster->addSlice("Bread");
// $toaster->addSlice("Bread");
// $toaster->addSlice("Bread");
// $toaster->toast();


$toaster = new ToasterPro();
$toaster->workingWithoutConnectingToPowerSource();
$toaster->addSlice("Bread");
$toaster->addSlice("Bread");

$toaster->toast();






























