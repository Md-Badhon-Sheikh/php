<?php
$conn = mysqli_connect('localhost', 'root', '', 'product');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $conn->query("call  product_routine('$name','$contact')");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

</head>

<body>
    <div class="login-container">

        <form action="" method="post">
            <div class="form-group">
                <label for="username">Brand:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password">Contact</label>
                <input type="text" id="" name="contact" required>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>

        </form>
    </div> <br><br>


    <div class="login-container">

        <form action="/login" method="post">
            <div class="form-group">
                <label for="username">Product Name:</label>
                <input type="text" id="name" name="pname" required>
            </div>
            <div class="form-group">
                <label for="price">Product Price:</label>
                <input type="text"name="price" required>
            </div>
            <div class="form-group">
                <label for="price">Manufacture:</label>
               <select name="manufact" id="">
                    <?php
                        $manufact = $conn->query('select * from brand');
                        while(list($_mid,$_mname) = $manufact->fetch_row()){
                            echo "<option value ='$_mid'$_mname</option> ";
                        }
                    ?>
               </select>
            </div>
            <div class="form-group">
                <button type="submit" name="addProduct">AddProduct</button>
            </div>

        </form>
    </div>
</body>

</html>