<?php
class Bike{
    public $name ;
    public $model ;
    public $color ;
    
        function info(){

            return $this-> name = "Royal Enfield <br>". $this-> model="Bullet";
        }
}
$my_bike = new Bike();
// echo $my_bike -> name , "<br>";
// echo $my_bike -> model , "<br>";
// echo $my_bike -> color , "<br>";
echo $my_bike -> info() , "<br>";

?>