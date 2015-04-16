<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		//test
		//set_cookie("test","ceci est un test",10);
		//set_cookie("test","ceci est un test",time()+172800);//J+seconde
		//var_dump(get_cookie("test"));

		//$this->load->helper('url'); charge uniquement 
		//pour cette methode
		//$prenom="pierre";
		//$this->load->view("accueil",
			//["firstname"=> $prenom]);
		$this->load->model("Produit_model");
		
		$produits=$this->Produit_model->findLimit(5);
		$Slides=$this->Produit_model->FindBestSlide(4);
		//$this->Produit->findLimit();
		$this->load->helper("text");  //character_limiter
		

		


		$this->load->view("accueil",	//je vais dans views/accueil.php
			["cinqproduits"=>$produits,
			"slide"=>$Slides
			]);

	}
}