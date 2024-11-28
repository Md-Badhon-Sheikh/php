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
        echo "success!!!";

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

   
</body>
</html>
<?php

$imgLocation = "image/";
$images = glob($imgLocation. "*{jpg,jpeg,png,gif}", GLOB_BRACE);
if(count($images)>0){
    foreach($images as $image){
        echo '<img src="'.$image. '"  alt="Uploaded Image">';
    }  
}
else{
    echo "No image uploaded yet";
}


?>