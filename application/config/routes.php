<?php
defined('BASEPATH') OR exit('No direct script access allowed');

   			//backend
		$route['admin'] = 'backend/DashboardController';    
		$route['admin/kategori'] = 'backend/KategoriController';
		$route['admin/produk'] = 'backend/ProdukController';

  			//frontend
			$route['contact'] = 'frontend/ContactController/index';
			$route['contact/send'] = 'frontend/ContactController/send_pesan';


			$route['product'] = 'frontend/ProductController/index';

  	
  	//default
  	$route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

