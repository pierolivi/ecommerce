<?php 

class Produit_model extends CI_Model
{



public function findLimit($nb)
{
//voir manuel codeigniter.com
	//$requete=$this->db->get("produit");
	//var_dump($requete->result("Produit"));
	$sql="SELECT * FROM produit LIMIT ?";
	$requete2=$this->db->query($sql,[$nb]);
	return $requete2->result("Produit_model");

	//die("class Produit");


}


public function displayImage()
{

	return base_url()."assets/images/".$this->image;
}



public function findProduitById($id)
{

		$query=$this->db->get_where("produit",["id"=>$id]);   //fait une requete select * from produit id=
		//var_dump($query->result("Produit_model"));
		//var_dump($query->unbuffered_row("Produit_model"));
		return ($query->unbuffered_row("Produit_model"));  //function presque pareil a result
}
}