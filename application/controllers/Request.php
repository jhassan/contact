<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Request_Model");
		$this->load->helper('form', 'url');
		$this->data = array(
			"title"	=>	"Dashboard"
		);
		// if($this->User_Model->is_logged_in()===FALSE):
		// 	redirect(site_url("/"));
		// endif;
	}
	public function create_request(){
		// if(!in_array("22", $this->permission)):
  //   		$this->permission_denied();
  //   		return;
  //   	endif;
		if($this->input->post("action")=="create_request"):

			// Validate Form
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name', 'Name', 'required|min_length[1]|max_length[100]');
            $this->form_validation->set_rules('email', 'Email', 'min_length[1]|max_length[30]|callback_check_unique_email');
   //          if (empty($_FILES['user_image']['name']))
			// {
			//     $this->form_validation->set_rules('user_image', 'User Image', 'required');
			// }
            
            if ($this->form_validation->run() === FALSE):
            		$message = validation_errors();
					$this->session->set_flashdata('message', array("message_type"=>"Error", "message"=>$message));
            	else:

            	// Insert into profile
        		$passport_image = $_FILES["passport_image"]["name"];
        		$fee_recipt_image = $_FILES["fee_recipt_image"]["name"];
        		$uploadpath = $_SERVER['DOCUMENT_ROOT'].'/contact/uploads/user_images/';
        		$config['upload_path'] 		= $uploadpath; 
			    $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
			    $config['max_size']      	= 10000;
			    $this->load->library('upload', $config);
			    if( ! $this->upload->do_upload('passport_image') && empty($this->input->post("edit_id"))){
			        $this->upload->do_upload('passport_image');
			        $upload_data = $this->upload->data();
			    }
			    if( ! $this->upload->do_upload('fee_recipt_image') && empty($this->input->post("edit_id"))){
			        $this->upload->do_upload('fee_recipt_image');
			        $upload_data = $this->upload->data();	
			    }
            	// Insert into request
            	$GetInsertArray = array();
            	$GetInsertArray = $this->input->post();
          //   	$permission_checked = $this->input->post('permission');
        		// $arrayChickList = implode(',', $permission_checked);
        		// $GetInsertArray['arrayChickList'] = $arrayChickList;
        		$GetInsertArray['passport_image'] = trim($passport_image);
        		$GetInsertArray['fee_recipt_image'] = trim($fee_recipt_image);
            	$this->Request_Model->insert_request($GetInsertArray);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"Request Created Successfully"));
            	redirect(site_url("request/view_request"));
            endif;
		endif;
			// $this->data["patentPermission"]		= $this->User_Model->parent_permissions();
			// $this->data["childPermission"]		= $this->User_Model->child_permissions();
			$this->data["title"]				=	"Create Request";
			$this->load->view("crm-app/includes/header", $this->data);
			$this->load->view("crm-app/request/create_request", $this->data);
			$this->load->view("crm-app/includes/footer", $this->data);
	}
	public function edit_request($edit_id)
	{
		//var_dump($edit_id);
		// if(!in_array("23", $this->permission)):
  //   		$this->permission_denied();
  //   		return;
  //   	endif;
		//var_dump($this->input->post("action"));
		if($this->input->post("action")=="edit_user"):

			// Validate Form
			$this->form_validation->set_rules('name', 'Name', 'required|min_length[1]|max_length[100]');
            $this->form_validation->set_rules('email', 'Email', 'min_length[1]|max_length[30]|callback_check_unique_email');
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
            	$UpdateArray 		= $this->Request_Model->update_request($GetUpdateArray, $edit_id);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"Request Updated Successfully"));
            	redirect(site_url("request/view_request"));
            endif;
		endif;
		// Select data for edit
		$EditCustomerArray = $this->Request_Model->select_request_edit($edit_id);
		// $this->data["patentPermission"]		= $this->User_Model->parent_permissions();
		// $this->data["childPermission"]		= $this->User_Model->child_permissions();
		// $this->data["user_permission"] 		= $this->User_Model->get_login_user_info($edit_id);
		$this->data["edit_request"]			=	$EditCustomerArray;
		$this->data["title"]				=	"Edit Request";
		$this->load->view("crm-app/includes/header", $this->data);
		$this->load->view("crm-app/request/edit_request", $this->data);
		$this->load->view("crm-app/includes/footer", $this->data);
	}
	public function view_request()
	{
		// if(!in_array("24", $this->permission)):
  //   		$this->permission_denied();
  //   		return;
  //   	endif;
		$this->data["title"]				=	"View Request";
		//$this->data["permission"]			=	$this->permission;
		$this->load->view("crm-app/includes/header", $this->data);
		$this->load->view("crm-app/request/view_request", $this->data);
		$this->load->view("crm-app/includes/footer", $this->data);
	}

	public function signup(){
		$data = array ();
		if($this->input->post("action")=="do_signup"):
			$this->load->library("form_validation");
			$this->form_validation->set_rules("fname", "First Name", "required");
			$this->form_validation->set_rules("lname", "Last Name", "required");
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

	public function delete_request()
	{
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
