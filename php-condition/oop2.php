<?php
class Bike
{
    public $name;
    public $model;
    public $color;

    function set_name($name,$model,$color)
    {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }
    function get_name()
    {
        return $this->name.$this->model.$this->color;
    
    }
}
$my= new Bike();
$my->set_name("Royal <br>","Classic <br>","Olive");
echo $my->get_name();

?>