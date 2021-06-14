<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'landingpage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Landing Page
$route['login'] = 'landingpage/login';
$route['alumni'] = 'landingpage/alumni';
$route['alumni/detail'] = 'landingpage/detailalumni';
$route['pengumuman'] = 'landingpage/listpengumuman';
$route['detailpengumuman/(:num)'] = 'landingpage/detailpengumuman/$1';
$route['agenda'] = 'landingpage/listagenda';
$route['detailagenda/(:num)'] = 'landingpage/detailagenda/$1';
$route['galeri'] = 'landingpage/listgaleri';
$route['tracerstudy'] = 'landingpage/tracerstudy';
$route['kontakkami'] = 'landingpage/kontakkami';
$route['carinim'] = 'akun/carinim';
$route['carinim/identifikasi'] = 'akun/identifikasi';
$route['bantuan'] = 'landingpage/bantuan';

// Admin routes
$route['admin'] = 'admin_c/index';
$route['admin/dashboard'] = 'admin_c/dashboard';
$route['admin/alumni'] = 'admin_c/alumni';
$route['admin/alumni/edit/:num'] = 'admin_c/editalumni/';
$route['admin/alumni/detail/:num'] = 'admin_c/detail_alumni/';
$route['admin/informasi'] = 'informasi/list';
$route['admin/informasi/add'] = 'informasi/add';
$route['admin/informasi/edit/(:num)'] = 'informasi/edit/$1';
$route['admin/pengaturan/password'] = 'pengaturan/password_admin';
$route['admin/wisuda'] = 'wisuda/list';
$route['admin/wisuda/jadwal/detail'] = 'wisuda/adminjadwaldetail';
$route['admin/wisuda/jadwal/detail/edit'] = 'wisuda/admin_editdetailwisuda';
$route['admin/wisuda/add'] = 'wisuda/tambahwisuda';
$route['admin/wisuda/edit'] = 'wisuda/editwisuda';
$route['admin/wisuda/wisudawan'] = 'wisuda/wisudawan';
$route['admin/galeri'] = 'galeri/list';
$route['admin/galeri/edit/(:num)'] = 'galeri/edit/$1';
$route['admin/galeri/update'] = 'galeri/update';
$route['admin/galeri/tambah'] = 'galeri/tambah';
$route['admin/galeri/delete/(:num)'] = 'galeri/delete/$1';
$route['admin/pesan'] = 'pesan/list';
$route['admin/pesan/detail/(:num)'] = 'pesan/detailpesan/$1';

// Mahasiswa routes
$route['mahasiswa/biodata'] = 'biodata/index';
$route['mahasiswa/biodata/riwayatpekerjaan'] = 'biodata/riwayatpekerjaan';
$route['mahasiswa/biodata/riwayatpekerjaan/tambah'] = 'biodata/tambahpekerjaan';
$route['mahasiswa/biodata/riwayatpekerjaan/edit/(:num)'] = 'biodata/editpekerjaan/$1';
$route['mahasiswa/wisuda'] = 'wisuda/index';
$route['mahasiswa/biodata/edit/(:num)'] = 'biodata/edit/$1';
$route['mahasiswa/alumni'] = 'alumni/index';
$route['mahasiswa/alumni/detail/(:num)'] = 'alumni/detail/$1';
$route['mahasiswa/wisuda/jadwal'] = 'wisuda/jadwal';
$route['mahasiswa/wisuda/jadwal/detail'] = 'wisuda/detailjadwalwisuda';
$route['mahasiswa/wisuda/pendaftaran'] = 'wisuda/pendaftaranwisuda';
$route['mahasiswa/wisuda/choice/(:any)'] = 'wisuda/daftarwisuda/$1';
$route['mahasiswa/wisuda/pendaftaran/kelengkapan'] = 'wisuda/kelengkapan';
$route['mahasiswa/pengaturan/password'] = 'pengaturan/password';
