<?php 

class Chat_model extends CI_Model
{



public function InserComment($tabToInsert)
	{
	
	$sql="INSERT INTO message(auteur,contenu,date_msg) 
	VALUES (?,?,?)";
	$requete=$this->db->query($sql,
					[
						$tabToInsert['auteur'],
						$tabToInsert['contenu'],
						$tabToInsert['date_msg']
						
					]);
	
	//ou
	//$this->db->insert("message",$tabToInsert);
	


		}


public function AfficherComment()
{

	$sql="SELECT * FROM message ";
	$requete=$this->db->query($sql);
	return($requete->result("Chat_model"));
}


}