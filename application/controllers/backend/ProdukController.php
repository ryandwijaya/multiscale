<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data = array(
            'title' => 'Data Produk | Neraca Multiscale',
            'page_title' => 'Data Produk',
            'icon_title' => 'fa-balance-scale'
        );
        $this->load->view('backend/templates/header',$data);
        $this->load->view('backend/produk/index');
        $this->load->view('backend/templates/footer');
    }
}