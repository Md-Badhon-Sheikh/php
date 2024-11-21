<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>Enter A Number : </h2>
        <input type="number" name="number" id="">
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_POST) {
        $number = $_POST['number'];
        $fact= 1;
       
        if ($number <= 0) {
            echo "Factorial is not defined for negative numbers.";
        } else {
            for ($i = 2; $i <= $number ; $i++) {
                $fact = $fact *$i;
            }
           echo $fact;
        }
    }
    ?>
</body>

</html>