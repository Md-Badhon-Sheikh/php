<?php
$conn = new mysqli('localhost', 'root', '', 'product');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    $conn->query("call  product_routine('$name','$contact')");
}
if (isset($_POST['addProduct'])) {
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $manuf = $_POST['manuf'];

    $conn->query("call manufact('$pname', '$manuf','$price')");
}
if (isset($_POST['delete'])) {
    $del = $_POST['d'];
    $conn->query("DELETE FROM brand WHERE id = '$del'");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    <!-- Brand added  -->
    <div class="login-container">
        <h2>Add Brand</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Brand:</label>
                <input type="text" id="username" name="name" required>
            </div>
            <div class="input-group">
                <label for="password">Contact</label>
                <input type="text" id="password" name="contact" required>
            </div>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>

    </div> <br><br>

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

    <!-- data view  -->

    <div class="table-container">
        <h2>Data Table</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Brand</th>
                    <th>Contact</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'product');
                if (!$conn) {
                    die('Connection failed:' . mysqli_connect_error());
                } else {
                    $user = $conn->query("SELECT * FROM price_view");
                    $counter = 1;
                    while (list($brand, $contact, $product_name, $price) = $user->fetch_row()) {
                        $sl = $counter++;
                        echo "<tr>
                    <td>$sl</td>
                    <td>$brand</td>
                    <td>$contact</td>
                    <td>$product_name</td>
                    <td>$price</td>
                </tr>";
                    }
                }
                ?>

            </tbody>
        </table>
    </div>


    <form action="" method="post">
        <select name="d" id="" class="options">
            <?php
            $manufactList = $conn->query('select * from brand');
            while (list($_mid, $_mname) = $manufactList->fetch_row()) {
                echo "<option value ='$_mid'>$_mname</option> ";
            }
            ?>
        </select>
<button name="delete" type="submit">Delete</button>
    </form>
</body>

</html>