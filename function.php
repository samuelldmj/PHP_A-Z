<?php  
//FUNCTION PART 2
//FUNCTION PARAMETERS($x and $y are the parameter)
//for every parameters we need to pass in an argument, unless we get an error
//enforcing strict type
declare(strict_types=1);
// function foo(int|float $x, int|float $y){
//     return $x * $y;
// }
// //5 and 7 are the argument
// echo foo(5, 7);

//default parameter
// function foo(int|float $x, int|float $y = 10){
//     return $x * $y;
// }
// //5 and 7 are the argument
// echo foo(5);

//passing argument by reference
// function foo(int|float &$x, int|float $y ): int|float{
//     if($x % 2 == 0){
//         $x /= 2;
//     }
//     return $x * $y;
// }
// $a = 6.0;
// $b = 7;
// echo foo($a,$b) . "<br>";
// var_dump($a, $b);

//splat(ellipsis) operator(...$variable) and variadic functions
//the splat operator allows me to extend my parameter, to give room for more arguments
// function sum(...$number): int|float{
//     // $sum = 0;
//     // foreach($number as $num){
//     //     $sum += $num;
//     // }
//     // return $sum;
//     return array_sum($number);
// }
// $a = 6.0;
// $b = 7;
// echo sum($a, $b, 50, 100, 70, 90) . "<br>";

//unpacking using the splat
// function sum(...$number): int|float{
   
//     return array_sum($number);
// }
// $a = 6.0;
// $b = 7;
// $number = [50, 100, 70, 90];

// echo sum($a, $b, ...$number) . "<br>";

//named argument
//it allows me to pass argument to the function based on the parameter variable name 
function foo(int|float $x, int|float $y ): int|float{
        if($x % $y == 0){
            return $x / $y;
        }
        return $x ;
    }
    $x = 6;
    $y = 3;
    $arr = ['x' => 1, 'y' => 2];
    //echo foo($x,$y) . "<br>";//output:2
    //if i change the order, i will get different output
    //this is because $x is taken as $y, and $y is taken as $x
    echo foo($y, $x) . "<br>";//output:3
    //i can name the arguments
    echo foo(y:$y, x:$x) . "<br>";//output:2
    //when unpacking, if it is an associative array, the keys are treated as argument
    echo foo(...$arr);












?>