<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_kategori(){
		$this->db->select('*');
		$this->db->from('neraca_kategori');
		$this->db->order_by('kategori_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_kategori($data){
		$this->db->insert('neraca_kategori', $data);
		return $this->db->affected_rows();
	}

	public function lihat_satu_kategori($id){
		$this->db->select('*');
		$this->db->from('neraca_kategori');
		$this->db->where('kategori_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_kategori($id,$data){
		$this->db->where('kategori_id',$id);
		$this->db->update('neraca_kategori',$data);
		return $this->db->affected_rows();
	}

	public function hapus_kategori($id){
		$this->db->where('kategori_id', $id);
		$this->db->delete('neraca_kategori');
		return $this->db->affected_rows();
	}


}
