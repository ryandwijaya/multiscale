<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('frontend/templates/header');
        $this->load->view('frontend/product/single_product');
        $this->load->view('frontend/templates/footer');
    }
    
}
