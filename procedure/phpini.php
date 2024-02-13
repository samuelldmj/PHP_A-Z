<?php 
//WORKING WITH PHP CONFIGURATION FILES (PHP.INI)
/*you would want to customize and configure some things within the php, that is why php comes with a configuration file called php.ini .
depending on the server operating system, in my case i am using the xamp software, so i can access the php.ini file from the config button,
on the apache row, then i click the config button, scroll down to find the php.ini file and update whatever i need.
*/

/*
Consult the official website php.net for documentation
SOME FEW POINTS TO NOTE:
1) whatever is enclosed in the squared bracket is ignored
2) semi colon indicates the line is a comment
3) ini_get() and ini_set() can be used to update directives, but some of these directives can not be updated at runtime, we need to consult the
php.ini file to update them.
4) PHP_INI_SYSTEM and PHP_INI_PEDIR can not be updated using the  ini_set() 
5) ini_set() update the value of the directives at runtime, that is, it would only be effective during the script execution


SOME FEW PHP INI DIRECTIVES
//error_reporting, error_log, display_error
=> error_reporting: allows you set different levels of php error reporting.
when error_reporting = E_ALL it report all errors.
for example: if i have an array with an element, trying to access an element in an index that does not exist will throw an error
$array = [1]
echo $array[3]; this would throw an error, because there is no element occupying index 3 in the array.

i can suppress the warning by
ini_set('error_reporting', E_ALL & ~E_WARNING); THE WARNING WOULD DISSAPPEAR
$array = [1]
echo $array[3];

=>display_errors: this indicates whether you want display error on the screen or not
var_dump(ini_get('display_errors'));
ini_set('display_errors', 0); we would no longer see errors on the screen
$array = [1]
echo $array[3];

Instead of displaying errors , we can log the errors. that is where error_log comes in.

=>memory_limit: this set the maximum size a script can consume
var_dump(ini_get('memory_limit')); string(4) "512M" 
you can set the memory_limit to -1 to remove the memory limit, this is not advisable

*/




















?>