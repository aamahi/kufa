            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                        <?php
                            foreach ($select_clint_query as $clint):
                                if ($clint['status']==1):
                        ?>
                                    <div class="col-xl-2">
                                        <div class="single-brand">
                                            <img width="105" src="clint/<?=$clint['company_logo'];?>" alt="img">
                                        </div>
                                    </div>
                        <?php
                                endif;
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>