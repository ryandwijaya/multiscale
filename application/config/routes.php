<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
	
	// authentication

	

	$route['dashboard'] = 'backend/DashboardController/index';
	$route['contact'] = 'frontend/ContactController/index';



	$route['default_controller'] = 'Welcome';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

