<?php
    session_start();

    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $name = $_POST['username'];
        
        $file = file('data.txt');
        $userExists = false;

        foreach($file as $singleData){
            list($userName, $userPassword)= explode(',',trim($singleData));
            if($name === $singleData){
                $userExists = true;
                break;
            }
        }
        if($userExists){
            $msg = 'This user already exists';
        }
        else{
            $data = $name.','.$userPassword.PHP_EOL;
            file_put_contents('data.txt',$data, FILE_APPEND);
            $_SESSION['mySession'] = $name;
            header('location: home.php');
            exit;

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles/singup.css">
</head>
<body>
    <div class="registration-container">
        <h2>Sign Up Form</h2>
        <form action="#" method="POST">
        <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="submit">Register</button><br>
            <p class="forgot-password"><a href="index.php">already have an account</a></p>
        </form>
    </div>
</body>
</html>
