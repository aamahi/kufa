        <?php
            include "database.php";
            include "mahi/contact_message.php";
        ?>
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>BANGLADESH</span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span>Momtaz Plaza (4th Floor) House#7, Road#4, Dhanmondi, Dhaka-1205</li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span>+88 01751989173</li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>amahi.wp@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <?php
                                    if(isset($_SESSION['success'])):
                                ?>
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <strong><?=$_SESSION['success']?></strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php
                                    endif;
                                    unset($_SESSION['success']);
                                ?>
                                <form action="" method="post">
                                    <input type="text" name="name" placeholder="your name *" value="<?=$name;?>">
                                    <?php
                                    if(isset($input_error['nameError'])):
                                        ?>
                                        <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['nameError']?></p>
                                    <?php
                                    endif;
                                    ?>
                                    <input type="email" name="email" placeholder="your email *" value="<?=$email?>">
                                    <?php
                                    if(isset($input_error['emailError'])):
                                        ?>
                                        <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['emailError']?></p>
                                    <?php
                                    endif;
                                    ?>
                                    <textarea name="message" id="message" placeholder="your message *"><?=$message;?></textarea>
                                    <?php
                                    if(isset($input_error['messageError'])):
                                        ?>
                                        <p class="text-danger font-weight-bolder text-uppercase"> <i class="fa fa-exclamation-circle"></i> <?=$input_error['messageError']?></p>
                                    <?php
                                    endif;
                                    ?>
<!--                                    <button class="btn">SEND</button>-->
                                    <input type="submit" name="send" value="SEND" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>