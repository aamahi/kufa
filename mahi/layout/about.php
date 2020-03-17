            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img" style="border:15px solid teal">
                                <img style="padding: 15px" width="535" src="admin/images/user/asif.jpg" title="me-01" alt="me-01">
                            </div>
                        </div>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                                <h2>About Me</h2>
                            </div>
                            <div class="about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit deserunt, quas
                                    quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores maxime
                                    blanditiis culpa vitae velit. Numquam!</p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <?php
                                foreach ($educations as $education):
                                    if($education['status']==1):
                            ?>
                                    <div class="education">
                                        <div class="year"><?=$education['year'];?></div>
                                        <div class="line"></div>
                                        <div class="location">
                                            <span><?=$education['degree_name'];?></span>
                                            <div class="progressWrapper">
                                                <div class="progress">
                                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['persentage'];?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                            <?php
                                    endif;
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </section>