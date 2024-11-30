<?php
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
    $id = $_POST["txtId"];
    $name = $_POST["txtName"];
    $course = $_POST["txtCourse"];
    $phone = $_POST["txtPhone"];
    
    if(preg_match("/^[0-9+]{11,14}$/", $phone)){
        $student = new Student($id, $name, $course, $phone);
        $student->save();
        echo "Success!";
    }
    else{
        echo "Invalid Phone";
    }
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
            width: 200px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #FA8072;
            padding: 20px 0px 20px 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="">ID:</label><br>
        <input type="number" name="txtId" id=""><br>
    <label for="">Name:</label><br>
    <input type="text" name="txtName"><br>
    <label for="">Course:</label><br>
    <input type="text" name="txtCourse"><br>
    <label for="">Phone:</label><br>
    <input type="number" name="txtPhone" id=""><br>
    <input type="submit" value="Submit">
    </form>

<?php

Student:: display_students();

?>

</body>
</html>