<?php
require_once('myClass.php');

    if(isset($_POST['btnSubmit'])){
        $id = $_POST['trainID'];
        $name = $_POST['trainName'];
        $batch = $_POST['trainBatch'];

        $trainObj = new Trainee($id, $name,$batch);
        $trainObj->save();

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: 0 auto; 
            width:200px;
            border: 2px solid;
            border-radius: 10px;
            padding: 20px 0 20px 30px;
            margin-bottom: 20px;
            margin-top: 20px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="">Trainee ID</label><br>
            <input type="text" name="trainID"><br>
        </div>
        <div>
            <label for="">Trainee Name</label><br>
            <input type="text" name="trainName"><br>
        </div>
        <div>
            <label for="">Trainee Batch</label><br>
            <input type="text" name="trainBatch"><br>
        </div>
        <input type="submit" value="Submit" name="btnSubmit">
    </form>

    
    <?php
        Trainee::display();
    ?>
</body>
</html>