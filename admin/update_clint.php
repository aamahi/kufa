<?php

    $id = $_GET['id'];
    $img = $_GET['img'];
    $title ="Update Clint";
    include_once ('header.php');

    include_once ('../database.php');
    $clint_id_data = "SELECT * FROM `clint` WHERE `id` = $id";
    $clint_query = mysqli_query($db,$clint_id_data);
    $fetch_data = mysqli_fetch_assoc($clint_query);

    include_once ('layout/up_clint.php')
?>
    <div class="content">
    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-columns" aria-hidden="true"></i><a href="#">Update Clint</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    <div class="row animated fadeInUp">
        <!--STRIPE-->
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal form-stripe" action="" method="post" enctype="multipart/form-data">
                                <h6 class="mb-xlg text-center text-center"><b>Update Clint</b></h6>
                                <div class="form-group">
                                    <label for="name" class="col-sm-4 control-label">Company Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" name="company_name" value="<?=$fetch_data['company_name'];?>">
                                        <?php
                                        if(isset($clint_error['company_name'])):
                                            ?>
                                            <p class="text-bold text-danger"> <i class="fa fa-exclamation-circle"></i> <?=$clint_error['company_name']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company_logo" class="col-sm-4 control-label">Company old Logo</label>
                                    <div class="col-sm-8">
                                        <img src="../clint/<?=$fetch_data['company_logo'];?>" width="225" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company_logo" class="col-sm-4 control-label">Company Logo</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" id="company_logo" name="company_logo">
                                        <?php
                                        if(isset($clint_error['company_logo'])):
                                            ?>
                                            <p class="text-bold text-danger"> <i class="fa fa-exclamation-circle"></i> <?=$clint_error['company_logo']?></p>
                                        <?php
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="col-sm-offset-4 col-sm-8">
                                    <!--                                            <button type="submit" class="">Add Clint</button>-->
                                    <input type="submit" class="btn btn-primary" name="update_clint" value="Update Clint">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>


<?php
include_once ('footer.php');
?>

