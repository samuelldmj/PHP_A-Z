<?php  
//WHILE
//infinte loop is useful when we want something to continually run until we conditionally break out of the loop
//in the case below if i dont increment the iterable variable($i) the code continues to run infinitely.
$i = 0;
// while($i <= 15){
//     //echo $i++;
// }

//break keyword
//break keyword accept an optional argument
//the argument by default is set to 1, you can pass another numeric argument
//it will break out of nested loops

$i = 0;
// while(true){
//     if($i >= 15){
   
//     break;
// } 
//  echo $i++;
// }  

// while(true){
//     while($i >= 10){
//     break 2;
// }
//  echo $i++;
// }

//continue keyword
// while($i <= 20){
//     $i++ . "<br>";
//     if($i % 2 == 0){ 
//     continue;
// } 
//  echo $i++ . "<br>";
// }

//DO WHILE
//THE statement within the loop will run once
// $i = 1;
// do {
//    echo $i++ . "<br>";
// } while ($i <= 10); 
    

//FOR LOOPS
// for($i=0; $i <= 10; $i++){
//     echo "Hello world" . "<br>";
// }

$text = "Hello world";
// for($i=0; $i < strlen($text); $i++){
//     echo $text[$i]. "<br>";
// }

// for($i=0, $lenght = strlen($text); $i < $lenght; $i++){
//     echo $text[$i]. "<br>";
// }

// $lenght = strlen($text);
// for($i=0; $i < $lenght; $i++){
//     echo $text[$i]. "<br>";
// }

//FOREACH LOOP
//it used to iterate over array or object
$programmingLanguages = ['PHP', 'PYTHON', 'JAVASCRIPT', 'C++', 'RUST', ];
// foreach($programmingLanguages as $Language){
//     echo "<pre>";
//     print_r($Language) . "<br>";
//     echo "<pre>";
// }

//you can obtain the key=>value pair
// foreach($programmingLanguages as $key => $Language){
//     echo "<pre>";
//     echo $key . ":" . $Language . "<br>";
//     echo "<pre>";
// }

//iterating over associative array
$user = [
    "Name" => " Sam",
    "Email" => " samuelldmj@zaza.com",
    "Skills" => ["PHP", "PYTHON", "JAVASCRIPT"]
];

foreach($user as $key => $value){
    echo $key . ":" . json_encode($value) . "<br>";
}
?>