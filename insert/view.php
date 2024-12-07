<?php
$conn = mysqli_connect('localhost', 'root', '', 'student');
// $sql = "SELECT * FROM data";

// delete data 
if (isset($_GET['deleteid'])) {
    $delete_id = $_GET['deleteid'];

    $sql = "DELETE FROM data WHERE id= $delete_id";
    if (mysqli_query($conn, $sql) == true) {
        header('location:view.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table Example</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <h2>User Information</h2>
    <table>
        <tr>
            <th>Your Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>

        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "student");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            $user = $conn->query("select * from data");
            while (list($id, $name, $email) = $user->fetch_row()) {
                echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td><a href='update.php?updateid=$id'>Edit</a></td>
                    <td><a href='view.php?deleteid=$id'>Delete</a></td>
       </tr> ";
            }
        }

        ?>
    </table>
    <button type="submit" name='btnSubmit'><a href="info.php">Back Insert Page</a></button>

</body>

</html>