<?php

include_once ('../../database.php');
$id= $_GET['id'];
$deactive_sql = "UPDATE `service` SET `status`=0 WHERE `id` = {$id}";

mysqli_query($db,$deactive_sql);

header("location:../all_service.php");