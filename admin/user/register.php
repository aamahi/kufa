<?php 
$title = "Register";
include_once('header.php');
include_once('../../database.php');

include_once('reg.php');
?>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="../images/logo/s_logo.png"/>
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form action ="" method="post" enctype = "multipart/form-data">
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?=$name?>">
                                <i class="fa fa-user"></i>
                            </span>
                            <?php 
                                if(isset($input_error['nameError'])):
                            ?>
                                    <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['nameError']?></p>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="text" class="form-control" name="username" placeholder="User Name" value=<?=$username?>>
                                <i class="fa fa-user"></i>
                            </span>
                            <?php 
                                if(isset($input_error['usernameError'])):
                            ?>
                                    <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['usernameError']?></p>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group mt-md">
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$email?>">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <?php 
                                if(isset($input_error['emailError'])):
                            ?>
                                    <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['emailError']?></p>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?=$password?>">
                                <i class="fa fa-key"></i>
                            </span>
                             <?php 
                                if(isset($input_error['passwordError'])):
                            ?>
                                    <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['passwordError']?></p>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?=$confirm_password?>">
                                <i class="fa fa-key"></i>
                            </span>
                             <?php 
                                if(isset($input_error['confirm_passwordError'])):
                            ?>
                                    <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['confirm_passwordError']?></p>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <span class="input-with-icon">
                                <input type="file" class="form-control" name="user_image">
                                <i class="fa fa-image"></i>
                            </span>
                            <?php 
                                if(isset($input_error['image'])):
                            ?>
                                    <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['image']?></p>
                            <?php
                                endif;
                            ?>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="terms" value="option1">
                                <label class="check" for="terms">I agree </label>  to the <a href="#">Terms and Conditions</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- <a href="index.html" class="btn btn-primary btn-block">Register</a> -->
                            <input type="submit" class="btn btn-primary btn-block" value="Register" name = "register">
                        </div>
                        <div class="form-group text-center">
                            Have an account?, <a href="signin.php">Sign In</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
    </div>
</div>
<?php 
include_once('footer.php');
?>