<?php
/*
====DateTime object====

*/

// $datetime = new DateTime('tomorrow noon', new DateTimeZone('Africa/Lagos'));
// $datetime = new DateTime('03/03/2024 3:30pm');
// var_dump($datetime);

// $datetime->setTimezone(new DateTimeZone('Africa/Algiers'));
// var_dump($datetime);


//Formatting date and time using format methods and getting the name of the variuos timezones
// $datetime = new DateTime('03/03/2024 3:30pm');
// echo $datetime->getTimezone()->getName() .' - ' .  $datetime->format('d/m/y g:i A' ) . PHP_EOL;

// $datetime->setTimezone(new DateTimeZone('Africa/Freetown'));
// $datetime->setDate(2024, 4, 27)->setTime(3,45);
// echo $datetime->getTimezone()->getName() .' - ' .  $datetime->format('d/m/y g:i A' ) . PHP_EOL;


//date format in the Europe: day/monnth/year
//date format in US: month/day/year

//$EuopeanDateFormat = "12/05/2024 3:30pm";
// $EuopeanDateFormat = '15/05/2024 3:30pm'; //Error


//when php encounters dots(.) or dashes(-) it will use european format
//$datetime = new DateTime(str_replace('/', '-', $EuopeanDateFormat));

//efficient wAY
//createFromFormat will use the current time if none is given
// $EuopeanDateFormat = '15/05/2024';
// $datetime = DateTime::createFromFormat('d/m/Y', $EuopeanDateFormat);
// var_dump($datetime);


//Comapring Date
// $datetime1 = new DateTime('12/05/2024 9:50 AM');
// $datetime2 = new DateTime('12/05/2024 9:49 AM');
// var_dump($datetime1 > $datetime2);
// var_dump($datetime1 < $datetime2);
// var_dump($datetime1 === $datetime2);
// var_dump($datetime1 <=> $datetime2);


//Calculating the difference between 2 dates
// $datetime1 = new DateTime('12/15/2024 9:50 AM');
// $datetime2 = new DateTime('9/25/2024 9:49 AM');
// var_dump($datetime1->diff($datetime2));
// echo $datetime1->diff($datetime2)->format('%Y years %R%d days');


//using DateInterval
// $datetime = new DateTime('03/03/2024 3:30pm');
// $interval = new DateInterval('P5Y3M2D');
// $datetime->add($interval);
// echo $datetime->format('d/m/Y g:i A') . PHP_EOL;
// //subtracting
// $datetime->sub($interval);
// echo $datetime->format('d/m/Y g:i A');


//mODIFYING DATE and time using DateTimeImmutable
// $from = new DateTimeImmutable();
// $to = $from->add( new DateInterval('P1M'));
// //you have to reassign to make any changes work in DateTimeImmutable class
// $to = $to->add(new DateInterval('P1Y'));
// echo $from->format('m/d/Y') . "  -  " . $to->format('m/d/Y'). PHP_EOL;

//iterating over dates
$period = new DatePeriod(new DateTime('05/01/2024'), new DateInterval('P1D'), new DateTime('05/31/2024'));
foreach($period as $date){
    echo $date->format('d/m/Y') . PHP_EOL;
}












