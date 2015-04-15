<?php 

class Categorie_model extends CI_Model
{



public function getCategorie()
{

	$sql="SELECT * FROM categorie";
	$requete2=$this->db->query($sql);
	return $requete2->result("Categorie_model");

	


}

public function information ($idProduit) //parametre de information/1
	{

		$sql="SELECT produit_categorie.* FROM produit_categorie 
		INNER JOIN categorie ON idcat=idcategorie
		WHERE idcategorie= ?";
		$requete2=$this->db->query($sql,[$idProduit]);
		var_dump($requete2->result("Categorie_model"));

}







}