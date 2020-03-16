<?php
if($_POST['add_service']){
    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $details = $_POST['details'];

    $input_error = [];

    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }
    if(empty($icon)){
        $input_error['iconError'] = "icon is Required";
    }
    if(empty($details)){
        $input_error['detailsError'] = "Service Details is Required";
    }
    if(0==count($input_error)){
        $sql = "INSERT INTO `service`(`name`, `icon`, `details`) VALUES ('{$name}','{$icon}','{$details}')";
        $insert = mysqli_query($db,$sql);
        header("location:all_service.php");
    }
}


