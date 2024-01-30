<?php 
/*


*/
//the helper.php file contains some few lines of codes that makes my array pretty
require 'helper.php';


//the json file is an external file
$json = file_get_contents('country.json');

$Multidimension_arrays_containing_235countries = json_decode($json, true);
prettyPrintarray($Multidimension_arrays_containing_235countries);

echo "<br>";
echo "<hr>";

//accessing the country at index 160
// print_r($Multidimension_arrays_containing_countries['countries'][160]);


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
//prettyPrintarray($country_phone_code);

//checking if Nigeria phone code exist
$nig = "+234";
$search = array_search($nig, $country_phone_code);
//echo $search . "<br>"; //Nigeria phone code is occupying index 160

//checking if Japan phone code exist
$jpn = "+81";
$search = array_search($jpn, $country_phone_code);
//echo $search . "<br>"; //Japan phone code is occupying index 111

//extracting the country names key-value pair
$country_name = array_column($Multidimension_arrays_containing_235countries['countries'] , 'name' );
prettyPrintarray($country_name);

//checking if there is a country called United Kingdom in the json file
$uk = "United Kingdom";
if(in_array($uk, $country_name)){
     echo("United Kingdom occupy index") . " " . array_search($uk, $country_name); //United Kingdom occupy index 223
}else {
     echo "Country does not exist";
}








?>