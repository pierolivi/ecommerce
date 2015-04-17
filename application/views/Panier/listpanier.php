<?php $this->load->view('globals/header'); ?>
 
<div class="container">
             
    <div class="row">
        <div class="col-md-6">
                <?php $this->load->view('globals/sidebar'); ?>
        </div>    
           <!--<?php var_dump($prod);?>-->

           <h2>Panier <?="(". count($qte).")"?></h2>
            <div class="col-sm-12 col-md-10 col-md-offset-1">

            <?php 
            if (!empty($prod)):?>
            

            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <?php
                        $sommeHT = 0;
                        foreach($prod as $cle =>$value):?>
                        <td class="col-sm-8 col-md-4">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?= base_url();?>assets/images/<?=$value->image?>"
                             style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?=$value->titre?></a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">

                        <a href="<?=site_url('panier/action/ajouter/'.$value->id);?>"><span class="glyphicon glyphicon-menu-up"></a>
                        
                        <!--<input type="number" class="form-control" id="exampleInputEmail1"  value="<?=$qte[$value->id]?>">-->
                        <span><?=$qte[$value->id]?></span>
                        <a href="<?=site_url('panier/action/enlever/'.$value->id);?>"><span class="glyphicon glyphicon-menu-down"></a>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=formatPrix( $value->prix)?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=formatPrix(($value->prix)*($qte[$value->id]))?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span><a href="<?=site_url('panier/action/supprimer/'.$value->id.''); ?>"> Remove</a>
                        </button></td>
                    </tr>
                    <?php $sommeHT+=($value->prix)*($qte[$value->id])?>
                    
                     <?php endforeach;?>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong><?="€ ".$sommeHT?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>TVA 20%</h5></td>
                        <?php $tva=$sommeHT*0.2;?>
                        <td class="text-right"><h5><strong><?="€ ".$tva?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong><?="€ ".$ship=10;?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <?php $total=$sommeHT+ $ship+$tva;?>
                        <td class="text-right"><h3><strong><?="€ ".$total?></strong></h3></td>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>

        <?php else:?>
        <div class="alert alert-info">

          <h2>Panier vide!</h2> 
        </div>
    <?php endif;?>

    <?php $alert=$this->session->flashdata("success_comment");?>
    <?php if(!empty($alert)):?>

        <div class="alert alert-success">
        
            <?= $alert;?> 
       
        </div>
    <?php endif;?>
        </div>
    </div>
</div>

<?php $this->load->view('globals/footer'); ?>