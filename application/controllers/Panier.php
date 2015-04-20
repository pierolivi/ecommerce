<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Panier extends CI_Controller
{
	
	public function index()
	{
		$panier = unserialize(get_cookie('cadie'));
		$this->load->helpers("monsuper");//fonction cree par nous:formatPrix(),modif de set_cookie

		var_dump($panier);

		$prodPanier = [];
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
		//set_cookie("cadie",$panier); //notre fonction
		//var_dump(unserialize(get_cookie("cadie")));

		redirect("Panier");





	}

	public function action($choix, $id)
	{
		//echo $choix;
		//$this->load->model('Panier_model');
		$panier = unserialize(get_cookie('cadie'));



		if ($choix == "supprimer"){
		//echo $id;
					
			if (isset($panier[$id]))
			{
			//echo "prod existe: ".$panier[$id];
			unset($panier[$id]); //effacer une ligne id
			
			
			//var_dump($panier);

			$this->session->set_flashdata("success_comment",
                		"Votre produit ".$id." a bien ete supprime");
			
				//redirect("panier");

			}
		}
		if ($choix == "ajouter"){
			//var_dump($panier);
			$ajout=$panier[$id]+1;

			$panier[$id]=intval($ajout);

			
			
			
		}

		if ($choix == "enlever"){
			//var_dump($panier);
			$enlever=$panier[$id]-1;

			$panier[$id]=intval($enlever);

			
			
			
		}

		set_cookie("cadie",serialize($panier),time()+172800);
		//set_cookie("cadie",$panier); //notre fonction

		redirect("Panier");
	}




}