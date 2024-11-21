<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>Enter Three number.</h2>
        <input type="number" name="num1"><br> <br>
        <input type="number" name="num2"><br><br>
        <input type="number" name="num3"><br><br>
        <input type="submit" value="Submit"><br>
    </form>

    <?php
    if ($_POST) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $num3 = $_POST['num3'];
        echo "<br> Number 1: $num1 <br>  Number 2: $num2 <br>  Number 3: $num3 <br>";
        if ($num1 > $num2 && $num1 > $num3) {
            echo " Max Number is : $num1";
        } else if ($num2 > $num1 && $num2 > $num3) {
            echo " Max Number is : $num2";
        } else {
            echo "Max Number is: $num3";
        }
    }

    ?>
</body>

</html>