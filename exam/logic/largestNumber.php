<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
    <style>
          form{
            width: 200px;
            margin: 0 auto;
            padding: 20px 0px 20px 50px;
            border: 2px solid;
            border-radius: 5px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        form input{
            margin-bottom: 5px;
        }
        .btn{
            padding: 2px 63px;
            margin-top: 10px;
        }
        div{
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <h2>Enter Numbers</h2>
        <input type="number" name="num1" id="" placeholder="Enter 1st Number"><br>
        <input type="number" name="num2" id="" placeholder="Enter 2nd Number"><br>
        <input type="number" name="num3" id="" placeholder="Enter 3rd Number"><br>
        <input class="btn" type="submit" value="Submit" name="btnSubmit">
    </form>
   
    <?php
        if($_POST){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            if($num1 > $num2 && $num1 > $num3){
                echo "  <div>1st Number: $num1 <br> 2nd Number: $num2<br>  3rd Number: $num3 <br> Largest Number is: $num1  </div>";
            }
            else if($num2 > $num1 && $num2 > $num3){
                echo "<div>1st Number: $num1<br>  2nd Number: $num2<br>  3rd Number: $num3 <br> Largest Number is: $num2  </div>";
            }
            else{
                echo "<div>1st Number: $num1 <br>  2nd Number: $num2 <br>  3rd Number: $num3 <br> Largest Number is: $num3 </div>";
            }
        }
    
    ?>
</body>
</html>