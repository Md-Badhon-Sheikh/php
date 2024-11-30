<?php
session_start();
if(!isset($_SESSION["mySession"])){
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="welcome-section">
        <div class="content">
            <h1>Welcome to Our Platform!</h1>
            <p>Your journey starts here. Let’s create something amazing together.</p>
            <a href="#" class="btn">Explore Now</a>
        </div>
    </div>
</body>
</html>
