<?php  
/*
|TASK 1/4
=>This is a json string of countries name and phone code from A-Z, could not find a phone code for country X, i had to omit it lol
|-----------------------------------------------------------------------------------------------------------------------------|
=>Read and find the phone code base on countries
=>write the data as csv
*/

$data = ' { 
       "Azerbaijan" : "+994",
        "Belgium" : "+32",
        "Canada" :  "+1",
        "Djibouti" : "+253",
        "Estonia": "+372",
        "Finland": "+358",
        "Gambia" : "+220",
        "Hong Kong SAR China" : "+852",
        "Iceland": "+354",
        "Japan": "+81",
        "Kenya" : "+254",
        "Luxembourg": "+352",
        "Malawi": "+265",
        "Nigeria": "+234",
        "Oman": "+968",
        "Peru": "+51",
        "Qatar": "+974",
        "Rwanda": "+250",
        "Senegal": "+221",
        "Tanzania": "+255",
        "Ukraine": "+380",
        "Vanuatu": "+678",
        "Wake Island": "+1 808",
        "Yemen": "+967",
        "Zambia": "+260"

} ';

$query = "Nigeria";
$countries = json_decode($data, true);
foreach($countries as $country => $phone){
    if($country === $query){
        echo $phone;
    }
};

//converting to a csv file
$file = fopen('a-zcountry.csv', 'w');
//header for the csv
fputcsv($file, ['country', 'Phone_code']);
foreach($countries as $country => $phone){
    fputcsv($file, [$country, $phone]);

}
fclose($file)

















?>