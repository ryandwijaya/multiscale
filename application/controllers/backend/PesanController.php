<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PesanController extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$model = array('CrudModel');
		$this->load->model($model);
	}

	public function index(){
		$data = array(
			'title' => 'Data Pesan | Neraca Multiscale',
			'page_title' => 'Data Pesan',
			'icon_title' => 'fa-envelope',
			'pesan' => $this->CrudModel->view_data('neraca_pesan','pesan_date_created')
		);
		$this->load->view('backend/templates/header',$data);
		$this->load->view('backend/pesan/index',$data);
		$this->load->view('backend/templates/footer');
	}

	public function lihat($id){
		$data = array(
			'title' => 'Data Pesan | Neraca Multiscale',
			'page_title' => 'Data Pesan',
			'icon_title' => 'fa-envelope',
			'pesan' => $this->CrudModel->view_data_by_id($id,'pesan_id','neraca_pesan')
		);

		$dataPesan = array(
			'pesan_status' => 'baca'
		);
		$this->CrudModel->update('pesan_id',$id,'neraca_pesan',$dataPesan);

		$this->load->view('backend/templates/header',$data);
		$this->load->view('backend/pesan/lihat',$data);
		$this->load->view('backend/templates/footer');
	}

}
