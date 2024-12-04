<?php
if (isset($_POST['btnSubmit'])) {

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
// function call 
    sum($num1, $num2);
}
  function sum($a, $b){
    try{
        if(!is_numeric($a) || !is_numeric($b)){
            throw new Exception("Both inputs must be numbers. <br>");
        }
        else{
            $result = $a+$b;
            echo "the sum of $a and $b is: $result <br>";
        }
    }
    catch(Exception $error){
        echo "Error:".$error->getMessage(). "<br>";
    }
    finally{
        echo "The execution of the function is complete.<br>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling</title>
</head>

<body>
    <form action="#" method="post">
        <label for="">Number-1:</label>
        <input type="text" name="num1"><br><br>
        <label for="">Number-2:</label>
        <input type="text" name="num2"><br><br>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>
</body>

</html>