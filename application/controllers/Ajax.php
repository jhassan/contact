<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	private $current_menu_item;
	private $data;
	public function __construct() {
		parent::__construct();
		$this->load->model("User_Model");
		$this->load->model("Request_Model");
		if($this->User_Model->is_logged_in()===FALSE):
			redirect(site_url("/"));
		endif;
	}
	// Get All User
	public function view_user()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->User_Model->get_user($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All Request
	public function view_request()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Request_Model->get_request($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	

}