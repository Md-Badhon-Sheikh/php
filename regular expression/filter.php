<?php
$input=[
    'This is 7 O clock',
    'This is our class',
    'This is our batch yer 2024'
];
$r = preg_filter('/[0-9]+/','($0)',$input);
print_r($r);


?>