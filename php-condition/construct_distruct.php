<?php
class Bike
{
    public $name;
    public $Model;
    function __destruct()
    {
        echo "<br> Hello PHP ";
    }
    function __construct()
    {
        echo "This is Construct Function";
    }
    public function info()
    {
        echo "this is info method";
    }
}
// $newObject = new Bike();
// echo "<br>";
// echo $newObject->info();

// new class

class Car extends Bike{
    public $color;
    public $price;
    function __construct($myName)
    {
        echo "This is child Constructor Function. <br>";
        $this->name = $myName;
    }
    public function details(){
        echo "this is child method";
    }
}
$carObj = new Car("Badhon");
echo $carObj-> name;
// $carObj -> details();
// echo "<br>";
// echo $carObj -> color;
// echo "<br>";


?>