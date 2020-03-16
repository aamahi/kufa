<?php
$title ="Add service";
include_once ('header.php');
include_once ('layout/service.php');

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
                                <h6 class="mb-xlg text-center"><b>Add service</b></h6>
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
                                    <label for="icon" class="col-sm-2 control-label"> Service Icon </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="icon" id="icon" placeholder="icon (ex : fa-user)" value="<?=$icon?>">
                                        <?php
                                        if(isset($input_error['iconError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['iconError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label">Service Details</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="details" cols="10" rows="10">Service Details</textarea>
                                        <?php
                                        if(isset($input_error['detailsError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['detailsError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
<!--                                        <button type="submit" class="btn btn-primary">Add service</button>-->
                                        <input type="submit" name="add_service" value="Add service" class="btn btn-primary">
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