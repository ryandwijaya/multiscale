<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Welcome extends CI_Controller
	{
		
	public function index()
			{
				$this->load->view('backend/templates/header');
				$this->load->view('backend/index');
				$this->load->view('backend/templates/footer');
			}		
		
	}

?>