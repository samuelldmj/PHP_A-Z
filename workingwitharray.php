<?php 
//WORKING WITH ARRAY
require "helper.php";
//the file above is to make my array output pretty, when i call prettyPrintarray(). i created the function

//PHP has a lot of builtin function to work with arrays, will be considering some few

//================
//array_chunk()
//it splits an array into chunks of new arrays
//================
$items = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];
//this does not preserve the keys of the array
prettyPrintarray(array_chunk($items, 2));
//this preserve the keys in the array
prettyPrintarray(array_chunk($items, 2, true));

//================
//array_combine()
//combines 2 arrays, one as a key and the other as a value, if the element in $array1 doesn't match $array2 it throws an error.
//================
$array1 = ["a", "b", "c"];
#$array1 = ["a", "b", "c", "d"];//output: UncaughtValue error
$array2 = [5, 10, 15];
#prettyPrintarray(array_combine($array1, $array2));

//================
//array_filter()
//Filters elements of an array using a callback function
//================
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = [1, 2, 3, 4, false, 6, "0", null, 0, 10];
$array = [1, 2, 3, 4, 5, 6, 8, 10];
//i want to return the even numbers from this array
$even = array_filter($array, fn($number) =>  $number % 2 == 0);
//i want to use the even numbers as a key
$even = array_filter($array, fn($number) =>  $number % 2 == 0, ARRAY_FILTER_USE_KEY);
//the even number would be passed as value, while the odd number will be used as keys. 
//if the odd-number used as key doesnt match even-number value, it would index the key sequentially e.g(1,3,5,6 ...etc)
$even = array_filter($array, fn($number) =>  $number % 2 == 0, ARRAY_FILTER_USE_BOTH);
$even = array_filter($array, fn($number, $key) =>  $number % 2 == 0, ARRAY_FILTER_USE_BOTH);
//to reindex your values correctly, use array_values() function
$even = array_values($even);
prettyPrintarray($even);
//callaback function is optional, so i can omit
//this would filter out false, 0, null etc
prettyPrintarray(array_filter($array));

//================
//array_keys()
//get the keys of an array
//array_values()
//get the values of an array
//================
$array3 = ["a" => 1, "b" => 5, "c" => 3, "d" => 4, "e" => 5];
$keys = array_keys($array3);
$values = array_values($array3);
prettyPrintarray($keys);
prettyPrintarray($values);
//i can search for a value
$keys = array_keys($array3, 5);
prettyPrintarray($keys);


//================
//array_map()
/*Returns an array containing the results of applying the callback function to the corresponding value of array
 (and arrays if more arrays are provided) used as arguments for the callback. */
//================
$array4 = ["a" => 1, "b" => 2,"c" => 3, "d" => 4, "e" => 5,];
$array5 = ["z" => 2,"y" => 4,"w" => 6,"x" => 8,"v" => 10];
$array4 = array_map(fn($number, $number2) => $number * $number2, $array4, $array5);
//build an array of arrays
$array4 = array_map(null, $array4, $array5);
prettyPrintarray($array4);

//================
//array_merge()
//Merge one or more arrays
//similar keys overrides each other, returns the new key value
//================
$array6 = [1, "a" => 2, 3];
$array7 = [6 => 4, 7 => 5, 8 => 6];
$array8 = [7 , "a" => 8, 9];
prettyPrintarray(array_merge($array6, $array7, $array8));

//================
//array_reduce()
// Iteratively reduce the array to a single value using a callback function
//================
$InvoiceItems = [
    ["price" => 9.99 , "qty" => 5, "desc" => 'item 1' ],
    ["price" => 77.89 , "qty" => 17, "desc" => 'item 2' ],
    ["price" => 5.00 , "qty" => 2, "desc" => 'item 3' ],
    ["price" => 4.78 , "qty" => 1, "desc" => 'item 4' ],
    ["price" => 149 , "qty" => 45, "desc" => 'item 5' ],
];
//the first parameter in the arrow function is the return value of the previous iteration
//the second paramter in the arrow function is the current iteration
$total = array_reduce($InvoiceItems, fn($sum, $sale) => $sum + $sale['price'] * $sale['qty']);
echo "Total:  ";
echo $total . "<br>";
//when $sum is 500
$total = array_reduce($InvoiceItems, fn($sum, $sale) => $sum + $sale['price'] * $sale['qty'], 500);
echo "Total:  ";
echo $total . "<br>";

//================
//array_search()
//Searches the array for a given value and returns the first corresponding key if successful
//it is case sensitive
//in_array()
//================

$array9 = ["a", 1, "DE", 5 , "D", "A", 7, "e", "h", "a"];
$keys = array_search("a", $array9);
var_dump($keys);
//i need to be more careful, peradventure the index is at  0, it returns undesired output
if($keys == false){
    echo "Letter not found" . "<br>"; //output: Letter not found, "a" is obviuosly there
}else {
    echo "Letter found";
}
//using the strict mode
if($keys === false){
    echo "Letter not found"; 
}else {
    echo "Letter found" . "<br>";//output: Letter found
}
//in_array()
if( !in_array("a", $array9)){
    echo "Letter not found" . "<br>";
}

//================
//array_diff()
// Compares array against one or more other arrays and returns the values in array that are not present in any of the other arrays.
//$array10 array to comapare from
//it checks the value not the keys 
//array_diff_assoc()
//it checks the keys as well as the values
//================
$array10 = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];//that is, what are those elements here that is not in the other element
$array11 = ["f" => 4, "g" => 5, "h" => 7, "i" => 8];
$array12 = ["l" => 3, "m" => 9, "n" => 10];
//it checks the value not the keys 
prettyPrintarray(array_diff($array10, $array11, $array12));// output: array([a] => 1 [b] => 2)
//it checks the keys as well as the values
prettyPrintarray(array_diff_assoc($array10, $array11, $array12));//output: returns $array10 value because there is no matching key-value
//alternative to array_diff_assoc
prettyPrintarray(array_diff_key($array10, $array11, $array12));

//================
//asort()
//Sort an array in ascending order and maintain index association
//================
$array13 = ["e" => 5, "f" => 4, "g" => 5, "h" => 7, "i" => 8, "a" => 1, "b" => 2, "c" => 3, "d" => 4];
//ascending order
asort($array13);
//by keys
ksort($array13);
//usort(): Sort an array with a user-defined comparison function and maintain index association
usort($array13, fn($a, $b) => $a <=> $b);
prettyPrintarray($array13);

//================
//array destructuring
//breaking down array into seperate variables
//================
$array14 = [1, 2, 3, 4];
[$a, $b, $c, $d] = $array14;

echo $a . ',' . $b. ','. $c. ',' . $d . "<br>"; //output: 1,2,3,4
//skipping some element in the array
[$a, , , $d] = $array14;
echo $a .  ',' . $d . "<br>"; 
//destructuring nested arrays
$array14 = [1, 2, [3, 4]];
[$a, $b, [$c, $d]] = $array14;
echo $a . ',' . $b. ','. $c. ',' . $d . "<br>";
?>