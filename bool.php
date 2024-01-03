<?php 
//Boolean data types

//when you try to print something in php, it tries to cast it into string
//when a boolean is cast into string, false becomes an empty string, while true becomes 1
//proofing by using var_dump()
// $isComplete = (string) true;
// $isComplete = (string) false; //output: string(0) " "
// $isComplete = (string) true; //output: string(1) " 1 "
// echo var_dump($isComplete) . "<br>";

//Integer: 0 , -0 = false
//floats: 0.0, -0.0 = false
// " ", "0" = false
// [ ] = false
// null = false

// $isComplete = true; //output: success
// $isComplete = 5; //output: success
// $isComplete = -0; //output: fail

// if($isComplete)
// { //do something
//     echo "success";
// } else{
//     // do something else
//     echo 'fail';
// }

//using is_bool()
$isComplete = "false";
echo gettype(is_bool($isComplete)) . "<br>";
echo var_dump($isComplete) ;




















?>