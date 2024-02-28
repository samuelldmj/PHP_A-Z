<?php

/*
====LATE STATIC BINDINGS===
*/


class Bicycle{

    //created some properties here
public static $accelerate = true;
public $brand;
public $model;
public $description;
public $year;
private $weight_kg;
protected static $wheels = 2;
public static $instance_count = 0 ;
public const CATEGORIES = ["Road", 'Mountain', "Hybrid", 'Cruiser', 'City', 'BMX'];

//created some methods

//creating a static count here
public static function Create(){
    $name_class = get_called_class();
    $new_ins = new $name_class;
    self::$instance_count++;
    return $new_ins ;

}
public function set_weight_kg($value){
    return $this->weight_kg = floatval($value) / 2.2046226218 ; 
}

public function get_weight_kg(){
    return $this->weight_kg . " kg";
}
public function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218 . " lbs";
}

public function Name() {
    return $this->brand. "<br>". $this->year . "<br>". $this->model;
}

public static function acceleration(){
        echo " i can accelerate" . "<br>";
}


public static function wheel_details(){
          
    return static::$wheels = "Bicycle has 2 wheels" ;
   echo "static" . get_called_class();
   } 
} 




class Unicycle extends Bicycle {
    public static $accelerate = false;
    protected static $wheels = 1;
    public static function wheel_details(){

       return $wheels = "Unicycle has 1 wheel";       
}
    public static function acceleration(){
        if(!self::$accelerate){
            echo "I can not accelerate";
        }else {
            parent::$accelerate;
        }
}


}

//creating instance
//$bike = new Bicycle;

//wheel details
echo Bicycle::wheel_details() . "<br>" ;
echo Unicycle::wheel_details() . "<br>" ;

//default property will be displayed
echo "Bicycle: " . Bicycle::$instance_count . "<br>" ;
echo "Unicycle: " . Unicycle::$instance_count . "<br>" ;

$bike1 = Bicycle::create();
$bike2 = Unicycle::create();

//counting the number of instance created
echo "Bicycle: " . Bicycle::$instance_count . "<br>" ;
echo "Unicycle: " . Unicycle::$instance_count . "<br>"  ;

//testing acceleration
//echo Bicycle::acceleration() . "<br>" ;
echo Unicycle::acceleration() . "<br>" ;

//accessing constant values
echo Bicycle::CATEGORIES[0] . "<br>";
print_r(Unicycle::CATEGORIES);











































