            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                <?php
                                    foreach ($testimonials as $testimonial):
                                        if ($testimonial['status']==1):
                                ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img width="90" class="rounded-circle" " src="testimonial/<?=$testimonial['photo']?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$testimonial['review_message'];?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$testimonial['name']?></h5>
                                            <span><?=$testimonial['position']?></span>
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
                </div>
            </section>