<?php $this->load->view('globals/header'); ?>
 
<div class="container">
             
    <div class="row">
        <div class="col-md-6">
                <?php $this->load->view('globals/sidebar'); ?>
         </div>   
           <!--<?php var_dump($prod);?>-->

           
            <div class="col-sm-12 col-md-10 col-md-offset-1">

    
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

                        <input type="number" class="form-control" id="exampleInputEmail1" value="<?=$qte[$value->id]?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?= $value->prix?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=($value->prix)*($qte[$value->id])?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                     <?php endforeach;?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong><?="€".$sommeHT+=($value->prix)*($qte[$value->id])?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>€6.94</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>€31.53</strong></h3></td>
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
           
        
        </div>
    </div>
</div>

<?php $this->load->view('globals/footer'); ?>