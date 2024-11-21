<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>Enter the Number:</h2><br>
        <input type="number" name="number" >
        <input type="submit" name="submit" value="Summit">
    </form>
<?php
if($_POST){
    $fact = 1;

    $number = $_POST['number'];
    echo "Factorial of $number: <br> <br>";

    for($i = 1; $i<= $number; $i++){
        $fact = $fact * $i;
    }
    echo $fact . "<br>";
}


?>

</body>
</html>