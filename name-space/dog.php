<?php
namespace userDog;


interface Animal{
    public function dog();
}
class Live implements Animal{
   
    public function dog(){
        echo "Dog live in our Village.";
    }
}
class Speak implements Animal{
   
    public function dog(){
        echo "Dog Speak Woof Woof..!! 🐕🐕";
    }
}

?>