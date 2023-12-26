<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/index_auth', 'Auth::index');
$routes->post('/proses-login', 'Auth::proses_login');
$routes->get('/logout', 'Auth::logout');

//Master Akademik
$routes->get('/master-mhs', 'Master::v_mahasiswa');
$routes->post('/master/do-import-mhs', 'Master::do_import_mhs');
$routes->get('/master-dosen', 'Master::v_dosen');
$routes->post('/master/do-import-dsn', 'Master::do_import_dosen');
$routes->get('/master-mk', 'Master::v_mk');
$routes->post('/master/do-import-mk', 'Master::do_import_mk');
$routes->get('/master-kls', 'Master::v_kelas_kuliah');
$routes->post('/master/do-import-kls', 'Master::do_import_kls');
$routes->get('/master-dsnkls', 'Master::v_dosen_kelas');
$routes->post('/master/do-import-dsnkls', 'Master::do_import_dsnkls');
$routes->get('/master-krs', 'Master::v_krs');
$routes->post('/master/do-import-krs', 'Master::do_import_krs');

//Master CPL
$routes->get('/master-cpl', 'Master::v_mstr_cpl');
$routes->get('/master-dtlmk', 'Master::v_detail_mk');

//Halaman dinamis
$routes->post('/dinamis/load-mstr-mahasiswa', 'Dinamis::load_mstr_mahasiswa');
$routes->post('/dinamis/load-mstr-mk', 'Dinamis::load_mstr_mk');
$routes->post('/dinamis/load-mstr-kls', 'Dinamis::load_mstr_kls');
$routes->post('/dinamis/load-mstr-dsnkls', 'Dinamis::load_mstr_dsnkls');
$routes->post('/dinamis/load-mstr-pesertakls', 'Dinamis::load_mstr_pesertakls');
$routes->post('/dinamis/load-modal-cpmk', 'Dinamis::load_modal_cpmk');

$routes->get('/courseadm/semua-course', 'Courseadm::v_semua_course');

$routes->get('/dosen/home', 'Dosen::home');
$routes->get('/dosen/input-nilai/(:any)', 'Dosen::v_input_nilai/$1');
$routes->get('/dosen/metode-nilai/(:any)', 'Dosen::v_metode_nilai/$1');
$routes->get('/dosen/eval-cpl/(:any)', 'Dosen::v_eval_cpl/$1');
$routes->get('/dosen/rekap-nilai-lms/(:any)', 'Dosen::v_rekap_nilai_lms/$1');
$routes->get('/dosen/salin-course', 'Dosen::v_salin_course');
$routes->get('/dosen/buat-course', 'Dosen::v_buat_course');
$routes->get('/dosen/master-mbz', 'Dosen::v_master_mbz');
