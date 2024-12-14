<?php
$conn = mysqli_connect('localhost', 'root', '', 'procedure');

if(isset($_POST['insert'])){
    $name = $_POST['name'];
    $model = $_POST['model'];

    $conn->query("call  brand_table('$name','$model')");

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procedure data</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Brand Name:</label>
        <input type="text" name="name"><br>
        <label for="">Brand Model:</label>
        <input type="text" name="model"><br>
        <button type="submit" name="insert">Insert</button>
    </form><br><br>

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
</body>
</html>