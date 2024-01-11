<?php
//SWITCH
//could be a useful alternative  for if else statement
/* 
HOW IT WORKS
=>The expression is evaluated once
=>The value of the expression is compared with the values of each case
=>If there is a match, the associated block of code is executed
=>The break keyword breaks out of the switch block
=>The default code block is executed if there is no match
*/

// $paymentStatus = 'paid';

// switch($paymentStatus){

//     case 'paid':
//     echo "Paid";
//     break;

//     case 'decline':
//     echo "Declined";
//     break;

//     case 'pending':
//     echo "Pending";
//     break;

//     default:
//     echo "Unknown payment status";
// }

//break keyword breaks out of the switch statement not out of the loop
$paymentStatuses = [1, 3, 0];
foreach($paymentStatuses as $paymentStatus):
switch($paymentStatus){

    case 1:
    echo "Paid";
    break;

    case 2:
    case 3:
    echo "Declined";
    break;

    case 0:
    echo "Pending";
    break;

    default:
    echo "Unknown payment status";
}
echo "<br>";
endforeach;













?>