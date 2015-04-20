<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Chat extends CI_Controller {

	public function index()
	{
		
		//$this->load->helper("form");
		//var_dump($_POST);
		
		$this->load->model("Chat_model");
		$this->load->helper("form");
		$this->load->library('form_validation');

		$this->form_validation->set_rules
		('auteur','auteur','required');
		$this->form_validation->set_rules
		('contenu','comment','required');

		if ($this->form_validation->run() == TRUE)
                {
                	
                       
                   	//var_dump( $this->input->post());
                   	$dataToInsert = [
                    'auteur' => $this->input->post('auteur'),
                    'contenu' => $this->input->post('contenu'),
                    'date_msg'=>date("Y-m-d h:i:s")                     	
                    ];
				$this->Chat_model->InserComment($dataToInsert);

				if($this->input->is_ajax_request())
				{
				die(json_encode([
                       	"csrf"=>$this->security->get_csrf_hash()
                       	])); 
				}
				redirect("chat");
		}
			$chats=$this->Chat_model->AfficherComment();
		 if($this->input->is_ajax_request())
		 {

		 	die(json_encode([
               	"messages"=>$this->load->view("ajaxmessage", 
					["chat"=>$chats], true)]));


		 }


		
		$this->load->view("discussionchat",
			["chat"=>$chats]);
			


	}
}