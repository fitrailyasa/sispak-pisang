<?php

namespace Config;

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
$routes->get('/dashboard', 'AdminDashboardController::index');

$routes->get('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

$routes->post('/auth/login', 'Auth::doLogin');

// CRUD KERUSAKAN
$routes->get('kerusakan', 'AdminKerusakanController::index', ['filter' => 'Auth']);
$routes->get('kerusakan/create', 'AdminKerusakanController::create', ['filter' => 'Auth']);
$routes->post('kerusakan/store', 'AdminKerusakanController::store', ['as' => 'kerusakan/store'], ['filter' => 'Auth']);
$routes->get('kerusakan/show/(:segment)', 'AdminKerusakanController::show/$1', ['as' => 'kerusakan/show'], ['filter' => 'Auth']);
$routes->get('kerusakan/edit/(:segment)', 'AdminKerusakanController::edit/$1', ['as' => 'kerusakan/edit'], ['filter' => 'Auth']);
$routes->post('kerusakan/update/(:segment)', 'AdminKerusakanController::update/$1', ['as' => 'kerusakan/update'], ['filter' => 'Auth']);
$routes->delete('kerusakan/delete/(:segment)', 'AdminKerusakanController::destroy/$1', ['as' => 'kerusakan/delete'], ['filter' => 'Auth']);

// CRUD GEJALA
$routes->get('gejala', 'AdminGejalaController::index', ['filter' => 'Auth']);
$routes->get('gejala/create', 'AdminGejalaController::create', ['filter' => 'Auth']);
$routes->post('gejala/store', 'AdminGejalaController::store', ['as' => 'gejala/store'], ['filter' => 'Auth']);
$routes->get('gejala/show/(:segment)', 'AdminGejalaController::show/$1', ['as' => 'gejala/show'], ['filter' => 'Auth']);
$routes->get('gejala/edit/(:segment)', 'AdminGejalaController::edit/$1', ['as' => 'gejala/edit'], ['filter' => 'Auth']);
$routes->post('gejala/update/(:segment)', 'AdminGejalaController::update/$1', ['as' => 'gejala/update'], ['filter' => 'Auth']);
$routes->delete('gejala/delete/(:segment)', 'AdminGejalaController::destroy/$1', ['as' => 'gejala/delete'], ['filter' => 'Auth']);

// CRUD RULE
$routes->get('rule', 'AdminRuleController::index', ['filter' => 'Auth']);
$routes->get('rule/create', 'AdminRuleController::create', ['filter' => 'Auth']);
$routes->post('rule/store', 'AdminRuleController::store', ['as' => 'rule/store'], ['filter' => 'Auth']);
$routes->get('rule/show/(:num)', 'AdminRuleController::show/$1', ['as' => 'rule/show'], ['filter' => 'Auth']);
$routes->get('rule/edit/(:num)', 'AdminRuleController::edit/$1', ['as' => 'rule/edit'], ['filter' => 'Auth']);
$routes->post('rule/update/(:num)', 'AdminRuleController::update/$1', ['as' => 'rule/update'], ['filter' => 'Auth']);
$routes->delete('rule/delete/(:num)', 'AdminRuleController::destroy/$1', ['as' => 'rule/delete'], ['filter' => 'Auth']);

// CRUD SOLUSI
$routes->get('solusi', 'AdminSolusiController::index', ['filter' => 'Auth']);
$routes->get('solusi/create', 'AdminSolusiController::create', ['filter' => 'Auth']);
$routes->post('solusi/store', 'AdminSolusiController::store', ['as' => 'solusi/store'], ['filter' => 'Auth']);
$routes->get('solusi/show/(:num)', 'AdminSolusiController::show/$1', ['as' => 'solusi/show'], ['filter' => 'Auth']);
$routes->get('solusi/edit/(:num)', 'AdminSolusiController::edit/$1', ['as' => 'solusi/edit'], ['filter' => 'Auth']);
$routes->post('solusi/update/(:num)', 'AdminSolusiController::update/$1', ['as' => 'solusi/update'], ['filter' => 'Auth']);
$routes->delete('solusi/delete/(:num)', 'AdminSolusiController::destroy/$1', ['as' => 'solusi/delete'], ['filter' => 'Auth']);

// CRUD RIWAYAT
$routes->get('riwayat', 'AdminRiwayatController::index', ['filter' => 'Auth']);
$routes->get('riwayat/show/(:num)', 'AdminRiwayatController::show/$1', ['as' => 'riwayat/show'], ['filter' => 'Auth']);
$routes->delete('riwayat/delete/(:num)', 'AdminRiwayatController::destroy/$1', ['as' => 'riwayat/delete'], ['filter' => 'Auth']);

// DIAGNOSIS
$routes->get('diagnosis', 'DiagnosisController::index', ['as' => 'diagnosis']);
// $routes->post('diagnosis/hasil', 'DiagnosisController::hasil', ['as' => 'diagnosis/hasil']);
// $routes->get('diagnosis/hasil', 'DiagnosisController::hasil', ['as' => 'diagnosis/hasil']);
$routes->match(['get', 'post'], 'diagnosis/hasil', 'DiagnosisController::hasil');

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
