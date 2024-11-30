<?php
session_start();
if(isset($_POST["btnLogin"])){
    $username = $_POST['txtName'];
    $password = $_POST['txtPassword'];

    if($username == "admin" && $password =="123"){
        $_SESSION["mySession"]=$username;
        header("location:demo.php");
    }else{
        $error ="Username or Password not valid";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div class="login-container">
        <form class="login-form">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="txtName" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="txtPassword" placeholder="Enter your password" required><br>
                <?php
                echo isset($error)?$error:'';
                ?>
            </div>
            <button class="btn" name="btnLogin">Login</button>
            <p class="register-link">Don't have an account? <a href="#">Sign up</a></p>
        </form>
    </div>
</body>
</html>
