<?php

/**
 * 
 */
class User extends CI_Model
{
	
	function user_list($limit,$offset){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id','desc');
        $this->db->limit($limit, $offset);  
		$query = $this->db->get();       	
		return $query->result_array();
		//return $this->db->last_query();
    }
    public function getRecordCount() {
    	$query = $this->db->get('users');
      	$result = $query->num_rows();      
      	return $result;
	}
}