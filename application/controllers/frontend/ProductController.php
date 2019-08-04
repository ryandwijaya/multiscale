<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
        $this->load->model('KategoriModel');
    }

    public function produk($id)
    {
        $data = array(
            'page_title' => 'Data Produk',
            'icon_title' => 'fa-balance-scale',
            'produk' => $this->ProdukModel->lihat_satu_produk($id),
        );
        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/produk/satuan',$data);
        $this->load->view('frontend/templates/footer');
    }
    
}
