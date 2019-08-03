<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $model = array('KategoriModel');
		$this->load->model($model);
    }

    public function index(){
        $data = array(
            'title' => 'Data Kategori | Neraca Multiscale',
            'page_title' => 'Data Kategori',
            'icon_title' => 'fa-list',
			'kategori' => $this->KategoriModel->lihat_kategori()
        );
        $this->load->view('backend/templates/header',$data);
        $this->load->view('backend/kategori/index',$data);
        $this->load->view('backend/templates/footer');
    }

    public function tambah(){
    	if (isset($_POST['simpan'])){
			$kategori = $this->input->post('kategori');
			$data = array(
				'kategori_nama' => $kategori
			);
			$simpan = $this->KategoriModel->tambah_kategori($data);
			if ($simpan > 0){
				$this->session->set_flashdata('alert', 'success_post');
				redirect('admin/kategori');
			} else {
				$this->session->set_flashdata('alert', 'fail_edit');
				redirect('admin/kategori');
			}
		}
	}

	public function updateForm($id){
		$data = $this->KategoriModel->lihat_satu_kategori($id);
		echo json_encode($data);
	}

	public function update(){
		if (isset($_POST['update'])){
			$id = $this->input->post('kategori_id');
			$kategori = $this->input->post('kategori');
			$data = array(
				'kategori_nama' => $kategori,
			);
			$update = $this->KategoriModel->update_kategori($id,$data);
			if ($update > 0){
				$this->session->set_flashdata('alert', 'success_change');
				redirect('admin/kategori');
			}
			else{
				$this->session->set_flashdata('alert', 'fail_edit');
				redirect('admin/kategori');
			}
		}
	}

	public function hapus($id){
		$hapus = $this->KategoriModel->hapus_kategori($id);
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'success_delete');
			redirect('admin/kategori');
		}else{
			redirect('admin/kategori');
		}
	}
}
