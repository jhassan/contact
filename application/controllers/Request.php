<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Request_Model");
		$this->load->model("User_Model");
		$this->load->helper('form', 'url');
		$this->localdb = $this->load->database('localdb', TRUE);
		$this->data = array(
			"title"	=>	"Dashboard"
		);
		if($this->User_Model->is_logged_in()===FALSE):
			redirect(site_url("/"));
		endif;
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
            //$this->form_validation->set_rules('email', 'Email', 'min_length[1]|max_length[30]|callback_check_unique_email');
            $this->form_validation->set_rules('email', 'Email', 'required');
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
        		// $uploadpath = $_SERVER['DOCUMENT_ROOT'].'/contact/uploads/user_images/';
        		$uploadpath = $_SERVER['DOCUMENT_ROOT'].'/uploads/user_images/';
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
            	// send email
    //         	$this->load->library('email');
    //         	$config['protocol'] = 'sendmail';
				// $config['mailpath'] = '/usr/sbin/sendmail';
				// $config['charset'] = 'iso-8859-1';
				// $config['wordwrap'] = TRUE;

				// $this->email->initialize($config);
				// $this->email->from('mugheesch@gmail.com ', 'Doctor');
				// $this->email->to('mugheesch@gmail.com ');
				// // $this->email->from('jawadjee0519@gmail.com ', 'Doctor');
				// // $this->email->to('jawadjee0519@gmail.com ');
				// $this->email->subject('Email Test');
				// $this->email->message('Testing the email class.');

				// $this->email->send();
				// if ( ! $this->email->send())
				// {
				//         // Generate error
				// 	$msg = "Email not sent";
				// }
				// else
				// {
				// 	$msg = "Email sent";
				// }
				// echo $this->email->print_debugger();
				$config = Array(
				     'protocol' => 'sendmail',
				     'smtp_host' => 'asia.secureserver.net',
				     'smtp_port' => 465,
				     'smtp_user' => 'info@gynaeendoscopyhlh.com',
				     'smtp_pass' => 'egyndosc#4*%$',
				     'mailtype'  => 'html', 
				     'charset'   => 'iso-8859-1',
					 'mailpath'	=> '/usr/sbin/sendmail',
				     'wordwrap'	=>	TRUE
				);
				$this->load->library('email', $config);  	//load email library
				$this->email->from('info@gynaeendoscopyhlh.com', 'My Site'); //sender's email
				//$address = "mugheesch@gmail.com";	//receiver's email
				$address = "info@gynaeendoscopyhlh.com";	//receiver's email
				$subject = "Request Subject";	//subject
				$message = "Here is message for request";
				/*-----------email body ends-----------*/		      
				$this->email->to($address);
				$this->email->subject($subject);
				$this->email->message($message);
				//$this->email->send();
				if ( ! $this->email->send())
				{
					show_error($this->email->print_debugger());
  					return false;
				        // Generate error
					$msg = "Email not sent";
				}
				else
				{
					$this->email->send();
					$msg = "Email sent";
				}
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"Request Created Successfully $msg" ));
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
		if($this->input->post("action")=="edit_request"):

			// Validate Form
			$this->load->library('form_validation');
			//$this->form_validation->set_rules('name', 'Name', 'required|min_length[1]|max_length[100]');
            //$this->form_validation->set_rules('email', 'Email', 'min_length[1]|max_length[30]|callback_check_unique_email');
            //$this->form_validation->set_rules('email', 'Email', 'required');
     //        if ($this->form_validation->run() === FALSE):
     //        		$message = validation_errors();
					// $this->session->set_flashdata('message', array("message_type"=>"Error", "message"=>$message));
     //        	else:
				$GetUpdateArray 	= array();
            	$GetUpdateArray 	= $this->input->post();
				if($this->session->user_type == 0):
	            	// update image
	        		$passport_image = $_FILES["passport_image"]["name"];
	        		$fee_recipt_image = $_FILES["fee_recipt_image"]["name"];
	        		//$uploadpath = $_SERVER['DOCUMENT_ROOT'].'/contact/uploads/user_images/';
	        		$uploadpath = $_SERVER['DOCUMENT_ROOT'].'/uploads/user_images/';
	        		$config['upload_path'] 		= $uploadpath; 
				    $config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				    $config['max_size']      	= 10000;
				    $this->load->library('upload', $config);
				    if( ! $this->upload->do_upload('passport_image') && !empty($this->input->post("edit_id"))){
				        $this->upload->do_upload('passport_image');
				        $upload_data = $this->upload->data();
				    }
				    if( ! $this->upload->do_upload('fee_recipt_image') && !empty($this->input->post("edit_id"))){
				        $this->upload->do_upload('fee_recipt_image');
				        $upload_data = $this->upload->data();	
				    }
				    $GetUpdateArray['passport_image'] = trim($passport_image);
        			$GetUpdateArray['fee_recipt_image'] = trim($fee_recipt_image);
			    endif;	
            	// Update user
            	
            	//echo "adfads333"; die;
          //   	$permission_checked = $this->input->post('permission');
        		// $arrayChickList 	= implode(',', $permission_checked);
        		// $GetUpdateArray['arrayChickList'] = $arrayChickList;
        		//var_dump($GetUpdateArray["edit_id"]); die;
        		$edit_id = $GetUpdateArray["edit_id"];
        		
            	$UpdateArray 		= $this->Request_Model->update_request($GetUpdateArray, $edit_id);
            	// send email
            	
    //         	$this->load->library('email');
    //         	$config['protocol'] = 'sendmail';
				// $config['mailpath'] = '/usr/sbin/sendmail';
				// $config['charset'] = 'iso-8859-1';
				// $config['wordwrap'] = TRUE;

				// $this->email->initialize($config);
				// $this->email->from('mugheesch@gmail.com ', 'Doctor');
				// $this->email->to($this->input->post('email'));

				// $this->email->subject('Email Test for when admin post response');
				// $this->email->message('Email body for admin post response');

				// $this->email->send();
				//var_dump($this->input->post('email')); die;
				if($this->session->user_type == 1):
					if (!empty($edit_id)):
			            $array = array('id' => (int)$edit_id);
			            $this->localdb->select('email'); 
			            $this->localdb->from('chr_requests');
			            $this->localdb->where($array); 
			            $query = $this->localdb->get();
			            $rows = $query->result();
			            if ($rows > 0):
			                $email = $rows[0]->email;
			            endif;
			        endif;
			        // send email
			        $config = Array(
				     'protocol' => 'sendmail',
				     'smtp_host' => 'asia.secureserver.net',
				     'smtp_port' => 465,
				     'smtp_user' => 'info@gynaeendoscopyhlh.com',
				     'smtp_pass' => 'egyndosc#4*%$',
				     'mailtype'  => 'html', 
				     'charset'   => 'iso-8859-1',
					 'mailpath'	=> '/usr/sbin/sendmail',
				     'wordwrap'	=>	TRUE
					);
					$this->load->library('email', $config);  	//load email library
					$this->email->from('info@gynaeendoscopyhlh.com', 'My Site'); //sender's email
					//$address = "mugheesch@gmail.com";	//receiver's email
					$address = "info@gynaeendoscopyhlh.com";	//receiver's email
					$subject = "Admin read request";	//subject
					$message = "Here is message from admin";
					/*-----------email body ends-----------*/		      
					$this->email->to($this->input->post('email'));
					$this->email->subject($subject);
					$this->email->message($message);
					//$this->email->send();
					if ( ! $this->email->send())
					{
						show_error($this->email->print_debugger());
	  					return false;
					        // Generate error
						$msg = "Email not sent";
					}
					else
					{
						$this->email->send();
						$msg = "Email sent";
					}
			        //var_dump($email); die;
					// $this->load->library('email');  	//load email library
					// $this->email->from('mugheesch@gmail.com', 'My Site'); //sender's email
					// $address = $email;	//receiver's email
					// //$this->email->to($this->input->post('email'));
					// $subject = "View Request By Admin";	//subject
					// $message = "Your request has been processed";
					// /*-----------email body ends-----------*/		      
					// $this->email->to($address);
					// $this->email->subject($subject);
					// $this->email->message($message);
					// $this->email->send();
					//$this->email->send();
					// if ( ! $this->email->send())
					// {
					//         // Generate error
					// 	$msg = "Email not sent";
					// }
					// else
					// {
					// 	$msg = "Email sent";
					// }
				endif;	
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"Request Updated Successfully $msg"));
            	redirect(site_url("request/view_request"));
            //endif;
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
		$this->Request_Model->delete_request($delete_id);
            	$this->session->set_flashdata('message', array("message_type"=>"success", "message"=>"Request Deleted Successfully"));
            	redirect(site_url("request/view_request"));
	}
	public function get_request_response(){
		$request_id = $this->input->post("request_id");
		echo $this->Request_Model->request_response($request_id);
        
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
