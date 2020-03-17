<?php
if($_POST['password_change']){
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $lowercase = preg_match('@[a-z]@',$new_password);
    $uppercase = preg_match('@[A-Z]@',$new_password);
    $numbercase = preg_match('@[0-9]@',$new_password);

    $confirm_lowercase = preg_match('@[a-z]@',$confirm_password);
    $confirm_uppercase = preg_match('@[A-Z]@',$confirm_password);
    $confirm_numbercase = preg_match('@[0-9]@',$confirm_password);

    $old_password_db = $_SESSION['user_all_info']['password'];
    $input_error = [];

    if(empty($old_password)){
        $input_error['old_passwordError'] = "Password is Required";
    }elseif(md5($old_password) != $old_password_db){
        $input_error['old_passwordError'] = "Password dosen't metch";
    }else{
        if(empty($new_password)){
            $input_error['new_passwordError'] = "Password is Required";
        }elseif(strlen($new_password)<8){
            $input_error['new_passwordError'] = "Password Must to be 8 digit";
        }elseif(!$lowercase | !$uppercase | !$numbercase){
            $input_error['new_passwordError'] = "Please gave a Strong Password (A-Z,a-z,0-9)";
        }else{
            if(empty($confirm_password)){
                $input_error['confirm_passwordError'] = "Password is Required";
            }elseif(strlen($confirm_password)<8){
                $input_error['confirm_passwordError'] = "Password Must to be 8 digit";
            }elseif(!$confirm_lowercase | !$confirm_uppercase | !$confirm_numbercase){
                $input_error['confirm_passwordError'] = "Please gave a Strong Password (A-Z,a-z,0-9)";
            }elseif($confirm_password != $new_password){
                $input_error['confirm_passwordError'] = "Confirm Password dosen't match";
            }else{
                $id = $_SESSION['user_all_info']['id'];
                $confirm_password_hasing = md5($confirm_password);

                $update_password ="UPDATE `user` SET `password`= '{$confirm_password_hasing}' WHERE `id` = {$id}";
//                echo $update_password;
//                die();
                mysqli_query($db,$update_password);
                header('location:index.php');
            }
        }
    }
}


