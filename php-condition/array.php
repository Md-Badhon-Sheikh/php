<?php
// Array push
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br> <br>";


// Array Pop
 array_pop($a);
print_r($a);
echo "<br> <br>";

// array_shift
$b=['A','B','C','D'];
array_shift($b);
print_r($b);
echo "<br> <br>";

// array un_shift
$c=['C','D','E','F'];
array_unshift($c,'A','B');
print_r($c);
echo "<br> <br>";


$total = array_sum($b+$c);
print_r($total);

?>
