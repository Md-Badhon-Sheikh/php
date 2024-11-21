<?php
abstract class Car{
    abstract public function info();
    // abstract public function show();
   public function data(){
    echo "Car running on the road.";
   }
}

// second class 
class Bike extends Car{
    function info(){
        echo "Royal Enfield";
    }
} 

// Third Class 
class Cycle extends Car{
    function info(){
        echo "Cycle calao ojon komao..";
    }
}

// create object 
$myObj = new Bike();
$myObj -> info();
echo "<br>";
$myObj -> data();
echo "<br>";

// create object 2
$myObj2 = new Cycle('');
$myObj2->info();
echo "<br>";
$myObj2->data();

?>