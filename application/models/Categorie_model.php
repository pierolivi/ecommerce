<?php 

class Categorie_model extends CI_Model
{



public function getCategorie()
{

	$sql="SELECT * FROM categorie";
	$requete2=$this->db->query($sql);
	return $requete2->result("Categorie_model");

	


}

	public function getProduitByCat ($idProduit) //parametre de information/1
	{

		$sql="SELECT produit_categorie.idprod,titre,
		produit.description,image,prix FROM produit_categorie 
		INNER JOIN categorie ON idcat=idcategorie
		INNER JOIN produit ON id=idprod
		WHERE idcategorie= ?";
		$requete2=$this->db->query($sql,[$idProduit]);
		return($requete2->result("Categorie_model"));

	}

	

}