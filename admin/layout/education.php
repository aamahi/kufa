<?php
if($_POST['add_education']){
    $degree_name = $_POST['degree_name'];
    $year = $_POST['year'];
    $persentage = $_POST['persentage'];

    $input_error = [];

    if(empty($degree_name)){
        $input_error['degreenameError'] = "Degree Name is Required";
    }
    if(empty($year)){
        $input_error['yearError'] = "year is Required";
    }
    if(empty($persentage)){
        $input_error['persentageError'] = "persentage is Required";
    }

    if(0==count($input_error)){

         $sql = "INSERT INTO `education`(`degree_name`, `year`, `persentage`) VALUES ('{$degree_name}','{$year}','{$persentage}')";
         $insert = mysqli_query($db,$sql);
         header("location:about.php");

    }
}


