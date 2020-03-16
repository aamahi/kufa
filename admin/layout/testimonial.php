<?php
if($_POST['add_testimonial']){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $review_message = $_POST['review_message'];
    $clint_image = $_FILES['photo']['name'];

    $input_error = [];

    if(empty($name)){
        $input_error['nameError'] = "Name is Required";
    }
    if(empty($position)){
        $input_error['positionError'] = "Position is Required";
    }
    if(empty($review_message)){
        $input_error['review_messageError'] = "Review Message is Required";
    }
    $explode_review_message = explode(' ',$review_message);
    $review_message_end = end($explode_review_message);
    $explode_image = explode('.',$clint_image);
    $imgae_extension = end($explode_image);
    $photo = strtolower($review_message_end.".".$imgae_extension);

    if(0==count($input_error)){
        $typeCheck = array('jpg','png','jpeg','JPG','PNG','JPEG');
        if(in_array($imgae_extension,$typeCheck)){
            $image_upload_location = "../testimonial/".$photo;
            $upload = move_uploaded_file($_FILES['photo']['tmp_name'],$image_upload_location);
            if($upload){
                $sql = "INSERT INTO `testimonial`(`name`, `position`, `review_message`,`photo`) VALUES ('{$name}','{$position}','{$review_message}','{$photo}')";
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


