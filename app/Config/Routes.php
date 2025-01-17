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

// form
$routes->get('controlsiswa', 'Controlsiswa::index'); // Untuk menampilkan form
$routes->post('controlsiswa/save', 'Controlsiswa::save'); // Untuk menyimpan data

// Routes untuk siswa
$routes->get('/admin/siswa', 'AdminSiswaController::index');
$routes->post('/admin/siswa/save', 'AdminSiswaController::save');
$routes->post('/admin/siswa/update/(:num)', 'AdminSiswaController::update/$1');
$routes->get('/admin/siswa/delete/(:num)', 'AdminSiswaController::delete/$1');

// Routes untuk ekstra
$routes->get('/admin/ekstra', 'AdminekstraController::index');
$routes->post('/admin/ekstra/save', 'AdminSiswaController::saveEkstra');
$routes->post('/admin/ekstra/update/(:num)', 'AdminSiswaController::updateEkstra/$1');
$routes->get('/admin/ekstra/delete/(:num)', 'AdminSiswaController::deleteEkstra/$1');

$routes->get('admin/siswa/print', 'AdminSiswaController::print');
$routes->get('/admin/ekstra/print', 'AdminekstraController::printEkstra');


$routes->get('/diniyah', 'controldiniyah::index');
$routes->get('/olim/lelembut', 'Contrololim::lelembut');
$routes->get('/jadwal', 'controljadwal::index');
$routes->get('/halaman/(:any)', 'controlhalaman::index/$1');
$routes->get('/cacat', 'controlcacat::index');

// Tambahkan route untuk halaman error
$routes->get('/error-page', function () {
    return view('errors/custom_error');
});
