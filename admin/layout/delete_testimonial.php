<?php

include_once ('../../database.php');
$id= $_GET['id'];
$img= $_GET['img'];
$delete_sql = "DELETE FROM `testimonial` WHERE `id` = {$id}";
//echo "../images/user/$img";
unlink("../../testimonial/$img");
mysqli_query($db,$delete_sql);
header("location:../all_testimonial.php");