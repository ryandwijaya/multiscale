<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    //backend
    $route['admin'] = 'backend/DashboardController';

    $route['admin/kategori'] = 'backend/KategoriController';

    $route['admin/produk'] = 'backend/ProdukController';

	$route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

