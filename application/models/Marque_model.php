<?php 

class Marque_model extends CI_Model
{



public function AfficherMarque()
{
//voir manuel codeigniter.com
	
	$sql="SELECT * FROM marque ";
	$requete=$this->db->query($sql);
	return ($requete->result("Marque_model"));

	//die("class Produit");


}

public function MesProduits($id)
{
	$sql="SELECT * FROM produit WHERE id_marque= ?";
	$requete=$this->db->query($sql,[$id]);
	return ($requete->result("Marque_model"));

}

public function displayImage()
{

	return base_url()."assets/images/".$this->image;
}


}