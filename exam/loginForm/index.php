<?php
require_once 'class.php';

if(isset($_POST['btnSubmit'])){
    $id = $_POST['trainID'];
    $name = $_POST['trainName'];
    $batch = $_POST['trainBatch'];

    $trainObj = new Trainee($id,$name,$batch);
    $trainObj->save();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        form{
            width: 200px;
            margin: 0 auto;
            padding: 1px 0px 20px 50px;
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
    </style>
</head>
<body>
    <form action="#" method="post">
        <h2>Login Form</h2>
        <div>
            <label for="">Trainee ID</label><br>
            <input type="number" name="trainID" id=""><br>
        </div>
        <div>
            <label for="">Trainee Name</label><br>
            <input type="text" name="trainName" id=""><br>
        </div>
        <div>
            <label for="">Trainee Batch</label><br>
            <input type="text" name="trainBatch" id=""><br>
        </div>
        <input class="btn" type="submit" value="Submit" name="btnSubmit">
    </form>
    <?php
        Trainee::display();
    ?>
</body>
</html>