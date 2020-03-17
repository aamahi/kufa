<?php

include_once ('../../database.php');
$id= $_GET['id'];
$img= $_GET['img'];
$delete_sql = "DELETE FROM `about` WHERE `id` = {$id}";
//echo "../images/user/$img";
unlink("../../about/$img");
mysqli_query($db,$delete_sql);
header("location:../all_about.php");