<?php
if($_POST['add_social']){
    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $link = $_POST['link'];

    $input_error = [];

    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }
    if(empty($icon)){
        $input_error['iconError'] = "icon is Required";
    }
    if(empty($link)){
        $input_error['linkError'] = "social link is Required";
    }elseif(!filter_var($link, FILTER_VALIDATE_URL)){
        $input_error['linkError'] = "Invalid Social link";
    }
    if(0==count($input_error)){
        $sql = "INSERT INTO `social` (`name`, `icon`, `link`) VALUES ('{$name}','{$icon}','{$link}')";
        $insert = mysqli_query($db,$sql);
        header("location:all_social.php");
    }
}


