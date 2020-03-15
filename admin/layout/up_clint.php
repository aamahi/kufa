<?php

if($_POST['update_clint']){
    $company_name = $_POST['company_name'];
    $company_logo = $_FILES['company_logo']['name'];
    $clint_error = [];

    $all_clint = "SELECT * FROM `clint` WHERE `company_name`= '{$company_name}'";
    $query = mysqli_query($db,$all_clint);

//    echo $query->num_rows;

        if (($query->num_rows) != 0) {
            if ($fetch_data['company_name'] == $company_name) {
                $company_name = $_POST['company_name'];
            } elseif (($query->num_rows) != 0) {
                $clint_error['company_name'] = "Company Name already Used";
            }
        }
            $company_logo_name = $_FILES['company_logo']['name'];
            $company_name_explode = explode(' ',$company_name);
            $company_name_join_lowercase = strtolower(join('',$company_name_explode));

            $company_logo_explode = explode('.',$company_logo_name);
            $company_logo_extension = end($company_logo_explode);

            $logo = "{$company_name_join_lowercase}.{$company_logo_extension}";
        if(empty($_FILES['company_logo']['name'])){
            $update_only_name = "UPDATE `clint` SET `company_name`= '{$company_name}' WHERE `id` ={$id}";
            $query = mysqli_query($db,$update_only_name);
            header("location:../all_clint.php");
        }else{
            $unlink = $fetch_data['company_logo'];
            unlink("../clint/$unlink");
            $allowed_type = [
                'jpg','png','jpeg'
            ];
            if(in_array($company_logo_extension,$allowed_type)){
                $upload_location =  "../clint/$logo";
                $upload = move_uploaded_file($_FILES['company_logo']['tmp_name'],$upload_location);
                if($upload){
                    $sql = "UPDATE `clint` SET `company_name`= '{$company_name}', `company_logo`= '{$logo}' WHERE `id` ={$id}";
                    $insert = mysqli_query($db,$sql);
                    if($insert){
                        header("location:../all_clint.php");
                    }
                }else{
                    $clint_error['company_logo'] = "Logo uploaded Failed";
                }
            }else{
                $clint_error['company_logo'] = "Logo must to be image";
            }

        }
}
