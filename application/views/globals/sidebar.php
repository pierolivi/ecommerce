<?php $sidebarCategorie=$this->Categorie_model->getCategorie();
	//var_dump($sidebarCategorie);
?>
<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">

		<?php foreach ($sidebarCategorie as $cle => $value):?>

		<a href="<?=site_url()?>/Categorie/information/<?=$value->idcat;?>" 
		class="list-group-item">Categorie <?=$value->nom?></a>
	<?php endforeach ;?>
        <!--<a href="#" class="list-group-item">Category 1</a>
        <a href="#" class="list-group-item">Category 2</a>
        <a href="#" class="list-group-item">Category 3</a>-->
    </div>
</div>