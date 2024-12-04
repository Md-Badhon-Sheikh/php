<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
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
        <h2>Enter A number</h2>
        <input type="number" name="num1" id=""><br>
        <input class="btn" type="submit" value="Submit" name="btnSubmit">
    </form>
    <div> </div>
    <?php
        if($_POST){
            $num1 = $_POST['num1'];
            $isPrime = true;

            if($num1 == 0 || $num1 == 1){
                echo "0 or 1 are not prime number.";
            }
            else{
                for($i=2; $i<$num1/2; $i++){
                    if($num1%$i === 0){
                        $isPrime = false;
                        break;
                    }
                }
                if($isPrime == true){
                    echo "<div>  $num1 is A Prime Number </div>";
                }
                else{
                    echo "<div>  $num1 is Not A Prime Number </div>";
                }
            }
        }
    
    ?>
</body>
</html>