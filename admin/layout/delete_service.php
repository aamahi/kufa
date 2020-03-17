<?php

include_once ('../../database.php');
$id= $_GET['id'];
$delete_sql = "DELETE FROM `service` WHERE `id` = {$id}";

mysqli_query($db,$delete_sql);
header("location:../all_service.php");