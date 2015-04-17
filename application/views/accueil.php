<?php //$this->load->view('globals/header'); ?>

        <div class="row">

            <?php $this->load->view('globals/sidebar'); ?>
            <!--<?php var_dump($cinqproduits)?>-->
			<!--<?php echo (base_url());?>-->
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php foreach ($slide as $cle =>$value): ?>
                                    
                                        
                                <li data-target="#carousel-example-generic" data-slide-to="<?= $cle ?>" class="active"></li> 
                                    
                                <?php endforeach;?>

                                <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
                            </ol>
                            <div class="carousel-inner">
                                <!--<?php var_dump($slide);?>-->
                                <?php foreach ($slide as $cle =>$value): ?>
                                    <?php if($cle == 0) : ?>
                                    <div class="item active">
                                    <?php else: ?>
                                        <div class="item">
                                    <?php endif; ?>
                                        
                                        <img class="slide-image" src="<?=base_url();?>assets/images/<?=$value->image;?>" 
                                        width="300" height="150"alt="">
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
                	<?php foreach($cinqproduits as $cle =>$value):?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <!--<img src="<?= base_url(); ?>assets/images/<?= $value->image ?>" width="100" height="50"alt="">-->
                            <img src="<?=$value->displayImage();?>"width="100" height="30"alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?="€ ".$value->prix?></h4>
                                <h4><a href="<?=site_url()?>/Produit/information/<?=$value->id;?>"><?=$value->titre?></a>
                                </h4>

                                <p><?=word_limiter($value->description,1)?></p>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>

                                <p><?= "Nombre note ".$Nbnote=$value->Nbnote?></p>
                                <?php $Moyenne=$value->Moyenne?>
                                <?php  if($Moyenne != 0){

                                echo "<p> Moyenne note ".$Moyenne."</p>";
                                }
                                else {echo "Moyenne note 0 <br><br>";}?>
                                
                                <?php for ($i=0;$i<5;$i++){
                                    if($i < $Moyenne){
                                echo '<span class="glyphicon glyphicon-star"></span>';
                                }
                                 else{
                                    echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                    }
                                    
                            }?>
                            </div>
                        </div>
                    </div>

                    <?php endforeach;?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php //$this->load->view('globals/footer'); ?>