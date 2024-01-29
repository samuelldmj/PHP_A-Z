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
echo"gettype()" . "<br>";
//to know or get the datatype
//using gettype() function
echo gettype($completed) . "<br>";
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
print_r($value) . "<br>";
print_r(var_dump($value)) . "<br>" ;
print_r(gettype($value)) . "<br>";
#object
#callable
#iterable

#special data type
#resource: The resource type is a special data type that represents a reference to an external resource such as a file, database connection, network socket, image, or any other system-level resource.
#null : no value

echo "<hr>";
echo "Type casting" . "<br>";
#type casting
//you change the datatype by casting it
$x = (int) "2";
$x = (int) "test"; //output: int(0)
echo var_dump($x);












?>