<?php
if($_POST['send']){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message= $_POST['message'];

    $input_error = [];

    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }

    if(empty($email)){
        $input_error['emailError'] = "Email is Required";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $input_error['emailError'] = "Email Address Invalid";
    }
    if(empty($message)){
        $input_error['messageError'] = "messageis Required";
    }
    if(0==count($input_error)){
          $sql = "INSERT INTO `contact_message`(`name`,`email`,`message`) VALUES ('{$name}','{$email}','{$message}')";
          $insert = mysqli_query($db,$sql);
          $_SESSION['success']="Thank you !";
          header("location:index.php#contact");

    }
}


