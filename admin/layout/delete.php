<?php

include_once ('../../database.php');
$id= $_GET['id'];
$img= $_GET['img'];
$delete_sql = "DELETE FROM `user` WHERE `id` = {$id}";
//echo "../images/user/$img";
unlink("../images/user/$img");
mysqli_query($db,$delete_sql);
header("location:../all_user.php");