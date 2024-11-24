<?php

class Trainee {
    private $id;
    private $name;
     function __construct($myID,$myName){
        $this->id=$myID;
        $this->name=$myName;
        
     }
     public function combineE (){
       return $this->id.",".$this->name.PHP_EOL;
     }

     function save(){
        file_put_contents("store.txt",$this->combineE(),FILE_APPEND);
     }

    static function display(){
        $myARR = file("store.txt");
        // print_r($myARR);
        echo "Trainee ID  | Trainee Name <br><br>";
        foreach($myARR as $oneData){
            list($id,$name)=explode(",",$oneData);
            echo"<br> $id | $name";
        }
     }
     
}

?>