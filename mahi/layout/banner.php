            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$about['name'];?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$about['about_details'];?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <?php
                                            foreach ($socials as $social):
                                                if($social['status']==1):
                                        ?>
                                                <li><a href="<?=$social['link'];?>"><i class="fab <?=$social['icon'];?>"></i></a></li>

                                        <?php
                                                endif;
                                            endforeach;
                                        ?>
                                    </ul>
                                </div>
                                <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">Download CV</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-lg-block">
                            <div class="banner-img text-right">
                                <img src="mahi/img/banner/banner_imgn.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="mahi/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>