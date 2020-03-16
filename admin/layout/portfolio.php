<?php
if($_POST['add_category']){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $portfolio_image = $_FILES['photo']['name'];

    $input_error = [];

    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }
    if(empty($category)){
        $input_error['categoryError'] = "category is Required";
    }

    $name_explode = explode(' ',$name);
    $name_end = end($name_explode);
    $explode_image = explode('.',$portfolio_image);
    $imgae_extension = end($explode_image);
    $photo = strtolower($name_end.".".$imgae_extension);

    if(0==count($input_error)){
        $typeCheck = array('jpg','png','jpeg','JPG','PNG','JPEG');
        if(in_array($imgae_extension,$typeCheck)){
            $image_upload_location = "../portfolio/".$photo;
            $upload = move_uploaded_file($_FILES['photo']['tmp_name'],$image_upload_location);
            if($upload){
                $sql = "INSERT INTO `portfolio`(`name`, `category`, `photo`) VALUES ('{$name}','{$category}','{$photo}')";
                $insert = mysqli_query($db,$sql);
                if($insert){
                    header("location:index.php");
                }
            }else{
                $photo_error['photo']="Image upload Failed";
            }
        }else{
            $photo_error['photo']="Please upload a image file";
        }


    }
}


