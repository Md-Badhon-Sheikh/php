<?php
namespace userCat;

abstract class Animal{
   
    abstract public function speak();
    public function live(){
        echo " Cat Live in Our Home ";
    }
    
}
class Cat extends Animal{
    public $speak;
    function speak(){
        echo "Cat Speak Mew Mew..!! 🐱🐱";
    }
}

?>