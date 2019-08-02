<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    //backend
  $route['admin'] = 'backend/DashboardController';    
  $route['admin/kategori'] = 'backend/KategoriController';
  $route['admin/kategori/tambah'] = 'backend/KategoriController/tambah';
  $route['admin/kategori/updateForm/(:any)'] = 'backend/KategoriController/updateForm/$1';
  $route['admin/kategori/update'] = 'backend/KategoriController/update';

  $route['admin/produk'] = 'backend/ProdukController';

  //frontend
	$route['contact'] = 'frontend/ContactController/index';
	$route['product'] = 'frontend/ProductController/index';

  $route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

