<?php 
//the helper.php file contains some few lines of codes that makes my array pretty
require 'helper.php';


//the json file is an external file, i need to import it.
$json = file_get_contents('country.json');

$Multidimension_arrays_containing_235countries = json_decode($json, true);
// prettyPrintarray($Multidimension_arrays_containing_235countries);

echo "<br>";
echo "<hr>";

//accessing the country phone code and name at index 160
//  print_r($Multidimension_arrays_containing_235countries['countries'][160]);


/*
TASK:

=> i want to output the value of each arrays keys, from an imported multidimensional array json file
=> then do some country code and country name searching of your choice
*/

//extracting the phone code using foreach loop, did the job but not clean as expected
// foreach($Multidimension_arrays_containing_countries['countries'] as $code){
//      echo "<pre>";
//      $code = array_column($code, );
//      print_r($code);
//      echo "<pre>";
// }

//Thanks to a developer explanation from Stack overflow, i got a clean and better way to extract
//extracting the country phone codes key-value pair
$country_phone_code = array_column($Multidimension_arrays_containing_235countries['countries'] , 'code' );
// prettyPrintarray($country_phone_code);

//checking if Nigeria phone code exist
// $nig = "+234";
// $search = array_search($nig, $country_phone_code);
// echo $search . "<br>"; //Nigeria phone code is occupying index 160

//checking if Japan phone code exist
// $jpn = "+81";
// $search = array_search($jpn, $country_phone_code);
// echo $search . "<br>"; //Japan phone code is occupying index 111

//extracting the country names key-value pair
// $country_name = array_column($Multidimension_arrays_containing_235countries['countries'] , 'name' );
// prettyPrintarray($country_name);

//checking if there is a country called United Kingdom in the json file and displaying its index number
// $uk = "United Kingdom";
// if(in_array($uk, $country_name)){
//      echo("United Kingdom occupy index") . " " . array_search($uk, $country_name); //United Kingdom occupy index 223
// }else {
//      echo "Country does not exist in this json file";
// }






//task 3/4
// (1) we want to count the number of adults(18+ years) and children
//(2)make a list of people between 22 and 30 who can apply for the job
echo "<pre>";
$people = [
    ['name'=> 'joseph', 'age' => 25], 
    ['name'=> 'saph', 'age' => 5], 
    ['name'=> 'bap', 'age' => 18], 
    ['name'=> 'dan', 'age' => 23],
    ['name'=> 'frank', 'age' => 30],
    ['name'=> 'carlos', 'age' => 28], 
    ['name'=> 'zee', 'age' => 22], 
    ['name'=> 'bard', 'age' => 24],
    ['name'=> 'kat', 'age' => 21], 
    ['name'=> 'natty', 'age' => 24],  
    ['name'=> 'emma', 'age' => 29],
    ['name'=> 'kun', 'age' => 9],
    ['name'=> 'sam', 'age' => 3],    

];
echo "<pre>";


//solution 
$countChildren = 0;
$countadult = 0;
$eligibleCandidate = [];

foreach ($people as $person){
    //obtaining the age key and value here
    $age = $person['age'];
    if ($age >= 18){
        //counting the number of adult
        $countadult++;
    if ($age >= 22 && $age <= 30){
        //making a list eligible adult
         $eligibleCandidate[] = $person;
    }
} else{
    //counting the number of children
    $countChildren++;
}
}
echo "The number of children are  " . $countChildren . PHP_EOL;
echo "The number of adult are  " . $countadult . PHP_EOL ;
echo "The number eligible canditate are   " . PHP_EOL; 
print_r( $eligibleCandidate)  ;








?>