<?php
if($_POST['add_about']){
    $name = $_POST['name'];
    $about_details = $_POST['about_details'];
    $about_image = $_FILES['photo']['name'];

    $input_error = [];

    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }

    if(empty($about_details)){
        $input_error['about_detailsError'] = "Review Message is Required";
    }
    $name_explode = explode(' ',$name);
    $name_end = end($name_explode);
    $explode_image = explode('.',$about_image);
    $imgae_extension = end($explode_image);
    $photo = strtolower($name_end.".".$imgae_extension);

    if(0==count($input_error)){
        $typeCheck = array('jpg','png','jpeg','JPG','PNG','JPEG');
        if(in_array($imgae_extension,$typeCheck)){
            $image_upload_location = "../about/".$photo;
            $upload = move_uploaded_file($_FILES['photo']['tmp_name'],$image_upload_location);
            if($upload){
                $sql = "INSERT INTO `about`(`name`, `about_details`,`photo`) VALUES ('{$name}','{$about_details}','{$photo}')";
                $insert = mysqli_query($db,$sql);
                if($insert){
                    header("location:all_about.php");
                }
            }else{
                $photo_error['photo']="Image upload Failed";
            }
        }else{
            $photo_error['photo']="Please upload a image file";
        }


    }
}


