            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
                        <?php
                            foreach ($service as $services):
                                if ($services['status']==1):
                        ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                    <i class="fab <?=$services['icon'];?>"></i>
                                    <h3><?=$services['name'];?></h3>
                                    <p>
                                        <?=$services['details'];?>
                                    </p>
                                </div>
                            </div>
                        <?php
                                endif;
                            endforeach;
                        ?>
					</div>
				</div>
			</section>