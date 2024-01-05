<?php  
//array
//php will automatically define index keys for your array starting from zero(0), if none is provided.
$programmingLanguages = ['PHP', 'PYTHON', 'JAVA'];

//ACCESSING ARRAYS  
// echo $programmingLanguages[0] . "<br>"; //output: PHP

//you cant access the last value of an array with a negative index number, unless it has been defined.
// echo $programmingLanguages[-1] . "<br>"; //output: undefined array key -1

//using isset() to check if a key or index exist
// echo var_dump(isset($programmingLanguages[-1])) . "<br>";

//changing/updating item in an array
//$programmingLanguages[2]= 'C++';
//echo $programmingLanguages[2];
// print_r($programmingLanguages);

//to make your array fancy and readable use the html "pre" tags
echo '<pre>'; 
print_r($programmingLanguages);
echo '<pre>';

//count items in array
print_r(count($programmingLanguages));

//adding items into an array
$programmingLanguages[] = "C++";
echo '<pre>'; 
print_r($programmingLanguages);
echo '<pre>';

//adding items using array_push()
array_push($programmingLanguages, 'C', 'Go', 'Javascript');
echo '<pre>'; 
print_r($programmingLanguages);
echo '<pre>';

//Associative arrray: array with defined keys
$programmingLanguages = [
    "php" => 8.0,
    "python" => 3.12
];

$programmingLanguages['Javascript'] = 7.2;

echo '<pre>'; 
print_r($programmingLanguages);
echo '<pre>';

//MULTIDIMENSIONAL ARRAY

$programmingLanguages = [
    'php' => 
    ['creator' => "Rasmus Lerdorf",
    'extension'=> '.php',
    'isOpensource' => true,
    'website' => 'www.php.net',
    'versions' => [
            ["version" => "PHP 1.0"],
            ["version" => "PHP 2.0"],
            ["version" => "PHP 3.0"],
            ["version" => "PHP 4.0"],
            ["version" => "PHP 5.0"],
            ["version" => "PHP 7.0"],
            ["version" => "PHP 8.0"]
            ]
   ] ,

   'python' => 
    [
    'creator' => "Guido van Rossum",
    'extension'=> '.py',
    'isOpensource' => true,
    'website' => 'www.python.org',
    'versions' => [
             ["version" => "3.12.1", "Release date" => "Dec. 8, 2023."],  
             ["version" => "3.11.7", "Release date" => "Dec. 4, 2023."],
             ["version" => "3.12.0", "Release date" => "Oct. 2, 2023."],
             ["version" => "3.11.6", "Release date" => "Oct. 2, 2023."],
             ["version" => "3.11.5", "Release date" => "Aug. 24, 2023."],
             ["version" => "3.10.13", "Release date" => "Aug. 24, 2023."]
              ]
   ]

] ;

echo '<pre>'; 
print_r($programmingLanguages);
echo '<pre>';

echo $programmingLanguages['python']['versions'][0]["Release date"] ."<br>";

//handling similar arrays
//the last key overwrite the others
//php try as much as possible to cast the key when possible
$array = [true => "a", 1 => 'b', "1" => "c", 1.8 => "d"];
echo var_dump($array);

//having keys on some element
$array = ["a","b", 50 => "c","d", "e"] ;
echo '<pre>'; 
print_r($array);
echo '<pre>';

//removing element in an array
// print_r(array_pop($array));
// echo '<pre>'; 
// print_r($array);
// echo '<pre>';

//removing first element, element would be reindexed
//it would only reindex numeric keys
// print_r(array_shift($array));
// print_r($array);

//using unset()
//you must specify the index or keys, unless the array would be destroyed
// unset($array);
// unset($array[50]);
// unset($array[50], $array[51]);
// print_r($array);


//CASTING
// $x = 4;
$x = null;
var_dump((array) $x) . "<br>" ;

//checking if an item exist in an array
$y = [ "z" => "bread", "a" => null];

var_dump(array_key_exists("a", $y)) . "<br>";

var_dump(isset($y['a']));




?>