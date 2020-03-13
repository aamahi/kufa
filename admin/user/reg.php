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
    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }
    if(empty($username)){
        $input_error['usernameError'] = "User Name is Required";
    }
    if(empty($email)){
        $input_error['emailError'] = "Email is Required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $input_error['emailError'] = "Email Address Invalid";
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

    if(0==count($input_error)){
        $typeCheck = array('jpg','png','jpeg','JPG','PNG','JPEG');
        if(in_array($imgae_extension,$typeCheck)){
            $user_image_upload_location = "../images/user/".$user_image_name;
            
            move_uploaded_file($_FILES['user_image']['tmp_name'],$user_image_upload_location);
           
           $sql = "INSERT INTO `user`(`id`, `name`, `username`, `email`, `status`, `password`, `image`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])";

        }else{
           $input_error['image']="Please upload a image file";
        }
       

    }
}


