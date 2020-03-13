<?php
session_start();
//print_r($_SESSION['user_all_info']);
if (!isset($_SESSION['user_all_info'])){
    header("location:signin.php");
}
?>

<a href="signin.php">Logout</a>
