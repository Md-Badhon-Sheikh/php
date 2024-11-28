<?php
  if(isset($_POST['btnSubmit'])){
    $file = $_FILES['myFile'];
    $fileName = $file['name'];
    $tmpFile = $file['tmp_name'];
    $fileSize = $file['size'];
    $kb = $fileSize/1024;

    $img = 'image/';

    if($kb > 400){
        echo "File is too large.";
    }
    else{
        move_uploaded_file($tmpFile,$img.$fileName);

    }                                                                                                              
    // var_dump($file);
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myFile" id="">
        <input type="submit" name="btnSubmit" value="Upload">
    </form>
    <?php
        if(isset($_POST['btnSubmit'])){
            echo "<img src='$img/$fileName' width= '300px'; alt=''>";
        }
    
    ?>
   
</body>
</html>