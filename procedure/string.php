<?php 
//STRING: a string is a series of character
//can be enclosed in single  or double quote
//single quote you can't use variables in double quote you can

$fname = "Samuel";
$lname = 'bolu';
$name = $fname . "  " . $lname;
echo $name . "<br>";

//accessing characters of a string
echo $name[0]; //output: S
echo $name[1]; //output: a
echo $name[-1]; //output: u

//modifying character(s) in a string
echo $name[-4] = "B"; //output: B
echo var_dump($name) . "<br>";

/*heredoc and nowdoc helps to handle complex expression that may contain
 double or single quote without the need to escape them*/

//heredocs
//treats an expression as if it is encloesed in double quote
//you can output variables

$a = 1;
$b = 2;
$text = <<<TEXT
LINE1 $a
LINE2 $b
LINE3
TEXT;
echo  nl2br($text);

//nowdocs
//treats an expression as if it enclosed in single quote
//you cant output variables
//identifiers need to be in quote
$text = <<<'TEXT'
LINE1 $a
LINE2 $b
LINE3
TEXT;
echo  "<br>";
echo  nl2br($text);






















?>