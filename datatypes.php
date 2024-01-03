<?php 
#Intorduction to Datatypes

#Scalar data types
#Bool: True or false
$completed = True;
#int: 1, 2 , 3 , 0, -5 etc
$score = 75;
#float: 1.8, 1.2, -1.7 etc
$price = 0.78;
#string: "Sam", '2' etc
$name = "Hello world";

echo $completed . "<br>";
echo $score . "<br>";
echo $price . "<br>";
echo $name . "<br>";

echo"<hr>";

//to know or get the datatype
//using gettype() function
echo gettype($completed);
echo gettype($score) . "<br>";
echo gettype($price) . "<br>";
echo gettype($name) . "<br>";

echo"<hr>";
//using vardump()
echo var_dump($completed);
echo var_dump($score) . "<br>";
echo var_dump($price) . "<br>";
echo var_dump($name) . "<br>";

#compound data type
#array
$value = [1,2,3,1.5,true,"bid"];
print_r($value);
#object
#callable
#iterable

#special data type
#resource
#null : no value

echo "<hr>";
echo "Type casting" . "<br>";
#type casting
//you change the datatype by casting it
$x = (int) "2";
echo var_dump($x);












?>