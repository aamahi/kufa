<?php
if($_POST['register']){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $user_image = $_FILES['user_image'];

    $lowercase = preg_match('@[a-z]@',$password);
    $uppercase = preg_match('@[A-Z]@',$password);
    $numbercase = preg_match('@[0-9]@',$password);

    $input_error = [];

    $select_username = "SELECT*FROM `user` WHERE `username`= '{$username}'";
    $user_name_from_db = mysqli_query($db,$select_username);

    $select_email = "SELECT*FROM `user` WHERE `email`= '{$email}'";
    $email_from_db = mysqli_query($db,$select_email);


    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }
    if(empty($username)){
        $input_error['usernameError'] = "User Name is Required";
    }elseif($user_name_from_db->num_rows !=0){
        $input_error['usernameError'] = "Username is already used";
    }
    if(empty($email)){
        $input_error['emailError'] = "Email is Required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $input_error['emailError'] = "Email Address Invalid";
    }elseif($email_from_db->num_rows !=0){
        $input_error['emailError'] = "Email is already used";
    }
    if(empty($password)){
        $input_error['passwordError'] = "Password is Required";
    }elseif(!$lowercase | !$uppercase | !$numbercase){
        $input_error['passwordError'] = "Please gave a Strong Password (A-Z,a-z,0-9)";
    }elseif(!strlen($password)>=8){
        $input_error['passwordError'] = "Password Must to be 8 digit";
    }

    if(empty($confirm_password)){
        $input_error['confirm_passwordError'] = "Password is Required";
    }elseif(!strlen($confirm_password)>=8){
        $input_error['confirm_passwordError'] = "Password Must to be 8 digit";
    }elseif(!$lowercase | !$uppercase | !$numbercase){
        $input_error['confirm_passwordError'] = "Please gave a Strong Password (A-Z,a-z,0-9)";
    }elseif($confirm_password != $password){
        $input_error['confirm_passwordError'] = "Confirm Password dosen't match";
    }
    if(empty($user_image)){
        $input_error['image']="Please upload a photo";
    }

    $original_image = $user_image['name'];
    $explode_image = explode('.',$original_image);
    $imgae_extension = end($explode_image);
    $user_image_name = "{$username}.{$imgae_extension}";
    $password_hasing = md5($confirm_password);

    if(0==count($input_error)){
        $typeCheck = array('jpg','png','jpeg','JPG','PNG','JPEG');
        if(in_array($imgae_extension,$typeCheck)){
            $user_image_upload_location = "../images/user/".$user_image_name;
            
            $upload = move_uploaded_file($_FILES['user_image']['tmp_name'],$user_image_upload_location);
            if($upload){
                $sql = "INSERT INTO `user`(`name`, `username`, `email`,`password`, `image`) VALUES ('{$name}','{$username}','{$email}','{$password_hasing}','{$user_image_name}')";
                $insert = mysqli_query($db,$sql);
                if($insert){
                    header("location:signin.php");
                }
            }else{
            $input_error['image']="Image upload Failed";
            }
        }else{
            $input_error['image']="Please upload a image file";
        }
       

    }
}


