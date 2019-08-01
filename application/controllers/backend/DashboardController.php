<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        $data = array(
            'page_title' => 'Dashboard',
            'icon_title' => 'fa-home'
        );
        $this->load->view('backend/templates/header',$data);
        $this->load->view('backend/index');
        $this->load->view('backend/templates/footer');
    }
}