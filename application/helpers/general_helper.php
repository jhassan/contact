<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// Get All users
if ( ! function_exists('get_users'))
{
    function get_users()
    {
        $ci=& get_instance();
	    $ci->load->database(); 

	    $sql = "select id, fname, lname from chr_users where user_type_id != 1 and is_deleted = 0"; 
	    $query = $ci->db->query($sql);
	    $row = $query->result();
	    return $row;
    }   
}


