<?php
/**
* This class will handle User Management
* @author Jawad Hassan
*/
class User_Model extends CI_Model {
	private $localdb;
/**
*	Default Constructor, Do nothing for now
* @author Jawad Hassan
*/
	public function __construct()
    {
    	$this->localdb = $this->load->database('localdb', TRUE);
    }

    public function do_login($name, $password) {
    	$where = array (
    		"username"		=>	$name,
            "status"        =>  0,
            "is_verified"   =>  1,
    		"password"	    =>	md5($password)
    	);
    	$query = $this->localdb->get_where("chr_users", $where);
    	if($query->num_rows()==1):
    		$user = $query->first_row();
    		$sessionData = array (
    			"logged_in"					=>	TRUE,
    			"name"						=>	$user->fname . " " . $user->lname,
    			"user_id"					=>	$user->id,
                "user_type"                 =>  $user->user_type,
        		);
    		$this->session->set_userdata($sessionData);
    		return TRUE;
    	else:
    		return FALSE;
    	endif;
    }
    public function do_logout() {
        $this->session->sess_destroy();
        return TRUE;
    }
    public function is_logged_in() {
        if($this->session->logged_in==TRUE):
            return TRUE;
        else:
            return FALSE;
        endif;
    }
    public function insert_signup($data_array)
    {
        if(isset($data_array['status']))
            $data_array['status'] = $data_array['status'];
        else
            $data_array['status'] = 0;
        $data = array(
            'fname'        => $data_array['fname'],
            'lname'        => $data_array['lname'],
            'username'     => $data_array['username'],
            'status'       => $data_array['status'],
            'password'     => md5($data_array['password']),
            'email'        => $data_array['email'],
            'is_verified'  => 0,
            'hash'         => md5(rand(0, 1000)),
            'created_at'   => date("Y-m-d H:i:s")
        );
        $this->localdb->insert('chr_users', $data);
        $insert_id = $this->localdb->insert_id();
        return  $insert_id;
    }

    public function get_user($draw, $page_number, $limit, $search, $order, $min, $max)
    {
        $this->localdb->select("*, 
                CASE 
                    WHEN user_type = 1 THEN 'Admin' 
                    WHEN user_type = 0 THEN 'User' 
                END AS user_type,
                CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status");
        $this->localdb->from('chr_users');
        // $this->localdb->where('is_active', 0);
        $this->localdb->where('is_deleted', 0);
        $this->localdb->limit($limit);
        $this->localdb->offset($page_number);
        if(isset($min) && $min!="" && isset($max) && $max!=""):
            $where = array (
                "CAST(id as UNSIGNED) >" => $min,
                "CAST(id as UNSIGNED) <" => $max,
            );
            $this->localdb->where($where);
        endif;
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("fname", $search["value"]);
        endif;
        if(isset($order[0]["column"])):
            $order_by = "";
            switch($order[0]["column"]) {
                case 0:
                    $order_by = "`id`";
                break;
            }
        $this->localdb->order_by($order_by, $order[0]["dir"]);
        endif;
        $query = $this->localdb->get();
        //echo $this->localdb->last_query(); die;
        $user_result = $query->result();
        if(isset($min) && $min!="" && isset($max) && $max!=""):
            $where = array (
                "CAST(id as UNSIGNED) >" => $min,
                "CAST(id as UNSIGNED) <" => $max,
            );
            $this->localdb->where($where);
        endif;
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("fname", $search["value"]);
        endif;
        $this->localdb->where('status', 0);
        $this->localdb->where('is_deleted', 0);
        $rows_count = $this->localdb->count_all_results("chr_users");
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("fname", $search["value"]);
        endif;
        $this->localdb->where('status', 0);
        $this->localdb->where('is_deleted', 0);
        $rows_total = $this->localdb->count_all_results("chr_users");
        foreach($user_result as $key => $user):
            $user_result[$key]->DT_RowId = $user->id;
        endforeach;
        $user_result = array (
            "draw"              =>  $draw,
            "recordsTotal"      =>  $rows_total,
            "recordsFiltered"   =>  $rows_count,
            "data"              =>  $user_result
        );
        return $user_result;
    }
    // select user data for edit
    public function select_user_edit($edit_id)
    {
        if (!empty($edit_id)):
            $array = array('id' => (int)$edit_id);
            $this->localdb->select('*'); 
            $this->localdb->from('chr_users');
            $this->localdb->where($array); 
            $query = $this->localdb->get();
            $rows = $query->result();
            if ($rows > 0):
                return $rows;
            else:
                return false;
            endif;
        endif;
    }

    public function update_user($data_array, $edit_id)
    {
         //var_dump($edit_id); die;
        if(empty($data_array['password'])):
            $data = array(
            'fname'        => $data_array['fname'],
            'lname'        => $data_array['lname'],
            'username'     => $data_array['username'],
            'status'       => $data_array['status'],
            'email'        => $data_array['email'],
            'updated_at'   => date("Y-m-d H:i:s")
        );
        else:
            $data = array(
            'fname'        => $data_array['fname'],
            'lname'        => $data_array['lname'],
            'username'     => $data_array['username'],
            'status'       => $data_array['status'],
            'password'     => md5($data_array['password']),
            'email'        => $data_array['email'],
            'updated_at'   => date("Y-m-d H:i:s")
        );
        endif;    
        
        $this->localdb->where('id', $edit_id);
        $this->localdb->update('chr_users', $data);
    }

    public function delete_user($delete_id)
    {
            $data = array(
            'is_deleted' => 1
            );
        $this->localdb->where('id', $delete_id);
        $this->localdb->update('chr_users', $data);
    }
    public function parent_permissions()
    {
        // Get all parents
        $where = array (
            "parent_id" => 0
        );
        $this->localdb->select("*");
        $this->localdb->from("tbl_permissions");
        $this->localdb->where($where);
        $query = $this->localdb->get();
        $results = $query->result();
        return $results;
    }
    public function child_permissions()
    {
        // Get all child
        $where = array (
            "parent_id !=" => 0
        );
        $this->localdb->select("*");
        $this->localdb->from("tbl_permissions");
        $this->localdb->where($where);
        $query = $this->localdb->get();
        $results = $query->result();
        return $results;
    }
    // Get login user data
    public function get_login_user_info($id){
        $where = array (
            "id" => $id
        );
        $this->localdb->select("*");
        $this->localdb->from("chr_users");
        $this->localdb->where($where);
        $query = $this->localdb->get();
        $results = $query->result();
        return $results;
    }

    public function check_email($email){
        if($email == ""):
            return array(
                "status"    =>  FALSE,
                "message"   =>  "Email is required!"
            );
        endif;    
        $where = array(
            'email'         => trim($email), 
            'is_deleted'    => 0
        );
        $this->localdb->select('email'); 
        $this->localdb->where($where);
        $this->localdb->from("chr_users"); 
        $query = $this->localdb->get();
        if ($query->num_rows() > 0):
            return array(
                "status"    =>  FALSE,
                "message"   =>  "Email Already Exists!"
            );
        endif;
        // End validate range
        return array (
            "status"    =>  TRUE,
            "message"   =>  ""
        );
    }
    // edit email validate
    public function check_edit_email($email){
        if($email == ""):
            return array(
                "status"    =>  FALSE,
                "message"   =>  "Email is required!"
            );
        endif;    
        $where = array(
            'email'         => trim($email), 
            'is_deleted'    => 0
        );
        $edit_id = $this->uri->segment(3);
        $this->localdb->select('email');
        $this->localdb->where_not_in('id', $edit_id); 
        $this->localdb->where($where);
        $this->localdb->from("chr_users"); 
        $query = $this->localdb->get();
        if ($query->num_rows() > 0):
            return array(
                "status"    =>  FALSE,
                "message"   =>  "Email Already Exists!"
            );
        endif;
        // End validate range
        return array (
            "status"    =>  TRUE,
            "message"   =>  ""
        );
    }

    // verify user
    public function verify_user($email) {
        $data = array('is_verified' => 1);
        $this->localdb->where('email', $email);
        $this->localdb->update('chr_users', $data);
    }

    // get user hash
    public function get_hash_value($email){
        $array = array('email' => $email);
        $this->localdb->select('hash'); 
        $this->localdb->from('chr_users');
        $this->localdb->where($array); 
        $query = $this->localdb->get();
        $rows = $query->result();
        if (count($rows) > 0):
            $hash = $rows[0]->hash;
            return $hash;
        endif;
    }
    
}

?>