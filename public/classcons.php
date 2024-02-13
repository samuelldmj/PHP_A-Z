<?php
//CLASS CONSTANT
//According to convention class name should be in upper case, though they are case-sensitive
//class name can not be redeclared
// it is defined with const keyword
//i can access constant from outside using (::)
//i can access constant from inside the class using self and (::)

use app\namespace\paddle\Transaction;

require __DIR__ . "/../vendor/autoload.php";


$transaction = new Transaction();

//class level accessing
echo Transaction::STATUS_PAID;

//object level accessing
echo $transaction::STATUS_PAID;

//using self keyword to access
//IT REFERS TO THE CURRENT CLASS
echo self::STATUS_PAID;

//from status validation
echo $transaction->setStatus(self::STATUS_PAID);