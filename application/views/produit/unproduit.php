<?php $this->load->view('globals/header'); ?>
    <?php $this->load->view('globals/sidebar'); ?>
            <div class="col-md-9">

</nav>
<!--<?php var_dump($produitid);?>-->
    <!-- Page Content -->
    <div class="container">
                <div class="thumbnail">
                <img class="img-responsive" src="<?=$produitid->displayImage();?>" alt="">
                    <div class="caption-full">
                        <h4 class="pull-right"><?="€ ".$produitid->prix;?></h4>
                        <h4><a href="#"><?=$produitid->titre;?></a>
                        </h4>
                        <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p><?=$produitid->description;?></p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <!--<?php var_dump($media->Moyenne)?>-->
                        
                        <p>
                           <?php for($i=0;$i<5;$i++)
                            {
                                if($i < $media->Moyenne)
                                    {

                                echo "<span class='glyphicon glyphicon-star'></span>";
                                    }
                            
                                else{

                                echo'<span class="glyphicon glyphicon-star-empty"></span>';
                                    }
                           }?>
                            <!--<span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>-->
                            <?= $media->Moyenne?>
                        
                        </p>
                    </div>

                        <?= form_open("Panier/ajout");?>
                        <div class="form-group">
                        <input class="form-control" type="number" name="Nb" placeholder="quantite" value="">
                    </div>
                        <div class="form-group">
                        <input class="form-control" type="hidden" name="idprod" placeholder="" value="<?=$produitid->id;?>">
                    </div>

                        <?= form_submit('ajout','ajouter');?>
                    <?=form_close();?>
                    <!--<?php var_dump($_POST)?>-->
                
                </div>
                <?= form_open("Produit/information/".$produitid->id);?>
                <div class="form-group">
                    <input class="form-control" type="text" name="auteur" placeholder="auteur" value="<?=set_value('auteur');?>">
                </div>

                <div class="form-group">
                    <input class="form-control" type="number" name="note" placeholder="Votre note" value="<?=set_value('note');?>">
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="text" name="descrip" placeholder="Commentaire" value="<?=set_value('descrip');?>"></textarea>
                </div>

                <?= form_submit('envoi','valider');?>
                <?=form_close();?>
                <!--<?=validation_errors();?>-->
                <?=form_error("auteur","<div class='form-control'>","</div>");?>
                <?=form_error("note","<div class='form-control'>","</div>");?>
                <?=form_error("descrip","<div class='form-control'>","</div>");?>
                
                <?=$this->session->flashdata("success_comment");?>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <!--<?php var_dump($commentaire)?>-->
                        <p><?= count($commentaire)." commentaires"?></p>
                        <?php $noteT=0;?>
                        
                        <?php foreach($commentaire as $cle=>$value):?>

                        <p><?= $value->auteur?></p>
                        <p><?= $value->contenu?></p>
                        <p><?= $value->datecomment?></p>
                        <div class="col-md-12">
                            <?php $note=$value->note?>
                            <?php for($i=0;$i<5;$i++)
                            {
                                if($i <$note)
                                    {

                                echo "<span class='glyphicon glyphicon-star'></span>";
                                    }
                            
                                else{

                                echo'<span class="glyphicon glyphicon-star-empty"></span>';
                                    }
                           }?>
                            <br>
                            <span class="pull-right">10 days ago</span>

                            <?php $noteT=$noteT+$note;?>
                            

                        </div>
                        <?php endforeach;?>

                        

                    <?php if(count($commentaire)!= 0){

                    $Moyenne=$noteT/count($commentaire);

                    echo "Moyenne note ".$Moyenne."<br>";

                        for($i=0;$i<5;$i++)
                            {
                                if($i < $Moyenne)
                                    {

                                echo "<span class='glyphicon glyphicon-star'></span>";
                                    }
                            
                                else{

                                echo'<span class="glyphicon glyphicon-star-empty"></span>';
                                    }
                            }
                        }
                        else{ 
                            echo "Moyenne note 0";

                        }?>
                        
                    </div>

                    <hr>

                    
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    

      <?php $this->load->view('globals/footer'); ?>
