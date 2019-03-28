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

    public function get_user($draw, $page_number, $limit, $search, $order, $min, $max)
    {
        $this->localdb->select("*, us.id as id, 
                CASE 
                    WHEN user_type_id = 1 THEN 'Staff' 
                    WHEN user_type_id = 2 THEN 'Client' 
                    WHEN user_type_id = 3 THEN 'Agent' 
                END AS user_type_id,
                CASE 
                    WHEN status = 0 THEN 'Enable' 
                    WHEN status = 1 THEN 'Disable'
                END AS status,
                CONCAT(`time_in`,' - ', `time_out`) AS schedule");
        $this->localdb->from('chr_users us');
        $this->localdb->join('chr_schedules sch', 'sch.id=us.schedule_id', 'inner');
        // $this->localdb->where('is_active', 0);
        $this->localdb->where('us.is_deleted', 0);
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
                    $order_by = "us.`id`";
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
        $this->localdb->where('us.status', 0);
        $this->localdb->where('us.is_deleted', 0);
        $rows_count = $this->localdb->count_all_results("chr_users us");
        if(isset($search["value"]) && $search["value"]!=""):
            $this->localdb->like("fname", $search["value"]);
        endif;
        $this->localdb->where('us.status', 0);
        $this->localdb->where('us.is_deleted', 0);
        $rows_total = $this->localdb->count_all_results("chr_users us");
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
            'fname'         => $data_array['fname'],
            'lname'         => $data_array['lname'],
            'username'      => $data_array['username'],
            'user_type_id'  => $data_array['user_type_id'],  
            'schedule_id'   => $data_array['schedule_id'],  
            'phone'         => $data_array['phone'],
            'cnic'          => $data_array['cnic'],
            'address'       => $data_array['address'],
            'email'         => $data_array['email'],
            'status'        => $data_array['status'],
            'group_id'      => $data_array['group_id'],
            'address'       => $data_array['address'],
            'basic_salary'  => $data_array['basic_salary'],
            'kpi'           => $data_array['kpi'],
            'total_hours'   => $data_array['total_hours'],
            'rate_per_hour' => $data_array['rate_per_hour'],
            //'user_permissions'  => $data_array['arrayChickList'],
            'updated_at'    => date("Y-m-d H:i:s")
        );
        else:
            $data = array(
            'fname'         => $data_array['fname'],
            'lname'         => $data_array['lname'],
            'username'      => $data_array['username'],
            'password'      => md5($data_array['password']),
            'user_type_id'  => $data_array['user_type_id'],  
            'schedule_id'   => $data_array['schedule_id'],  
            'phone'         => $data_array['phone'],
            'cnic'          => $data_array['cnic'],
            'address'       => $data_array['address'],
            'email'         => $data_array['email'],
            'status'        => $data_array['status'],
            'group_id'      => $data_array['group_id'],
            'address'       => $data_array['address'],
            'basic_salary'  => $data_array['basic_salary'],
            'kpi'           => $data_array['kpi'],
            'total_hours'   => $data_array['total_hours'],
            'rate_per_hour' => $data_array['rate_per_hour'],
            //'user_permissions'  => $data_array['arrayChickList'],
            'updated_at'    => date("Y-m-d H:i:s")
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

    
}

?>