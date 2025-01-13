<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/olim', 'contrololim::index');
$routes->get('/nonolim', 'controlnonolim::index');
$routes->get('/madin', 'controlmadin::index');
$routes->get('/sport', 'controlsport::index');

$routes->get('/login', 'Login::index');
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/lanjutan', 'controladmin::index'); // Route untuk halaman berikutnya
$routes->get('/login/resetLock', 'Login::resetLock');
$routes->get('/regis', 'controlregis::index');

$routes->get('controlsiswa', 'Controlsiswa::index'); // Untuk menampilkan form
$routes->post('controlsiswa/save', 'Controlsiswa::save'); // Untuk menyimpan data

// admin
$routes->get('/admin/siswa', 'AdminSiswaController::index');
$routes->post('/admin/siswa/save', 'AdminSiswaController::save'); // Menambah data
$routes->post('/admin/siswa/update/(:num)', 'AdminSiswaController::update/$1'); // Mengupdate data berdasarkan ID
$routes->get('/admin/siswa/delete/(:num)', 'AdminSiswaController::delete/$1'); // Menghapus data berdasarkan ID




$routes->get('/diniyah', 'controldiniyah::index');
$routes->get('/olim/lelembut', 'Contrololim::lelembut');
$routes->get('/jadwal', 'controljadwal::index');
$routes->get('/halaman(:any)', 'controlhalaman::index/$1');
$routes->get('/cacat', 'controlcacat::index');



// $routes->get('/ekstrakurikuler', 'EkstrakurikulerController::index');
// $routes->get('/ekstrakurikuler', 'EkstrakurikulerController::Namahari');
