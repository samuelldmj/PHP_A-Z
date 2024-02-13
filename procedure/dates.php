<?php       
//WORKING WITH DATES AND TIME IN PHP
//timestamp is a number of seconds from 1970 1 january
//time() function
//trying to get the current time 
$currentTime = time() . "<br>"; 
echo $currentTime; //output: 1705839760
//converting 5 days into seconds, this will be time in 5days(5days in the future)
echo $currentTime + 5 * 24 * 60 * 60 . "<br>"; //output: 1706271760
//yesterday timestamp
echo $currentTime - 60 * 60 * 24 . "<br>"; //output: 1705753360

//to make this timestamp readable to the users, i need to convert it to readable format.
//that is when the date() function comes in
//consult the php documentation for  more info on date and time format
echo date("m/d/y g:ia") . "<br>";
//adding timestamp
//(5days in the future)
echo date("m/d/y g:ia", $currentTime + 5 * 24 * 60 * 60 );//output: 01/26/24 1:43pm

//Working with timezones
//consult the php documentation for valid timezones format
date_default_timezone_set("Africa/Lagos"). "<br>";
//trying to get the current time
$currentTime = time();
echo $currentTime. "<br>";
//converting 5 days into seconds, this will be time in 5days(5days in the future) 
echo $currentTime + 5 * 24 * 60 * 60 . "<br>";
echo date("m/d/y g:ia") . "<br>";
echo date_default_timezone_get(). "<br>";

//strtotime() function
//if insert a random or an invalid charater it returns false
echo var_dump(strtotime("nzvznfklzfnv")). "<br>";
echo date("m-d-y g:ia",strtotime("Today")). "<br>";

























?>