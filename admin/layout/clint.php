<?php

if($_POST['add_clint']){
    $company_name = $_POST['company_name'];
    $company_logo = $_FILES['company_logo'];
    $clint_error = [];
    $all_clint = "SELECT * FROM `clint` WHERE `company_name`= '{$company_name}'";
    $query = mysqli_query($db,$all_clint);
//    echo $query->num_rows;
    if(empty($company_name)){
        $clint_error['company_name'] = "Company Name is Required";
    }elseif(($query->num_rows)!=0){
        $clint_error['company_name'] = "Company Name already used";
    }
    if (empty($company_logo)){
        $clint_error['company_logo'] = "Company Logo is Required";
    }
    $company_logo_name = $_FILES['company_logo']['name'];

    $company_name_explode = explode(' ',$company_name);
    $company_name_join_lowercase = strtolower(join('',$company_name_explode));

    $company_logo_explode = explode('.',$company_logo_name);
    $company_logo_extension = end($company_logo_explode);

    $logo = "{$company_name_join_lowercase}.{$company_logo_extension}";


    if (count($clint_error)==0){
        $allowed_type = [
            'jpg','png','jpeg'
        ];
        if(in_array($company_logo_extension,$allowed_type)){
            $upload_location =  "../clint/$logo";
            $upload = move_uploaded_file($_FILES['company_logo']['tmp_name'],$upload_location);
            if($upload){
                $sql = "INSERT INTO `clint`(`company_name`,`company_logo`) VALUE('{$company_name}','{$logo}')";
                $insert = mysqli_query($db,$sql);
//                echo "OK";
//                die();
//                if($insert){
                    header("location:all_clint.php");
//                }
            }else{
                $clint_error['company_logo'] = "Logo uploaded Failed";
            }
        }else{
            $clint_error['company_logo'] = "Logo must to be image";
        }

    }
}