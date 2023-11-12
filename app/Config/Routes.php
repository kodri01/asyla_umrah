<?php

namespace Config;

use App\Controllers\AsylaUmrah;
use DeepCopy\Filter\Filter;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');



//guest
$routes->get('/asyla/profil', 'AsylaUmrah::profil');
$routes->get('/asyla/kontak', 'AsylaUmrah::kontak');
$routes->get('/asyla/galeri', 'AsylaUmrah::galeri');
$routes->get('/asyla/testimoni', 'AsylaUmrah::testimoni');
$routes->get('/asyla/paket', 'AsylaUmrah::paket');

//khusus Jemaah
$routes->get('/', 'AsylaUmrah::beranda_jemaah', ['filter' => 'role:user']);
$routes->get('/asyla/profile_jemaah', 'AsylaUmrah::profile_jemaah', ['filter' => 'role:user']);
$routes->get('/asyla/edit_jemaah/(:num)', 'AsylaUmrah::edit_jemaah/$1', ['filter' => 'role:user']);
$routes->post('/asyla/update_jemaah/(:num)', 'AsylaUmrah::update_jemaah/$1', ['filter' => 'role:user']);
$routes->get('/asyla/edit_berkas/(:num)', 'AsylaUmrah::edit_berkas/$1', ['filter' => 'role:user']);
$routes->post('/asyla/update_berkas/(:num)', 'AsylaUmrah::update_berkas/$1', ['filter' => 'role:user']);
$routes->post('/asyla/upload_foto/(:num)', 'AsylaUmrah::upload_foto/$1', ['filter' => 'role:user']);

$routes->get('/asyla/pembayaran', 'AsylaUmrah::pembayaran', ['filter' => 'role:user']);
$routes->get('/asyla/pelunasan', 'AsylaUmrah::pelunasan', ['filter' => 'role:user']);
$routes->post('/asyla/save_pembayaran', 'AsylaUmrah::save_pembayaran', ['filter' => 'role:user']);
$routes->post('/asyla/update_pembayaran/(:num)', 'AsylaUmrah::update_pembayaran/$1', ['filter' => 'role:user']);


$routes->get('/asyla/daftar_jemaah/(:num)', 'AsylaUmrah::daftar_jemaah/$1', ['filter' => 'role:user']);
$routes->post('/asyla/save_jemaah/(:num)', 'AsylaUmrah::save_jemaah/$1', ['filter' => 'role:user']);
$routes->get('/asyla/testimoni_jemaah/(:num)', 'AsylaUmrah::testimoni_jemaah/$1', ['filter' => 'role:user']);
$routes->post('/asyla/save_testimoni/(:num)', 'AsylaUmrah::save_testimoni/$1', ['filter' => 'role:user']);

// // ROUTE KHUSUS ADMIN
// // route data jemaah
$routes->get('/admin/data_jemaah', 'AdminController::data_jemaah', ['filter' => 'role:admin,direktur']);
$routes->get('/admin/jemaah/details/(:num)', 'AdminController::details_jemaah/$1', ['filter' => 'role:admin,direktur']);
$routes->delete('/admin/jemaah/(:num)', 'AdminController::delete_jemaah/$1', ['filter' => 'role:admin']);
$routes->post('/admin/jemaah/update/(:num)', 'AdminController::update_jemaah/$1', ['filter' => 'role:admin']);

// route paket
$routes->get('/admin/paket_umrah', 'AdminController::paket_umrah', ['filter' => 'role:admin']);
$routes->get('/admin/tambah_paket', 'AdminController::tambah_paket', ['filter' => 'role:admin']);
$routes->post('/admin/save_paket', 'AdminController::save_paket', ['filter' => 'role:admin']);
$routes->delete('/admin/paket/(:num)', 'AdminController::delete_paket/$1', ['filter' => 'role:admin']);
$routes->get('/admin/edit_paket/(:num)', 'AdminController::edit_paket/$1', ['filter' => 'role:admin']);
$routes->post('/admin/update_paket/(:num)', 'AdminController::update_paket/$1', ['filter' => 'role:admin']);

// route pembayaran
$routes->get('/admin/pembayaran', 'AdminController::pembayaran', ['filter' => 'role:admin']);
$routes->delete('/admin/pembayaran/(:num)', 'AdminController::delete_pembayaran/$1', ['filter' => 'role:admin']);
$routes->post('/admin/pembayaran/update/(:num)', 'AdminController::update_pembayaran/$1', ['filter' => 'role:admin']);

// route galeri
$routes->get('/admin/galeri', 'AdminController::galeri', ['filter' => 'role:admin']);
$routes->get('/admin/tambah_galeri', 'AdminController::tambah_galeri', ['filter' => 'role:admin']);
$routes->post('/admin/save_galeri', 'AdminController::save_galeri', ['filter' => 'role:admin']);
$routes->delete('/admin/galeri/(:num)', 'AdminController::delete_galeri/$1', ['filter' => 'role:admin']);
$routes->get('/admin/edit_galeri/(:num)', 'AdminController::edit_galeri/$1', ['filter' => 'role:admin']);
$routes->post('/admin/update_galeri/(:num)', 'AdminController::update_galeri/$1', ['filter' => 'role:admin']);

// route testimoni
$routes->get('/admin/testimoni', 'AdminController::testimoni', ['filter' => 'role:admin']);
$routes->delete('/admin/testi/(:num)', 'AdminController::delete_testimoni/$1', ['filter' => 'role:admin']);


// route laporan admin
$routes->get('/admin/laporan_pembayaran', 'AdminController::laporan_pembayaran', ['filter' => 'role:admin,direktur']);
$routes->get('/admin/cetak_pembayaran/(:num)', 'AdminController::cetak_pembayaran/$1', ['filter' => 'role:admin,direktur']);
$routes->get('/admin/laporan_bulanan', 'AdminController::laporan_bulanan', ['filter' => 'role:admin,direktur']);
$routes->get('/admin/cetak_bulanan', 'AdminController::cetak_bulanan', ['filter' => 'role:admin,direktur']);
$routes->get('/admin/laporan_tahunan', 'AdminController::laporan_tahunan', ['filter' => 'role:admin,direktur']);
$routes->get('/admin/cetak_tahunan', 'AdminController::cetak_tahunan', ['filter' => 'role:admin,direktur']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}