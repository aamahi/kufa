<?php

if (isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $lowercase = preg_match('@[a-z]@',$password);
    $uppercase = preg_match('@[A-Z]@',$password);
    $numbercase = preg_match('@[0-9]@',$password);
    $input_error = [];

    $select_email = "SELECT*FROM `user` WHERE `email`= '{$email}'";
    $email_from_db = mysqli_query($db,$select_email);


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

    if(0==count($input_error)){
        if ($email_from_db->num_rows !=0){
            $row = mysqli_fetch_assoc($email_from_db);
            $password_from_db = $row['password'];
//            echo "<br>";
            $passwordHasing = md5($password);
            $status = $row['status'];
           if ($passwordHasing == $password_from_db){
               if ($status == 1){
//                  print_r($row);
                   $_SESSION['user_all_info'] = $row;
                   header("location:../index.php");

               }else{
                   $input_error['deactive'] = "Your Account is Deactive";
               }
           }else{
               $input_error['passwordError'] = "Password invalid";
           }
        }else{
            $input_error['emailError'] = "Email Address not found";
        }
    }
}


