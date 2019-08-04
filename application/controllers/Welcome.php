<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller
	{
		
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
        $this->load->model('KategoriModel');

    }

    public function index()
    {
        $data = array(
            'page_title' => 'Data Produk',
            'icon_title' => 'fa-balance-scale',
            'produk' => $this->ProdukModel->lihat_produk(),
            'kategori' => $this->KategoriModel->lihat_kategori(),
        );
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('testt',$data);
        $this->load->view('frontend/templates/footer');
    }
}

?>