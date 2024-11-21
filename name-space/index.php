<?php

require "cat.php";
require "dog.php";

use userCat\Cat;
use userDog\Live;
use userDog\Speak;

// cat Object create 
$catObj = new Cat();
$catObj -> live();
echo "<br>";
$catObj-> speak();
echo "<br> <br>";

// cat Object create 
$dogObj = new Live();
$dogObj-> dog();
echo "<br>";
// cat Object2 create 
$dogObj2 = new Speak();
$dogObj2-> dog();

?>