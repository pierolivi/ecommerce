<?php $this->load->view('globals/header'); ?>

        <div class="row">

            <?php $this->load->view('globals/sidebar'); ?>
            <!--<?php var_dump($mesprod)?>-->
			<!--<?php echo (base_url());?>-->
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                       <!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>-->
                    </div>

                </div>

                <div class="row">
                	<?php foreach($mesprod as $cle =>$value):?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <!--<img src="<?= base_url(); ?>assets/images/<?= $value->image ?>" width="100" height="50"alt="">-->
                            <img src="<?=$value->displayImage();?>"width="100" height="50"alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?="€ ".$value->prix?></h4>
                                <h4><a href="<?=base_url();?>index.php/Produit/information/<?=$value->id?>"><?=$value->titre?></a>
                                </h4>

                                <p><?=$value->description?></p>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php endforeach;?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php $this->load->view('globals/footer'); ?>