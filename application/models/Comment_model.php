<?php 

class Comment_model extends CI_Model
{


public function InserComment($tabToInsert)
{
	
	$sql="INSERT INTO commentaire(auteur,contenu,note,datecomment,produit_id) 
	VALUES (?,?,?,?,?)";
	$requete=$this->db->query($sql,
					[
						$tabToInsert['auteur'],
						$tabToInsert['contenu'],
						$tabToInsert['note'],
						$tabToInsert['datecomment'],
						$tabToInsert['produit_id'],
					]);
	//ou
	//$this->db->insert("commentaire",$tabToInsert);
	


}


public function AfficherComment($id)
{

	$sql="SELECT * FROM commentaire WHERE produit_id=?";
	$requete=$this->db->query($sql,[$id]);
	return($requete->result("Comment_model"));
}




}



