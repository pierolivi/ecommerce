<?php

function form_create($action,$input=[])
{

	$formulaire=form_open($action); //form_open de codeigneter

	foreach ($input as $cle => $value)
	{
		if($value=="text")
		{
			$formulaire.="<div class='form-group'>";
			$data=["class="=>"form-control",
			"name"=>$cle,
			"placeholder"=>$cle,
			"value"=>set_value($cle) //je garde les valeurs apres rafraichi page
			];
			$formulaire.=form_input($data); //concatenation
			$formulaire.=form_error($cle,'<div class="alert alert-danger">','</div>');
			$formulaire.="</div>";

		}
		else if($value=="textarea")
		{
			$formulaire.="<div class='form-group'>";
			$data=["class="=>"form-control",
			"name"=>$cle,
			"placeholder"=>$cle,
			"value"=>set_value($cle)
			];
			$formulaire.=form_textarea($data); //concatenation
			$formulaire.=form_error($cle,'<div class="alert alert-danger">','</div>');
			$formulaire.="</div>";
			
		}

		else if($value=="submit")
		{
			$formulaire.=form_submit($cle,$cle,"class='btn btn-primary'");

		}



	}


	$formulaire.=form_close();
	return $formulaire;
}
