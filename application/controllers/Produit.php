<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller
{



	public function information ($idProduit) //parametre de information/1
	{
		//var_dump($idProduit);
		$this->load->model("Produit_model");
		$unproduit=$this->Produit_model->
		findProduitById($idProduit);
		if (empty($unproduit))
		{
			show_404();
		}

		$this->load->helper("form");
		$this->load->library('form_validation');

		$this->form_validation->set_rules
		('auteur','auteur','required|min_length[2]');
		$this->form_validation->set_rules
		('note','note','required|greater_than_equal_to[0]|less_than_equal_to[5]');
		$this->form_validation->set_rules
		('descrip','comment','required');

		//$this->form_validation->set_rules
		//('auteur',"votre nom",'required');
		$this->load->model("Comment_model");
		 if ($this->form_validation->run() == TRUE)
                {
                	
                        
                   	//var_dump( $this->input->post());
                   	$dataToInsert = [
                    'auteur' => $this->input->post('auteur'),
                    'contenu' => $this->input->post('descrip'),
                    'note' => $this->input->post('note'),
                    'produit_id' => $idProduit,
                    'datecomment'=>date("Y-m-d h:i:s")                     	
                    ];
                    //var_dump($_POST);
                    $this->Comment_model->InserComment($dataToInsert); 

                    

                	$this->session->set_flashdata("success_comment",
                		"Votre commentaire a bien ete ajoute");

                	redirect("produit/information/".$idProduit);


            }    

		
    $comments=$this->Comment_model->AfficherComment($idProduit);
	$average=$this->Produit_model->Average($idProduit);	

		$this->load->view("produit/unproduit",
			["produitid"=>$unproduit,
			"commentaire"=>$comments,
			"media"=>$average
			]);
	
	}
}