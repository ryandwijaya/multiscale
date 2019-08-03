<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('KategoriModel','ProdukModel');
		$this->load->model($model);
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Produk | Neraca Multiscale',
			'page_title' => 'Data Produk',
			'icon_title' => 'fa-balance-scale',
			'produk' => $this->ProdukModel->lihat_produk(),
		);
		$this->load->view('backend/templates/header', $data);
		$this->load->view('backend/produk/index');
		$this->load->view('backend/templates/footer');
	}

	public function tambah()
	{
		if (isset($_POST['simpan'])) {
			$nama = $this->input->post('nama');
			$kategori = $this->input->post('kategori');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');

			$config['upload_path'] = './assets/upload/images/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				var_dump($error);
			} else {
				$foto = $this->upload->data('file_name');

				$data = array(
					'produk_nama' => $nama,
					'produk_kategori' => $kategori,
					'produk_deskripsi' => $deskripsi,
					'produk_harga' => $harga,
					'produk_foto' => $foto
				);

				$simpan = $this->ProdukModel->tambah_produk($data);
				if ($simpan > 0){
					$this->session->set_flashdata('alert', 'success_post');
					redirect('admin/produk');
				} else {
					$this->session->set_flashdata('alert', 'fail_edit');
					redirect('admin/produk');
				}
			}
		} else {
			$data = array(
				'title' => 'Tambah Data Produk | Neraca Multiscale',
				'page_title' => 'Tambah Data Produk',
				'icon_title' => 'fa-balance-scale',
				'kategori' => $this->KategoriModel->lihat_kategori()
			);
			$this->load->view('backend/templates/header', $data);
			$this->load->view('backend/produk/tambah');
			$this->load->view('backend/templates/footer');
		}
	}
}
