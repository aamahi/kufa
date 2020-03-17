<?php

include_once ('../../database.php');
$id= $_GET['id'];
$delete_sql = "DELETE FROM `contact_message` WHERE `id` = {$id}";

mysqli_query($db,$delete_sql);
header("location:../all_message.php");