<?php
if (isset($_POST['btnSubmit'])) {
  $file = $_FILES['myFile'];
  $fileName = $file['name'];
  $tmpFile = $file['tmp_name'];
  $size = $file['size'];
  $kb = $size / 1024;

  $img = 'images/';

  if ($kb < 400) {
    move_uploaded_file($tmpFile, $img . $fileName);
    $msg = "Success 😉";
  } else {
    $msg = " Your file too large!!!! 😡😡";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload Form</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="upload-form">

    <!-- show a massage -->
    <?php
    echo isset($msg) ? $msg : '';
    ?>

    <h1>Upload Your File</h1>
    <form action="#" method="post" enctype="multipart/form-data">
      <label for="file-upload" class="custom-file-upload">
        Choose File
      </label>
      <input type="file" id="file-upload" name="myFile">
      <button type="submit" name="btnSubmit">Upload</button>
    </form>

  </div>

  <!-- display image  -->
  <?php

  $imgLocation = "images/";
  $images = glob($imgLocation . "*{jpg, jpeg, png, gif}", GLOB_BRACE);
  if (count($images) > 0) {
    foreach ($images as $image) {
      echo '<img src="' . $image . '"  width= 300px; height=300px; alt="Uploaded Image">';
    }
  } else {
    echo "No image Uploaded Yet !!";
  }

  ?>

</body>

</html>