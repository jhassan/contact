<?php
/**
* This class will handle Request Management
* @author Jawad Hassan
*/
class Request_Model extends CI_Model {
	private $localdb;
/**
*	Default Constructor, Do nothing for now
* @author Jawad Hassan
*/
	public function __construct()
    {
    	$this->localdb = $this->load->database('localdb', TRUE);
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
    public function insert_request($data_array)
    {
        $data = array(
            'name'          => $data_array['name'],
            'gender'        => $data_array['gender'],
            'age'           => $data_array['age'],
            'user_id'       => (int)$this->session->user_id,
            'city'          => $data_array['city'],
            'country_id'    => $data_array['country_id'],
            'cnic'          => $data_array['cnic'],
            'passport'      => $data_array['passport'],
            'email'         => $data_array['email'],
            'contact'       => $data_array['contact'],
            'course'        => $data_array['course'],
            'duration'      => $data_array['duration'],
            'passport_image'   => $data_array['passport_image'],
            'fee_recipt_image' => $data_array['fee_recipt_image'],
            'address'          => $data_array['address'],
            'created_at'   => date("Y-m-d H:i:s")
        );
        $this->localdb->insert('chr_requests', $data);
    }

    public function get_request($draw, $page_number, $limit, $search, $order, $min, $max)
    {
        //var_dump($min."***".$max."----".$contact_no);
        if($this->session->user_type == 0):
            $whereRequest = array (
                "user_id" => (int)$this->session->user_id,
                "is_deleted" => 0
            );
        else:
            $whereRequest = array (
                "is_deleted" => 0
            );    
        endif;    
        $this->localdb->select("*");
        $this->localdb->from('chr_requests');
        // $this->localdb->where('is_active', 0);
        $this->localdb->where($whereRequest);
        $this->localdb->limit($limit);
        $this->localdb->offset($page_number);
        if(isset($min) && $min!="" && isset($max) && $max!=""):
            $where = array (
                ' DATE_FORMAT(`created_at`, "%Y-%m-%d") >=' => date("Y-m-d", strtotime($min)),
                ' DATE_FORMAT(`created_at`, "%Y-%m-%d") <=' => date("Y-m-d", strtotime($max)),
            );
            $this->localdb->where($where);
        endif;
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("name", $search["value"]);
            $this->localdb->or_like("contact", $search["value"]);
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
                ' DATE_FORMAT(`created_at`, "%Y-%m-%d") >=' => date("Y-m-d", strtotime($min)),
                ' DATE_FORMAT(`created_at`, "%Y-%m-%d") <=' => date("Y-m-d", strtotime($max)),
            );
            $this->localdb->where($where);
        endif;
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("name", $search["value"]);
            $this->localdb->or_like("contact", $search["value"]);
        endif;
        $this->localdb->where($whereRequest);
        $rows_count = $this->localdb->count_all_results("chr_requests");
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("name", $search["value"]);
            $this->localdb->or_like("contact", $search["value"]);
        endif;
        $this->localdb->where($whereRequest);
        $rows_total = $this->localdb->count_all_results("chr_requests");
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
    // select request data for edit
    public function select_request_edit($edit_id)
    {
        if (!empty($edit_id)):
            $array = array('id' => (int)$edit_id);
            $this->localdb->select('*'); 
            $this->localdb->from('chr_requests');
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

    public function update_request($data_array, $edit_id)
    {
         //var_dump($edit_id); die;
        if(empty($data_array['passport_image']) && empty($data_array['fee_recipt_image'])):
            $data = array(
            'name'          => $data_array['name'],
            'gender'        => $data_array['gender'],
            'age'           => $data_array['age'],
            'updatd_by'     => (int)$this->session->user_id,
            'city'          => $data_array['city'],
            'country_id'    => $data_array['country_id'],
            'cnic'          => $data_array['cnic'],
            'passport'      => $data_array['passport'],
            'email'         => $data_array['email'],
            'contact'       => $data_array['contact'],
            'course'        => $data_array['course'],
            'duration'      => $data_array['duration'],
            'admin_notes'   => $data_array['admin_notes'],
            'address'          => $data_array['address'],
            'created_at'   => date("Y-m-d H:i:s")
        );
        elseif(!empty($data_array['passport_image'])):
            $data = array(
            'name'          => $data_array['name'],
            'updatd_by'     => (int)$this->session->user_id,
            'gender'        => $data_array['gender'],
            'age'           => $data_array['age'],
            'city'          => $data_array['city'],
            'country_id'    => $data_array['country_id'],
            'cnic'          => $data_array['cnic'],
            'passport'      => $data_array['passport'],
            'email'         => $data_array['email'],
            'contact'       => $data_array['contact'],
            'course'        => $data_array['course'],
            'duration'      => $data_array['duration'],
            'admin_notes'   => $data_array['admin_notes'],
            'passport_image' => $data_array['passport_image'],
            'address'          => $data_array['address'],
            'created_at'   => date("Y-m-d H:i:s")
        );
        elseif(!empty($data_array['fee_recipt_image'])):
            $data = array(
            'name'          => $data_array['name'],
            'gender'        => $data_array['gender'],
            'updatd_by'     => (int)$this->session->user_id,
            'age'           => $data_array['age'],
            'city'          => $data_array['city'],
            'country_id'    => $data_array['country_id'],
            'cnic'          => $data_array['cnic'],
            'passport'      => $data_array['passport'],
            'email'         => $data_array['email'],
            'contact'       => $data_array['contact'],
            'course'        => $data_array['course'],
            'duration'      => $data_array['duration'],
            'admin_notes'   => $data_array['admin_notes'],
            'fee_recipt_image' => $data_array['fee_recipt_image'],
            'address'          => $data_array['address'],
            'created_at'   => date("Y-m-d H:i:s")
        );    
        endif;    
        
        $this->localdb->where('id', $edit_id);
        $this->localdb->update('chr_requests', $data);
    }

    public function delete_request($delete_id)
    {
            $data = array(
            'is_deleted' => 1
            );
        $this->localdb->where('id', $delete_id);
        $this->localdb->update('chr_requests', $data);
    }
    public function request_response($request_id){
        // Get all parents
        $where = array (
            "id" => $request_id
        );
        $this->localdb->select("admin_notes");
        $this->localdb->from("chr_requests");
        $this->localdb->where($where);
        $query = $this->localdb->get();
        $results = $query->result();
        //var_dump($results[0]->admin_notes); die;
        return $results[0]->admin_notes;   
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

    
}

?>