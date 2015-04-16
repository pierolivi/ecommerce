<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Panier extends CI_Controller
{

	public function index()
	{
		$panier = unserialize(get_cookie('cadie'));
		var_dump($panier);
		if (!empty($panier)){

		$this->load->model('Panier_model');
		
		$prodPanier = $this->Panier_model
		->ListProd(array_keys($panier)); //array_keys: recupere les cles de panier
		//var_dump($prodPanier);
		
		//$quantite=(array_values($panier));
		//var_dump($quantite);
		}
		$this->load->view("Panier/listpanier",
			["prod"=>$prodPanier,
			"qte"=>$panier
			]);
	}


	public function ajout()
	{

	//var_dump($_POST);
		if (empty($this->input->post("Nb")) ||
			empty($this->input->post("idprod")))
			{
		redirect ("Panier");
			}

		$idProd=$this->input->post("idprod");
		$Nb=$this->input->post("Nb");

		$panier=unserialize(get_cookie("cadie"));
		if (empty($panier))
		{
			$panier=[];
		}

		if (isset($panier[$idProd]))
		{
			$panier[$idProd]=intval($panier[$idProd])+
			intval($Nb);

		}
		else
		{
			$panier[$idProd]=intval($Nb);
		}
		
		set_cookie("cadie",serialize($panier),time()+172800);//2jours
		//var_dump(unserialize(get_cookie("cadie")));

		redirect("Panier");





	}


}