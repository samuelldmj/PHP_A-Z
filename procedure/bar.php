<!-- 1,2,3,
a,b,c
d,e,f -->
<?php


$array = [
    'a' => ['x'],
    'b' => ['y'],
    'c' => ['z']
];

$output =  [];

foreach($array as $key => $childarray){
    foreach($childarray as $index){
        //nothing
    }

    $output[] = $index;
}

echo implode(", ", $output);