<?php 

class Panier_model extends CI_Model
{



public function ListProd($array)
{

	$sql="SELECT * FROM produit WHERE id IN ? ";
	$requete=$this->db->query($sql,[$array]);
	return $requete->result("Panier_model");

	//die("class Produit");


}





}