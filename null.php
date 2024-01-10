<?php 
//NULL DATA TYPE: A SPECIAL DATA THAT REPRESENT NO VALUE

//null constant
$x = null;
$x = 123;
echo is_null($x);
echo var_dump($x);

//undefined
echo var_dump($y);

//by unsetting
$z = 49;
unset($z);
// echo $z;

//casting
$g = null;
echo  var_dump((string) $g);
echo  var_dump((boolean) $g);
echo  var_dump((array) $g);
?>