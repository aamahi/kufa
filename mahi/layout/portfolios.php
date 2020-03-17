            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            foreach ($portfolios as $portfolio):
                                if($portfolio['status']==1):
                        ?>
                                <div class="col-lg-4 col-md-6 pitem">
                                    <div class="speaker-box">
                                        <div class="speaker-thumb">
                                            <img src="portfolio/<?=$portfolio['photo']?>" alt="img">
                                        </div>
                                        <div class="speaker-overlay">
                                            <span><?=$portfolio['category']?></span>
                                            <h4><a href="portfolio-single.html"><?=$portfolio['name']?></a></h4>
                                            <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                endif;
                            endforeach;
                        ?>
                    </div>
                </div>
            </section>