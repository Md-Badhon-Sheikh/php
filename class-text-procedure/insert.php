<?php
$conn = mysqli_connect('localhost', 'root', '', 'company');

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $conn-> query("call call_manufacturer ('$name',' $address',' $contact')");
}

if (isset($_POST['addProduct'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $manuf = $_POST['manuf'];

    $conn->query("call call_product('$pname', '$manuf','$price')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
<div class="login-container">
        <h2>Add Brand</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Brand:</label>
                <input type="text" id="username" name="name" required>
            </div>
            <div class="input-group">
                <label for="password">Address</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="input-group">
                <label for="password">Contact</label>
                <input type="text" id="password" name="contact" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

     <!-- Product  table -->
     <div class="login-container">
        <h2>Product from</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Product Name:</label>
                <input type="text" id="name" name="pname" required>
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="text" name="price" required>
            </div>
            <div class="form-group">
                <label for="price">Manufacture:</label>
                <select name="manuf" id="" class="options">
                    <?php
                    $manufactList = $conn->query('select * from brand');
                    while (list($_mid, $_mname) = $manufactList->fetch_row()) {
                        echo "<option value ='$_mid'>$_mname</option> ";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="addProduct">AddProduct</button>
            </div>

        </form>
    </div><br><br>

</body>
</html>