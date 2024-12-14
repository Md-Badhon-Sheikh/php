<?php
    $conn = mysqli_connect('localhost', 'root','','products_data');

    if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $contact = $_POST['contact'];

        $conn->query("call call_brand('$name', '$contact')");
    }

    if(isset($_POST['addProduct'])){
        $pname = $_POST['pname'];
        $price = $_POST['price'];
        $brands = $_POST['brands'];
        $conn->query("call call_product('$pname', '$price','$brands')");
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
    <br>
    <!-- add brand section -->
    <div class="login-container">
        <h2>Add Brand</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="name">name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="contact">Contact:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <button type="submit" name="insert">Insert</button>
        </form>
    </div><br>

    <!-- added porducts -->

    <div class="login-container">
        <h2>Product from</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="pname" required>
            </div>
            <div class="input-group">
                <label for="contact">Product Price:</label>
                <input type="text" id="contact" name="price" required>
            </div>
            <div class="input-group">
                <label for="contact">Select Brand:</label>
                <select name="brands" id="">
                    
                    <?php
                        $brandList =$conn->query('SELECT * FROM brand');
                        while(list($id, $name)= $brandList->fetch_row()){
                            echo "
                                <option value='$id'>$name</option>
                            ";
                        }
                    ?>
                </select>
            </div>

            <button type="submit" name="addProduct">Insert</button>
        </form>
    </div>
</body>

</html>