<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BannerController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('CrudModel');
		$this->load->model($model);
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Banner | Neraca Multiscale',
			'page_title' => 'Data Banner',
			'icon_title' => 'fa-picture-o',
			'banner' => $this->CrudModel->view_data('neraca_banner','banner_date_created')
		);
		$this->load->view('backend/templates/header',$data);
		$this->load->view('backend/banner/index',$data);
		$this->load->view('backend/templates/footer');
	}

	public function tambah(){
		if (isset($_POST['simpan'])){
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');

			$config['upload_path'] = './assets/upload/images/banner/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$data = array(
					'banner_foto' => $foto,
					'banner_judul' => $judul,
					'banner_deskripsi' => $deskripsi
				);

				$simpan = $this->CrudModel->insert('neraca_banner',$data);
				if ($simpan > 0){
					$this->session->set_flashdata('alert', 'success_post');
					redirect('admin/banner');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/banner');
				}
			}
		} else {
			$data = array(
				'title' => 'Tambah Data Banner | Neraca Multiscale',
				'page_title' => 'Tambah Data Banner',
				'icon_title' => 'fa-picture-o',
			);
			$this->load->view('backend/templates/header',$data);
			$this->load->view('backend/banner/tambah',$data);
			$this->load->view('backend/templates/footer');
		}
	}

	public function update($id){
		if (isset($_POST['update'])){
			$judul = $this->input->post('judul');
			$deskripsi = $this->input->post('deskripsi');

			$config['upload_path'] = './assets/upload/images/banner/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('foto')) {
				$data = array(
					'banner_judul' => $judul,
					'banner_deskripsi' => $deskripsi
				);

				$update = $this->CrudModel->update('banner_id',$id,'neraca_banner',$data);
				if ($update > 0){
					$this->session->set_flashdata('alert', 'success_change');
					redirect('admin/banner');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/banner');
				}
			} else {
				$foto = $this->upload->data('file_name');

				$data = array(
					'banner_foto' => $foto,
					'banner_judul' => $judul,
					'banner_deskripsi' => $deskripsi
				);

				$update = $this->CrudModel->update('banner_id',$id,'neraca_banner',$data);
				if ($update > 0){
					$this->session->set_flashdata('alert', 'success_change');
					redirect('admin/banner');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/banner');
				}
			}
		} else {
			$data = array(
				'title' => 'Update Data Banner | Neraca Multiscale',
				'page_title' => 'Update Data Banner',
				'icon_title' => 'fa-picture-o',
				'banner' => $this->CrudModel->view_data_by_id($id,'banner_id','neraca_banner')
			);
			$this->load->view('backend/templates/header',$data);
			$this->load->view('backend/banner/update',$data);
			$this->load->view('backend/templates/footer');
		}
	}
}
