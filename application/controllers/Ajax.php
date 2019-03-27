<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	private $current_menu_item;
	private $data;
	public function __construct() {
		parent::__construct();
		$this->load->model("User_Model");
		$this->load->model("Group_Model");
		$this->load->model("Portal_Model");
		$this->load->model("Product_Model");
		$this->load->model("Sale_Model");
		$this->load->model("Provider_Model");
		$this->load->model("Commission_Model");
		$this->load->model("Schedule_Model");
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

	// Get All Group
	public function view_group()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Group_Model->get_group($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All Portal
	public function view_portal()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Portal_Model->get_portal($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All Product
	public function view_product()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Product_Model->get_product($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All sale
	public function view_sale()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$sale_status 	= 	$this->input->post('sale_status');
		//var_dump($sale_status); die;
		$user_list = $this->Sale_Model->get_sale($draw, $page_number, $limit, $search, $order, $min, $max, $sale_status); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All Provider
	public function view_provider()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Provider_Model->get_provider($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All Commission
	public function view_commission()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Commission_Model->get_commission($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

	// Get All Schedule
	public function view_schedule()
	{	
		$draw 			=	$this->input->post("draw");
		$page_number 	=	$this->input->post("start");
		$limit 			=	$this->input->post("length");
		$search			=	$this->input->post("search");
		$order			=	$this->input->post("order");
		$max			=	$this->input->post("max");
		$min 			=	$this->input->post("min");
		$user_list = $this->Schedule_Model->get_schedule($draw, $page_number, $limit, $search, $order, $min, $max); 
		$data = array (
			"returnData" => $user_list
		);
		$this->load->view("ajax-output", $data); 
	}

}