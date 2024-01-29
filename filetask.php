<?php 
/*


*/
//the helper.php file contains some few lines of codes that makes my array pretty
require 'helper.php';


//the json file is an external file
$json = file_get_contents('country.json');

$Multidimension_arrays_containing_countries = json_decode($json, true);
prettyPrintarray($Multidimension_arrays_containing_countries);

echo "<br>";
echo "<hr>";

//accessing the country at index 160
// print_r($Multidimension_arrays_containing_countries['countries'][160]);


/*
TASK:
=> i want to output the first key and value of the each arrays, in the multidimensional arrays
=> then do some country code searching, given a specific country code
*/

$nig = +234;

//$keys = array_keys(reset($Multidimension_arrays_containing_countries));
//print_r($keys);

//iterating through code
foreach($Multidimension_arrays_containing_countries['countries'] as $code){
     echo "<pre>";
     //print_r($code['code']);
     $code = [$code['code']];
     echo "<pre>";
   
}

















?>