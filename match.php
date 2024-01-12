<?php  
//MATCH
//introduced in php 8.0
//match does strict comparison unlike switch statement
//it can be assigned to a variable
//all the possible cases have to stated to avoid errors
//say $paymentStatuses = 7, 7 is not part of the cases below, hence throws an error
//if you dont specify all the possiblity of the cases, then we need to use the default keyword
$paymentStatuses = 7;
// match($paymentStatuses){
//     1 => print_r("Paid"),
//     2 =>print "Payment Declined",
//     0 => print "Pending Payment"
// };

$paymentStatusesDisplay = match($paymentStatuses){
    1 => "Paid",
    2 => "Payment Declined",
    0 => "Pending Payment",
    default => "Uknown Payment Status"
};

echo $paymentStatusesDisplay






















?>