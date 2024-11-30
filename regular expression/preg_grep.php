<?php
$foods = array("Potato","Pasta","Ponir","fish","faluda","Pakora");
$filtered_array = preg_grep("/^P/",$foods);

print_r($filtered_array);



?>