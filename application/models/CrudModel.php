<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function view_data($table,$order){
    	$this->db->order_by($order,'DESC');
    	return $this->db->get($table)->result_array();
	}

    function view_data_by_id($id,$key,$table){
    	$this->db->where($key,$id);
    	return $this->db->get($table)->row_array();
	}

    function insert($table,$data){
        return $this->db->insert($table,$data);
    }
    function delete($key,$id,$table){
        $this->db->where($key,$id);
        return $this->db->delete($table);
    }
    function update($key,$id,$table,$data){
        $this->db->where($key,$id);
        return $this->db->update($table,$data);
    }
    
}


