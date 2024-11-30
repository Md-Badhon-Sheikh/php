<?php
require_once "student.php";
 
if(isset($_POST["btnSubmit"])){
    $id = $_POST["txtId"];
    $name = $_POST["txtName"];

    $student = new Student($id, $name);
    $student->save();
    // echo "Success";
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
            ID:<br />
            <input type="text" name="txtId" />
        </div>
        <div>
            Name<br />
            <input type="text" name="txtName" />
        </div>
        <div>
            <input style="margin-top: 10px; padding: 2px 65px; background-color: #fff; border-radius: 3px " type="submit" name="btnSubmit" value="Submit" />
        </div>
    </form>

    <?php
    Student:: display_students();
    ?>
</body>
</html>