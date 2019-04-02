<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("User_Model");
		$this->load->helper('form', 'url');
		$this->data = array(
			"title"	=>	"Dashboard"
		);
		// if($this->User_Model->is_logged_in()===FALSE):
		// 	redirect(site_url("/"));
		// endif;
	}
	public function index()
	{
		if($this->User_Model->is_logged_in()):
			redirect(site_url('request/view_request'));
			return;
		endif;
		
		$message = "";
		if($this->input->post("action")=="do_login"):
			$this->load->library("form_validation");
			$this->form_validation->set_rules("username", "User Name", "required");
			$this->form_validation->set_rules("password", "Password", "required");
			$this->form_validation->set_rules("action", "Credentials", "required|callback_user_login_check");

			if($this->form_validation->run()===FALSE):
				$message = validation_errors();
				$this->session->set_flashdata('message', array("message_type"=>"Error", "message"=>$message));
			else:
				redirect(site_url("request/view_request"));
			endif;
		endif;
		$data = array (
			"message"	=>	$message
		);
		//print_r($data);
		$this->load->view('login', $data);
	}
	public function create_user(){
		if($this->session->user_type == 0):
    		$this->permission_denied();
    		return;
    	endif;
		if($this->input->post("action")=="create_user"):
			// Validate Form
			$this->load->library("form_validation");
			$this->form_validation->set_rules("fname", "First Name", "required");
			$this->form_validation->set_rules("lname", "Last Name", "required");
			$this->form_validation->set_rules("username", "User Name", "required");
			$this->form_validation->set_rules('email', 'Email', 'required|min_length[1]|max_length[30]|callback_check_edit_email');
			$this->form_validation->set_rules("password", "Password", "required");
            if ($this->form_validation->run() === FALSE):
            		$message = validation_errors();
					$this->session->set_flashdata('message', array("message_type"=>"Error", "message"=>$message));
            	else:
            	// Insert into user
            	$GetInsertArray = array();
            	$GetInsertArray = $this->input->post();
        		$GetInsertArray['user_image'] = trim($name);
            	$this->User_Model->insert_signup($GetInsertArray);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"User Created Successfully"));
            	redirect(site_url("user/view_user"));
            endif;
		endif;
			// $this->data["patentPermission"]		= $this->User_Model->parent_permissions();
			// $this->data["childPermission"]		= $this->User_Model->child_permissions();
			$this->data["title"]				=	"Create User";
			$this->load->view("crm-app/includes/header", $this->data);
			$this->load->view("crm-app/user/create_user", $this->data);
			$this->load->view("crm-app/includes/footer", $this->data);
	}
	public function edit_user($edit_id)
	{
		if($this->session->user_type == 0):
    		$this->permission_denied();
    		return;
    	endif;
		//var_dump($this->input->post("action"));
		if($this->input->post("action")=="edit_user"):

			// Validate Form
			$this->load->library("form_validation");
			$this->form_validation->set_rules("fname", "First Name", "required");
			$this->form_validation->set_rules("lname", "Last Name", "required");
			$this->form_validation->set_rules("username", "User Name", "required");
			$this->form_validation->set_rules('email', 'Email', 'required|min_length[1]|max_length[30]|callback_check_edit_email');
            if ($this->form_validation->run() === FALSE):
            		$message = validation_errors();
					$this->session->set_flashdata('message', array("message_type"=>"Error", "message"=>$message));
            	else:
            	// Update user
            	$GetUpdateArray 	= array();
            	$GetUpdateArray 	= $this->input->post();
            	//echo "adfads333"; die;
          //   	$permission_checked = $this->input->post('permission');
        		// $arrayChickList 	= implode(',', $permission_checked);
        		// $GetUpdateArray['arrayChickList'] = $arrayChickList;
        		//var_dump($GetUpdateArray["edit_id"]); die;
        		$edit_id = $GetUpdateArray["edit_id"];
            	$UpdateArray 		= $this->User_Model->update_user($GetUpdateArray, $edit_id);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"User Updated Successfully"));
            	redirect(site_url("user/view_user"));
            endif;
		endif;
		// Select data for edit
		$EditCustomerArray = $this->User_Model->select_user_edit($edit_id);
		// $this->data["patentPermission"]		= $this->User_Model->parent_permissions();
		// $this->data["childPermission"]		= $this->User_Model->child_permissions();
		// $this->data["user_permission"] 		= $this->User_Model->get_login_user_info($edit_id);
		$this->data["edit_user"]			=	$EditCustomerArray;
		$this->data["title"]				=	"Edit User";
		$this->load->view("crm-app/includes/header", $this->data);
		$this->load->view("crm-app/user/edit_user", $this->data);
		$this->load->view("crm-app/includes/footer", $this->data);
	}
	public function view_user()
	{
		if($this->session->user_type == 0):
    		$this->permission_denied();
    		return;
    	endif;
		$this->data["title"]				=	"View User";
		//$this->data["permission"]			=	$this->permission;
		$this->load->view("crm-app/includes/header", $this->data);
		$this->load->view("crm-app/user/view_user", $this->data);
		$this->load->view("crm-app/includes/footer", $this->data);
	}
	public function view_request()
	{
		if($this->session->user_type == 0):
    		$this->permission_denied();
    		return;
    	endif;
		$this->data["title"]				=	"View User Request";
		//$this->data["permission"]			=	$this->permission;
		$this->load->view("crm-app/includes/header", $this->data);
		$this->load->view("crm-app/user/view_user_request", $this->data);
		$this->load->view("crm-app/includes/footer", $this->data);
	}

	public function signup(){
		$data = array ();
		if($this->input->post("action")=="do_signup"):
			$this->load->library("form_validation");
			$this->form_validation->set_rules("fname", "First Name", "required");
			$this->form_validation->set_rules("lname", "Last Name", "required");
			$this->form_validation->set_rules("username", "User Name", "required");
			$this->form_validation->set_rules('email', 'Email', 'required|min_length[1]|max_length[30]|callback_check_edit_email');
			$this->form_validation->set_rules("password", "Password", "required");
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');


			if($this->form_validation->run()===FALSE):
				$message = validation_errors();
				$this->session->set_flashdata('message', array("message_type"=>"Error", "message"=>$message));
			else:
				$GetInsertArray = array();
            	$GetInsertArray = $this->input->post();
          //   	$permission_checked = $this->input->post('permission');
        		// $arrayChickList = implode(',', $permission_checked);
        		// $GetInsertArray['arrayChickList'] = $arrayChickList;
            	$this->User_Model->insert_signup($GetInsertArray);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"User Created Successfully"));
            	redirect(site_url("request/view_request"));
			endif;
		endif;
		$data = array (
			"message"	=>	$message
		);
		//print_r($data);
		$this->load->view('signup', $data);
	}

	public function delete_user()
	{
		if($this->session->user_type == 0):
    		$this->permission_denied();
    		return;
    	endif;
		$delete_id = $this->input->post("delete_id");
		$this->User_Model->delete_user($delete_id);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"User Deleted Successfully"));
            	redirect(site_url("user/view_user"));
	}
	public function user_login_check($str) {
		if($this->User_Model->do_login($this->input->post("username"), $this->input->post("password"))===TRUE):
			return TRUE;
		else:
			$this->form_validation->set_message('user_login_check', 'Invalid USERNAME or PASSWORD');
			return FALSE;
		endif;
	}
	public function logout() {
		$this->User_Model->do_logout();
		redirect(site_url("/"));
	}
	private function permission_denied() {
    	$this->load->view("crm-app/includes/header", $this->data);
		$this->load->view("crm-app/permission-denied", $this->data);
		$this->load->view("crm-app/includes/footer", $this->data);
    }

    public function check_unique_email(){
    	$email = $this->input->post('email');
	    $check_email = $this->User_Model->check_email($email);
    	if ($check_email["status"] == false):
            $this->form_validation->set_message('check_unique_email', $check_email["message"]);
            return FALSE;
        else:
            return TRUE;
        endif;
    }

    public function check_edit_email(){
    	$email = $this->input->post('email');
	    $check_email = $this->User_Model->check_edit_email($email);
    	if ($check_email["status"] == false):
            $this->form_validation->set_message('check_edit_email', $check_email["message"]);
            return FALSE;
        else:
            return TRUE;
        endif;
    }

    
    
}
