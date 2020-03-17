<?php

include_once ('../../database.php');
$id= $_GET['id'];
$active_sql = "UPDATE `service` SET `status`=1 WHERE `id` = {$id}";

mysqli_query($db,$active_sql);

header("location:../all_service.php");