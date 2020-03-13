<?php 
$title = "Signin";
include_once('header.php');
include_once('login.php');

?>
<div class="wrap">
    <!-- page BODY -->
    <!-- ========================================================= -->
    <div class="page-body animated slideInDown">
        <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
        <!--LOGO-->
        <div class="logo">
            <img alt="logo" src="../images/logo/s_logo.png" />
        </div>
        <div class="box">
            <!--SIGN IN FORM-->
            <div class="panel mb-none">
                <div class="panel-content bg-scale-0">
                    <form action="" method="post">
                        <div class="form-group mt-md">
                            <?php
                            if(isset($input_error['deactive'])):
                                ?>
                                <h4 class="text-danger text-center font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['deactive']?></h4>
                            <?php
                            endif;
                            ?>
                            <span class="input-with-icon">
                                <input type="email" class="form-control" name="email" value="<?php if(isset($email)){echo $email;}?>" placeholder="Email">
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
                                <input type="password" class="form-control" name="password" placeholder="Password" value="<?php if(isset($password)){echo $password;}?>">
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
                            <div class="checkbox-custom checkbox-primary">
                                <input type="checkbox" id="remember-me" value="option1" checked>
                                <label class="check" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Sign in" name = "signin">
                            <!-- <a href="../index.php" class="btn btn-primary btn-block">Sign in</a> -->
                        </div>
                        <div class="form-group text-center">
                            <hr/>
                             <span>Don't have an account?</span>
                            <a href="register.php" class="btn btn-block mt-sm">Register</a>
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