<?php

/*
====ANONYMOUS CLASS====
=>Just like anonymous function, it has no name.
=>I can create an anonymous class by using the class keyword combined with the new keyword
=>Anonymous classes can have inheritance and extends other classes
=>it can also implement classes, use Trait etc
=>it can not be typed hinted
*/

// interface MyInterface 
// {
//     //public function foo();

// }

// $obj = new class(1, 2, 3) implements MyInterface
// {
//     public function __construct(public int $x, public int $y, public int $z){

//     }
// };
// var_dump($obj);

//Using interface to type hint here
//  function foo(MyInterface $obj)
// {
//     var_dump($obj);
// }

// foo($obj);


//Normal class

class ClassA {

    public function __construct(public int $x,  public int $y)
    {

    }

    public function foo():string 
    {
        return "foo";
    }

    public function bar():object 
    {
        return new class($this->x, $this->y) extends classA {
            public function __construct(public int $x, public int $y){
                // parent::__construct($x, $y);
                // $this->foo();
                var_dump($x, $y);
            }
            
        };
    }

}

$obj = new ClassA(1, 2);
var_dump($obj);



























































































