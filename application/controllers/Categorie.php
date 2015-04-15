<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {
	
	/*public function index()
	{
		
		$this->load->view("Categorie/allcategorie");

	}*/

	public function information($id)
	{


		$this->load->model("Categorie_model");
		$Prod=$this->Categorie_model->information($id);

		$this->load->view("Categorie/CatProd",
			["prod"=>$Prod]);

	}





}