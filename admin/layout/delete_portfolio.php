<?php

include_once ('../../database.php');
$id= $_GET['id'];
$img= $_GET['img'];
$delete_sql = "DELETE FROM `portfolio` WHERE `id` = {$id}";
//echo "../images/user/$img";
unlink("../../portfolio/$img");
mysqli_query($db,$delete_sql);
header("location:../all_portfolio.php");