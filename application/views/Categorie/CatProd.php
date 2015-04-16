<?php $this->load->view('globals/header'); ?>

        <div class="row">

            <?php $this->load->view('globals/sidebar'); ?>
            <!--<?php var_dump($catprod)?>
      <!--<?php echo (base_url());?>-->
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                       
                    </div>

                </div>

                <div class="row">
                  <?php foreach($catprod as $cle =>$value):?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <!--<img src="<?= base_url(); ?>assets/images/<?= $value->image ?>" width="100" height="50"alt="">-->

                            <img src="<?=base_url(); ?>assets/images/<?= $value->image;?>"width="100" height="50"alt="">

                            <div class="caption">
                                <h4 class="pull-right"><?="€ ".$value->prix?></h4>

                                <!--<h4><a href="<?=base_url();?>index.php/Categorie/information/<?=$value->id?>"><?=$value->titre?></a>
                                </h4>-->
                                <p><?=$value->titre?></p>
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