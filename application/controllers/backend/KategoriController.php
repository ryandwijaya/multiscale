<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data = array(
            'page_title' => 'Data Kategori',
            'icon_title' => 'fa-list'
        );
        $this->load->view('backend/templates/header',$data);
        $this->load->view('backend/kategori/index');
        $this->load->view('backend/templates/footer');
    }
}