<?php

include_once ('../../database.php');
$id= $_GET['id'];
$img= $_GET['img'];
$delete_sql = "DELETE FROM `clint` WHERE `id` = {$id}";
//echo "../images/user/$img";
unlink("../../clint/$img");
mysqli_query($db,$delete_sql);
header("location:../all_clint.php");