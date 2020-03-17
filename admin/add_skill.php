<?php
$title ="Add Education";
include_once ('header.php');
include_once ('layout/education.php');

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
                                <h6 class="mb-xlg text-center"><b>Add Education</b></h6>
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label"> Name of Degree</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="degree_name" id="name" placeholder="Name of Degree" value="<?=$degree_name?>">
                                        <?php
                                        if(isset($input_error['degreenameError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['degree_nameError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="year" class="col-sm-2 control-label"> Passing year </label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="year" id="year" placeholder="Passing Year" value="<?=$year?>">
                                        <?php
                                        if(isset($input_error['yearError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['yearError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="persentage" class="col-sm-2 control-label"> perfament persentage </label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="persentage" id="persentage" placeholder="Perfamence persentage" value="<?=$persentage?>">
                                        <?php
                                        if(isset($input_error['persentageError'])):
                                            ?>
                                            <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['persentageError']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
<!--                                        <button type="submit" class="btn btn-primary">Add Education</button>-->
                                        <input type="submit" name="add_education" value="Add Education" class="btn btn-primary">
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