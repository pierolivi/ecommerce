<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Marque extends CI_Controller
{



public function index ()
{


	
	$this->load->model("Marque_model");
	$marque=$this->Marque_model->
	AfficherMarque();
	//var_dump($marque);

	

	//$this->load->view("marque/index");
	$this->load->view("marque/index",
		["marques"=>$marque]);

	}	
	
public function info ($idinfo)
{
	//var_dump($idinfo);
	$this->load->model("Marque_model");
	$mesproduits=$this->Marque_model->
	MesProduits($idinfo);
	//var_dump($mesproduits);

	$this->load->view("marque/mesprod",
		["mesprod"=>$mesproduits]);
	}



}