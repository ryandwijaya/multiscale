<?php
defined('BASEPATH') OR exit('No direct script access allowed');


    //backend
	$route['admin'] = 'backend/DashboardController';
	$route['admin/kategori'] = 'backend/KategoriController';
	$route['admin/kategori/tambah'] = 'backend/KategoriController/tambah';
	$route['admin/kategori/updateForm/(:any)'] = 'backend/KategoriController/updateForm/$1';
	$route['admin/kategori/update'] = 'backend/KategoriController/update';
	$route['admin/kategori/hapus/(:any)'] = 'backend/KategoriController/hapus/$1';

	$route['admin/produk'] = 'backend/ProdukController';
	$route['admin/produk/tambah'] = 'backend/ProdukController/tambah';
	$route['admin/produk/lihat/(:any)'] = 'backend/ProdukController/lihat/$1';
	$route['admin/produk/update/(:any)'] = 'backend/ProdukController/update/$1';
	$route['admin/produk/hapus/(:any)'] = 'backend/ProdukController/hapus/$1';

	$route['admin/pesan'] = 'backend/PesanController';
	$route['admin/pesan/lihat/(:any)'] = 'backend/PesanController/lihat/$1';

	$route['admin/banner'] = 'backend/BannerController';
	$route['admin/banner/tambah'] = 'backend/BannerController/tambah';
	$route['admin/banner/update/(:any)'] = 'backend/BannerController/update/$1';
	$route['admin/banner/hapus/(:any)'] = 'backend/BannerController/hapus/$1';

	//frontend
			$route['contact'] = 'frontend/ContactController/index';
			$route['contact/send'] = 'frontend/ContactController/send_pesan';

			//produk
			$route['produk/(:any)'] = 'frontend/ProductController/produk/$1';

  	
  	//default

  	$route['login'] = 'AuthController/index';
  	$route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

