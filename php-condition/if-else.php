<?php

$price=1000;
$is_student = false;

if($is_student == true){
    $new_price = $price - $price/100*50;
    echo "Your Price is: $new_price";
}
else{
    $new_price = $price+100;
    echo "Your Price is: $new_price";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Your total price is : <?php echo $new_price?> tk</h2>
</body>
</html>