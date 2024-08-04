<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'dashboard';
$route['404_override'] = 'NotFound';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'auth';
$route['login_proses'] = 'auth/proses';
$route['logout'] = 'auth/logout';

// Master Data 
	// Berkas
$route['master/berkas'] = 'master_data/berkas';
$route['master/berkas/new'] = 'master_data/berkas_new';
$route['master/berkas/delete/(:any)'] = 'master_data/berkas_delete/$1';

	// Tahun Ajaran
$route['master/tahun-ajar'] = 'master_data/tahun_ajaran';
$route['master/tahun-ajar/new'] = 'master_data/tahun_ajaran_new';
$route['master/tahun-ajar/delete/(:any)'] = 'master_data/tahun_ajaran_delete/$1';

	// Institusi
$route['master/institusi'] = 'master_data/institusi';
$route['master/institusi/new'] = 'master_data/institusi_new';
$route['master/institusi/delete/(:any)'] = 'master_data/institusi_delete/$1';

	// Pangkat 
$route['master/pangkat'] = 'master_data/pangkat';
$route['master/pangkat/new'] = 'master_data/pangkat_new';
$route['master/pangkat/delete/(:any)'] = 'master_data/pangkat_delete/$1';

	// Golongan 
$route['master/golongan'] = 'master_data/golongan';
$route['master/golongan/new'] = 'master_data/golongan_new';
$route['master/golongan/delete/(:any)'] = 'master_data/golongan_delete/$1';

	// Jabatan 
$route['master/jabatan'] = 'master_data/jabatan';
$route['master/jabatan/new'] = 'master_data/jabatan_new';
$route['master/jabatan/delete/(:any)'] = 'master_data/jabatan_delete/$1';

	// Provinsi 
$route['master/provinsi'] = 'master_data/provinsi';
$route['master/provinsi/new'] = 'master_data/provinsi_new';
$route['master/provinsi/delete/(:any)'] = 'master_data/provinsi_delete/$1';

// End Master Data 

// Biodata
$route['biodata'] = 'biodata';
$route['biodata/update/(:any)'] = 'biodata/update/$1';

// End Biodata

// Data Dukung
$route['data-dukung'] = 'data_dukung';
$route['data-dukung/new'] = 'data_dukung/new';

// End Data Dukung
