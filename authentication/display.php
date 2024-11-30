
<?php
session_start();
if (!isset($_SESSION['mySession'])) {
    header("location:login.php");
}
    require_once'nav.php';
?>
<div style="margin-top: 20px;"></div>
<?php
require_once'class.php';

Student:: display();



?>
