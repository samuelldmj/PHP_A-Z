<?php  
//Date and time project
//Task
/*

1) calculate the age of a person in days
steps
=> Get a date.
=> Then print the number of days since the birthdays

*/
//random date
$date = "1997-03-27";
$today = date("Y-m-d");
$diff = strtotime($today) - strtotime($date);
//(60 * 60 * 24) represent a day in seconds
$numOfDays = $diff / (60 * 60 * 24);
echo "There are $numOfDays days since $date " . "<br>"; //output: There are 9796 days since 1997-03-27 

//============================
//using the above days(9796), i can get the exact years, month and days.
//============================

$days = 9796;
$years = intval($days / 365); 
$days = $days % 365;
$months = intval($days / 30); 
$days = $days % 30;
echo "$years years, $months months, $days days";//output: 26 years, 10 months, 6 days








?>