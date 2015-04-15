<?php 

class Produit_model extends CI_Model
{



public function findLimit($nb)
{
//voir manuel codeigniter.com
	//$requete=$this->db->get("produit");
	//var_dump($requete->result("Produit"));
	//$sql="SELECT * FROM produit LIMIT ?";
	$sql="SELECT produit.*,note ,AVG(note)as Moyenne, 
	COUNT(note) as Nbnote FROM produit LEFT JOIN 
	commentaire ON produit.id=produit_id GROUP BY 
	produit.id LIMIT ?";
	$requete2=$this->db->query($sql,[$nb]);
	return $requete2->result("Produit_model");

	//die("class Produit");


}

public function FindBestSlide($nb)
{
//voir manuel codeigniter.com
	
	$sql="SELECT produit.*,note ,AVG(note)as Moyenne, 
	COUNT(note) as Nbnote FROM produit LEFT JOIN 
	commentaire ON produit.id=produit_id GROUP BY 
	produit.id ORDER BY Moyenne DESC LIMIT ?";
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

public function Average($id)
{
	$sql="SELECT AVG(note) as Moyenne FROM produit 
	LEFT JOIN commentaire ON produit.id=produit_id 
	WHERE produit.id= ? GROUP BY produit.id ORDER BY Moyenne";
	$requete=$this->db->query($sql,[$id]);
	return ($requete->unbuffered_row("Produit_model"));

}




}