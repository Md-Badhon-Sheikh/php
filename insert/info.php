<?php
    $conn = mysqli_connect('localhost','root','', 'student');

    // insert data
    if(isset($_POST['btnSubmit'])){
        $name = $_POST['username'];
        $email = $_POST['email'];

        $sql = "INSERT INTO data(name,email) VALUES('$name','$email')";
        if(mysqli_query($conn, $sql) == TRUE){
            echo "Data inserted";
            header('location:view.php');
        }
        else{
            echo "Not inserted";
        }
    }
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Data insert</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Email:</label>
                <input type="email" id="password" name="email" required>
            </div>
            <button type="submit" name='btnSubmit'>Inset</button>
            <p class="forgot-password"><a href="#"></a></p>
        </form>
    </div>
   
</body>
</html>
