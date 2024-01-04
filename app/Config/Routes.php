<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/home_adm', 'Home::index');

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
$routes->post('/master/do-import-cpl', 'Master::do_import_cpl');
$routes->get('/master-dtlmk', 'Master::v_detail_mk');
$routes->post('/master/do-import-detilmk', 'Master::do_import_detilmk');

//Halaman CPL
$routes->get('/cpl-mhs', 'Cpl::cpl_mhs');
$routes->get('/cpl-angkatan', 'Cpl::cpl_angkatan');
$routes->get('/cpl-mk', 'Cpl::cpl_mk');
$routes->get('/atur-mk-pengukur', 'Cpl::atur_mk_pengukur');
$routes->get('/cpl-map', 'Cpl::cpl_map');

//Halaman dinamis
$routes->post('/dinamis/load-mstr-mahasiswa', 'Dinamis::load_mstr_mahasiswa');
$routes->post('/dinamis/load-mstr-mk', 'Dinamis::load_mstr_mk');
$routes->post('/dinamis/load-mstr-kls', 'Dinamis::load_mstr_kls');
$routes->post('/dinamis/load-mstr-dsnkls', 'Dinamis::load_mstr_dsnkls');
$routes->post('/dinamis/load-mstr-pesertakls', 'Dinamis::load_mstr_pesertakls');
$routes->post('/dinamis/load-modal-cpmk', 'Dinamis::load_modal_cpmk');
$routes->post('/dinamis/load-modal-cpl', 'Dinamis::load_modal_cpl');
$routes->post('/dinamis/load-mstr-cpl', 'Dinamis::load_mstr_cpl');
$routes->post('/dinamis/load-atur-asisten', 'Dinamis::load_modal_aturasisten');

$routes->get('/courseadm/salin-course', 'Courseadm::v_salin_course');
$routes->get('/courseadm/buat-course', 'Courseadm::v_buat_course');

//Halaman Dosen
$routes->get('/dosen/home', 'Dosen::home');
$routes->get('/dosen/input-nilai/(:any)', 'Dosen::v_input_nilai/$1');
$routes->get('/dosen/metode-nilai/(:any)', 'Dosen::v_metode_nilai/$1');
$routes->get('/dosen/eval-cpl/(:any)', 'Dosen::v_eval_cpl/$1');
$routes->get('/dosen/rekap-nilai-lms/(:any)', 'Dosen::v_rekap_nilai_lms/$1');
$routes->get('/dosen/salin-course', 'Dosen::v_salin_course');
$routes->get('/dosen/buat-course', 'Dosen::v_buat_course');
$routes->get('/dosen/master-mbz', 'Dosen::v_master_mbz');

//Halaman Kaprodi
$routes->get('/kaprodi/monitor-mk-pengukur', 'Kaprodi::monitor_mk_pengukur');
$routes->get('/kaprodi/cpl-prodi', 'Kaprodi::v_cpl_prodi');

//Halaman Mahasiswa
$routes->get('/mhs/home', 'Mahasiswa::home');
$routes->get('/mhs/nilai-cpl', 'Mahasiswa::nilai_cpl');
$routes->get('/mhs/nilai-lms', 'Mahasiswa::nilai_lms');
$routes->get('/mhs/nilai-subcpmk', 'Mahasiswa::nilai_subcpmk');
$routes->get('/mhs/course-asisten', 'Mahasiswa::course_asisten');
