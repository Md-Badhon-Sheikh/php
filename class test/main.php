
<?php
// include class 
require_once('myClass.php');

if(isset($_POST['btnSubmit'])){
    $id = $_POST['traineeID'];
    $name = $_POST['traineeName'];
    // create object 
    $myObj = new Trainee($id,$name);
    $myObj->save();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form openssl_open</title>
</head>
<body>
    <section>
        <form action="#" method="post">
            <div>
                <label for="id">Trainee ID :</label>
                <input type="number" name="traineeID" id="">
            </div>
            <div>
                <label for="id">Trainee Name :</label>
                <input type="text" name="traineeName" id="">
            </div>
            <button type="submit" name="btnSubmit">Submit</button>
        </form>
    </section>

    <?php
    Trainee::display();
    ?>
</body>
</html>