<?php
$db = mysqli_connect('localhost', 'root', '', 'student');

?>
<table border="1" style="border-collapse:collapse">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>phone</th>
        <th>address</th>
    </tr>

    <?php
        $users = $db->query('select * from info');
        while(list($_id, $_name, $_email, $_password,$_phone,$_address) = $users->fetch_row()){
            echo"
            <tr>
            <td>$_id</td>
            <td>$_name</td>
            <td>$_email</td>
            <td>$_password</td>
            <td>$_phone</td>
            <td>$_address</td>
        </tr>";
        }
    
    ?>


</table>