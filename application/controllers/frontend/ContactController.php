<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CrudModel');
    }

    public function index()
    {

        $this->load->view('frontend/templates/header');
        $this->load->view('frontend/contact/index');
        $this->load->view('frontend/templates/footer');
    }

    public function send_pesan()
    {

          if (isset($_POST['kirim'])) {
              $isi = [
                  'pesan_nama' => $this->input->post('pesan_nama'),  
                  'pesan_email' => $this->input->post('pesan_email'),  
                  'pesan_isi' => $this->input->post('pesan_isi')  
              ];

            if (count($_POST)>0) {
                $this->CrudModel->insert('neraca_pesan',$isi);
                $this->session->set_flashdata('alert', 'success_mail');
                redirect(site_url('contact'));
            }
          }
    }
    
}
