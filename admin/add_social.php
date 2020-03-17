<?php
$title ="Add social";
include_once ('header.php');
include_once ('layout/social.php');

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
                                <h6 class="mb-xlg text-center"><b>Add social</b></h6>
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
                                    <label for="icon" class="col-sm-2 control-label"> social Icon </label>
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
                                    <label for="link" class="col-sm-2 control-label"> social Link </label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="link" id="link" placeholder="https://www.facebook.com" value="<?=$link?>">
                                        <?php
                                        if(isset($input_error['linkError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['linkError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
<!--                                        <button type="submit" class="btn btn-primary">Add social</button>-->
                                        <input type="submit" name="add_social" value="Add social" class="btn btn-primary">
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