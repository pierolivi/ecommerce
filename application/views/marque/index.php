<?php $this->load->view('globals/header'); ?>
<?php $this->load->view('globals/sidebar'); ?>


<div class="row">
  <div class="col-md-8">
    <!--<?php var_dump($marques);?>-->
    <?php foreach ($marques as $cle =>$value):?>
            <div class="col-xs-6 col-lg-4">

      

              <h2><?=$value->nom;?></h2>
              <p><?=$value->description;?></p>
              <p><a class="btn btn-default" href="<?=site_url()?>/Marque/info/<?=$value->idmarque;?>" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          <?php endforeach;?>
         
          </div>
</div>
      

        <?php $this->load->view('globals/footer'); ?>