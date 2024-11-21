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
        $is_prime = true;
        if ($number == 0 || $number == 1) {
            echo "Number 0 or 1 are not Prime.";
        } else {
            for ($i = 2; $i < $number / 2; $i++) {
                if ($number % $i == 0) {
                    $is_prime = false;
                   break;
                }
            }
            if($is_prime == true){
                echo "$number Is Prime Number ";
            }
            else{
                echo "$number Is Not Prime Number ";
            }
        }
    }




    ?>
</body>

</html>