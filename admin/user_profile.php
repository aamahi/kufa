<?php
include_once ('header.php');
include_once ('layout/up.php');
?>
    <div class="content">
        <!-- content HEADER -->
        <!-- ========================================================= -->
        <div class="content-header">
            <!-- leftside content header -->
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">User profile</a></li>
                </ul>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--PROFILE-->
                <div>
                    <div class="profile-photo">
                        <img alt="User photo" src="images/user/<?=$_SESSION['user_all_info']['image'];?>">
                    </div>
                    <div class="user-header-info">
                        <h2 class="user-name"><?=$_SESSION['user_all_info']['name'];?></h2>
                        <h5 class="user-position"><?=$_SESSION['user_all_info']['username'];?></h5>
                        <div class="user-social-media">
                            <span class="text-lg"><a href="#" class="fa fa-twitter-square"></a> <a href="#" class="fa fa-facebook-square"></a> <a href="#" class="fa fa-linkedin-square"></a> <a href="#" class="fa fa-google-plus-square"></a></span>
                        </div>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <!--CONTACT INFO-->
                <div class="panel bg-scale-0 b-primary bt-sm mt-xl">
                    <div class="panel-content">
                        <h4 class=""><b>Contact Information</b></h4>
                        <ul class="user-contact-info ph-sm">
                            <li><b><i class="color-primary mr-sm fa fa-envelope"></i></b> <?=$_SESSION['user_all_info']['email'];?></li>
                            <li><b><i class="color-primary mr-sm fa fa-phone"></i></b> <?=$_SESSION['user_all_info']['username'];?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="panel">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal form-stripe" action="" method="post">
                                    <h6 class="mb-xlg text-center"><b>Password Change</b></h6>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="old_password" id="name" value="<?=$old_password;?>" placeholder="Old password">
                                            <?php
                                            if(isset($input_error['old_passwordError'])):
                                                ?>
                                                <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['old_passwordError'];?></p>
                                            <?php
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="new_password" id="username" value="<?=$new_password;?>" placeholder="New Password">
                                            <?php
                                            if(isset($input_error['new_passwordError'])):
                                                ?>
                                                <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['new_passwordError'];?></p>
                                            <?php
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password3" class="col-sm-2 control-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="confirm_password" id="password3" value="<?=$confirm_password;?>" placeholder="Confirm Password">
                                            <?php
                                            if(isset($input_error['confirm_passwordError'])):
                                                ?>
                                                <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['confirm_passwordError'];?></p>
                                            <?php
                                            endif;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
<!--                                            <button type="submit" class="btn btn-primary">Password Change</button>-->
                                            <input type="submit" name="password_change" class="btn btn-primary" value="Change Password">
                                        </div>
                                    </div>
                                </form>
                            </div>
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