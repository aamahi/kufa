<?php
$title ="Add Clint";
include_once ('header.php');
include_once ('../database.php');
include_once ('layout/testimonial.php');

?>
    <!-- CONTENT -->
    <!-- ========================================================= -->
    <div class="content">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-sm-12">

                            <form class="form-horizontal form-stripe" action="" method="post" enctype="multipart/form-data">
                                <h6 class="mb-xlg text-center"><b>Add Testimonial</b></h6>
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label"> Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?=$name?>">
                                        <?php
                                        if(isset($input_error['nameError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['nameError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="position" class="col-sm-2 control-label"> Position </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?=$position?>">
                                        <?php
                                        if(isset($input_error['positionError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['positionError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">Review Message</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="review_message" cols="10" rows="10">Review Message</textarea>
                                        <?php
                                        if(isset($input_error['review_messageError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['review_messageError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="photo" class="col-sm-2 control-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="photo" id="photo">
                                        <?php
                                        if(isset($photo_error['photo'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$photo_error['photo']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
<!--                                        <button type="submit" class="btn btn-primary">Add Testimonial</button>-->
                                        <input type="submit" name="add_testimonial" value="Add Testimonial" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
include_once ('footer.php');
?>