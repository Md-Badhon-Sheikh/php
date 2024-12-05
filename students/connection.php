<?php
    $db = mysqli_connect('localhost','root','','student');
    if(isset($_GET['btnClick'])){
        echo 'btnClick';
        $delete_id = $_GET['btnClick'];

        $sql = "DELETE FROM information WHERE id= $delete_id";
        if(mysqli_query($db, $sql)==true){
            header('location:connection.php');
        }
    }

?>
<table border="1" style="border-collapse:collapse;">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>email</th>
    <th>Delete</th>
</tr>

<?php
    $users = $db-> query("select * from information");
    while(list($_id,$_name,$_email)=$users -> fetch_row()){
        echo"
            <tr>
                <td>$_id</td>
                <td>$_name</td>
                <td>$_email</td>
                <td><a href='connection.php?btnClick= $_id'>Delete</a></td>

            </tr>
        ";
    }
?>
</table>