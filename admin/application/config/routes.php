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
|	https://codeigniter.com/user_guide/general/routing.html
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
// $route['default_controller']               = 'Customer_interface_c';
$route['customerformetail/(:any)']               = 'Customer_interface_c/customerformdetailindex/$1';
$route['customerBooking/(:any)']                 = 'Customer_interface_c/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['Booking-detail/savebuktipembayaran']     = 'Customer_interface_c/savebuktipembayaran';

// my_controller
// $route['Global/get_branch']					    	= 'MY_Controller/get_branch';

// admin interface
$route['default_controller']              = 'C_dashboard';
$route['admin']					    				      = 'C_dashboard';

$route['user_delete/(:any)']              = 'C_user/user_delete/$1';
$route['user_list']									      = 'C_user';
$route['user_form']					 				      = 'C_user/user_form';
$route['user_form_edit/(:any)']           = 'C_user/user_edit/$1';

$route['user_type_list']									= 'C_user_type';
$route['user_type_form']					 				= 'C_user_type/user_type_form';
$route['user_type_form_edit/(:num)']      = 'C_user_type/user_type_edit/$1';

$route['jadwal-majelis-ilmu']             = 'C_jadwal_majelis_ilmu';
$route['Berita']                          = 'C_berita';
$route['Berita-Form']                     = 'C_berita/berita_form';
$route['Berita-Edit/(:num)']              = 'C_berita/berita_edit/$1';

$route['Pegawai']                         = 'C_m_pegawai';
$route['Pegawai-Form']                    = 'C_m_pegawai/pegawai_form';
$route['Pegawai-Edit/(:num)']             = 'C_m_pegawai/pegawai_edit/$1';

$route['Kajian']                          = 'C_kajian';
$route['Kajian-Form']                     = 'C_kajian/kajian_form';
$route['Kajian-Edit/(:num)']              = 'C_kajian/kajian_edit/$1';
$route['kajian-detail/(:num)']            = 'C_kajian/kajian_edit/$1';

$route['Majelisilmu']                     = 'C_majelisilmu';
$route['Majelisilmu-Form']                = 'C_majelisilmu/majelisilmu_form';
$route['Majelisilmu-Edit/(:num)']         = 'C_majelisilmu/majelisilmu_edit/$1';

$route['Kabar Ad-Darajat']                     = 'C_kabar_addarajat';
$route['Kabar Ad-Darajat-Form']                = 'C_kabar_addarajat/kabar_addarajat_form';
$route['Kabar Ad-Darajat-Edit/(:num)']         = 'C_kabar_addarajat/kabar_addarajat_edit/$1';
