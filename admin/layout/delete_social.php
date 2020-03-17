<?php

include_once ('../../database.php');
$id= $_GET['id'];
$delete_sql = "DELETE FROM `social` WHERE `id` = {$id}";

mysqli_query($db,$delete_sql);
header("location:../all_social.php");