<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Spada - UMS</title>
    <link rel="icon" type="image/png" href="<?= base_url(); ?>/assets/img/logo_web.png">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- CSS Data Tables -->
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/select2/dist/css/select2.min.css">

    <!-- CSS Statistic (chart)-->
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/flag-icon-css/css/flag-icon.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
</head>

<?php
$session = \Config\Services::session();
$userSession = $session->get('userdata');
$jabatan = $userSession['kode_jabatan'];
$kaprodi = $userSession['kaprodi'];
?>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi,

                                <?php if ($jabatan == 1) {
                                    echo "Admin";
                                } elseif ($jabatan == 8) {
                                    if ($kaprodi == 1) {
                                        echo "Kaprodi";
                                    } else {
                                        echo "Dosen";
                                    }
                                } elseif ($jabatan == 10) {
                                    echo "Mahasiswa";
                                } ?>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/logout" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-dark">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand ">
                        <a class=" text-primary" href="index.html"><img src="<?= base_url(); ?>/assets/img/logo2.png" alt="logo" width="200"></a>
                        <!-- <a class=" text-primary" href="index.html"><img src="<?= base_url(); ?>/assets/img/logo.png" alt="logo" width="100"></a> -->
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">SPD</a>
                    </div>


                    <?php if ($jabatan == 1) { ?>
                        <ul class="sidebar-menu mt-4">
                            <li class="menu-header">Dashboard</li>
                            <li class="nav-item <?= $halaman[1] == 'home' ? 'active' : ''; ?>">
                                <a href="/home_adm" class="nav-link"><i class="fas fa-hamburger"></i><span>Home</span></a>
                            </li>
                            <li class="menu-header">Course</li>
                            <li class="nav-item <?= $halaman[1] == 'salin-course' ? 'active' : ''; ?>">
                                <a href="/courseadm/salin-course" class="nav-link"><i class="fas fa-book"></i> <span>Salin Course</span></a>
                            </li>
                            <li class="nav-item <?= $halaman[1] == 'buat-course' ? 'active' : ''; ?>">
                                <a href="/courseadm/buat-course" class="nav-link"><i class="fas fa-book"></i> <span>Buat Course</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown"><i class="fas fa-archive"></i> <span>Master Course</span></a>
                            </li>

                            <li class="menu-header">CPL</li>
                            <li class="nav-item <?= $halaman[1] == 'cpl-mhs' ? 'active' : ''; ?>">
                                <a href="/cpl-mhs" class="nav-link"><i class="fas fa-user-graduate"></i> <span>CPL Mahasiswa</span></a>
                            </li>
                            <li class="nav-item <?= $halaman[1] == 'cpl-angkatan' ? 'active' : ''; ?>">
                                <a href="/cpl-angkatan" class="nav-link"><i class="fas fa-users"></i> <span>CPL Angkatan</span></a>
                            </li>
                            <li class="nav-item <?= $halaman[1] == 'cpl-mk' ? 'active' : ''; ?>">
                                <a href="/cpl-mk" class="nav-link"><i class="fas fa-chalkboard-teacher"></i> <span>Eval. CPL MK</span></a>
                            </li>

                            <li class="menu-header">Master Data</li>
                            <li class="nav-item dropdown <?= $halaman[0] == 'master-akademik' ? 'active' : ''; ?>">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data Akademik</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link <?= $halaman[1] == 'master-dsn' ? 'active beep beep-sidebar' : ''; ?>" href="/master-dosen">Dosen</a></li>
                                    <li><a class="nav-link <?= $halaman[1] == 'master-mk' ? 'active beep beep-sidebar' : ''; ?>" href="/master-mk">Mata Kuliah</a></li>
                                    <li><a class="nav-link <?= $halaman[1] == 'master-mhs' ? 'active beep beep-sidebar' : ''; ?>" href="/master-mhs">Mahasiswa</a></li>
                                    <li><a class="nav-link <?= $halaman[1] == 'master-kls' ? 'active beep beep-sidebar' : ''; ?>" href="/master-kls">Kelas Perkuliahan</a></li>
                                    <li><a class="nav-link <?= $halaman[1] == 'master-dsnkls' ? 'active beep beep-sidebar' : ''; ?>" href="/master-dsnkls">Kelas Dosen</a></li>
                                    <li><a class="nav-link <?= $halaman[1] == 'master-krs' ? 'active beep beep-sidebar' : ''; ?>" href="/master-krs">KRS</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown <?= $halaman[0] == 'master-kurikulum' ? 'active' : ''; ?>">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data Kurikulum</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link <?= $halaman[1] == 'master-cpl' ? 'active beep beep-sidebar' : ''; ?>" href="/master-cpl">Master CPL</a></li>
                                    <li><a class="nav-link <?= $halaman[1] == 'master-dtlmk' ? 'active beep beep-sidebar' : ''; ?>" href="/master-dtlmk">Detail MK</a></li>
                                </ul>
                            </li>

                            <li class="menu-header">Setting</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Setting Pengguna</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Admin LMS</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Tim Penjaminan Mutu</span></a>
                            </li>
                        </ul>
                    <?php  } ?>

                    <!-- // Menu dosen -->
                    <?php if ($jabatan == 8) { ?>
                        <ul class="sidebar-menu mt-4">
                            <li class="menu-header">Menu Dosen</li>
                            <li class="nav-item <?= $halaman[1] == 'home' ? 'active' : ''; ?>">
                                <a href="/dosen/home" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
                            </li>
                            <li class="nav-item dropdown <?= $halaman[0] == 'course' ? 'active' : ''; ?>">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Course</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dosen/salin-course" class="nav-link <?= $halaman[1] == 'salin-course' ? 'active beep beep-sidebar' : ''; ?>">Salin Course</a></li>
                                    <li><a href="/dosen/buat-course" class="nav-link <?= $halaman[1] == 'buat-course' ? 'active beep beep-sidebar' : ''; ?>">Buat Course</a></li>
                                    <!-- <li><a href="/dosen/master-mbz" class="nav-link <?= $halaman[1] == 'master-mbz' ? 'active beep beep-sidebar' : ''; ?>">Master Mbz</a></li> -->
                                </ul>
                            </li>

                            <?php if ($kaprodi == 1) { ?>
                                <li class="menu-header">CPL</li>
                                <li class="nav-item <?= $halaman[1] == 'cpl-mhs' ? 'active' : ''; ?>">
                                    <a href="/cpl-mhs" class="nav-link"><i class="fas fa-user-graduate"></i> <span>CPL Mahasiswa</span></a>
                                </li>
                                <li class="nav-item <?= $halaman[1] == 'cpl-angkatan' ? 'active' : ''; ?>">
                                    <a href="/cpl-angkatan" class="nav-link"><i class="fas fa-users"></i> <span>CPL Angkatan</span></a>
                                </li>
                                <li class="nav-item <?= $halaman[1] == 'monitor-mk-pengukur' ? 'active' : ''; ?>">
                                    <a href="/kaprodi/monitor-mk-pengukur" class="nav-link"><i class="fas fa-users"></i> <span>Monitor MK Pengukur</span></a>
                                </li>
                                <li class="nav-item <?= $halaman[1] == 'cpl-mk' ? 'active' : ''; ?>">
                                    <a href="/cpl-mk" class="nav-link"><i class="fas fa-chalkboard-teacher"></i> <span>Eval. CPL MK</span></a>
                                </li>
                                <li class="nav-item <?= $halaman[1] == 'cpl-prodi' ? 'active' : ''; ?>">
                                    <a href="/kaprodi/cpl-prodi" class="nav-link"><i class="fas fa-thumbtack"></i> <span>CPL Prodi</span></a>
                                </li>
                                <li class="nav-item <?= $halaman[1] == 'atur-mk-pengukur' ? 'active' : ''; ?>">
                                    <a href="/atur-mk-pengukur" class="nav-link"><i class="fas fa-wrench"></i> <span>Atur MK Pengukur</span></a>
                                </li>
                                <li class="nav-item <?= $halaman[1] == 'cpl-map' ? 'active' : ''; ?>">
                                    <a href="/cpl-map" class="nav-link"><i class="far fa-compass"></i> <span>CPL Map</span></a>
                                </li>
                            <?php } ?>

                        </ul>
                    <?php } ?>

                    <?php if ($jabatan == 10) { ?>
                        <ul class="sidebar-menu mt-4">
                            <li class="menu-header">Menu Mahasiswa</li>
                            <li class="nav-item <?= $halaman[1] == 'home' ? 'active' : ''; ?>">
                                <a href="/mhs/home" class="nav-link"><i class="fas fa-fire"></i><span>Beranda</span></a>
                            </li>
                            <li class="nav-item <?= $halaman[1] == 'nilai-cpl' ? 'active' : ''; ?>">
                                <a href="/mhs/nilai-cpl" class="nav-link"><i class="fas fa-th-large"></i> <span>Nilai CPL</span></a>
                            </li>


                            <li class="menu-header">Menu Asisten</li>
                            <li class="nav-item <?= $halaman[1] == 'course-asisten' ? 'active' : ''; ?>">
                                <a href="/mhs/course-asisten" class="nav-link"><i class="fas fa-book"></i> <span><i>Course</i></span></a>
                            </li>
                        </ul>
                    <?php } ?>

                    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                            <i class="fas fa-rocket"></i> Panduan SPADA
                        </a>
                    </div>
                </aside>
            </div>

            <!-- Main Content -->

            <?= $this->renderSection("konten"); ?>


            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2024 Spada UMS <div class="bullet"></div> Design By <a href="#">purwostwn</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies data tables -->
    <script src="<?= base_url(); ?>/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

    <!-- JS Libraies select2 -->
    <script src="<?= base_url(); ?>/node_modules/select2/dist/js/select2.full.min.js"></script>

    <!-- JS Libraies statistic -->
    <script src="<?= base_url(); ?>/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>/node_modules/chart.js/dist/Chart.min.js"></script>
    <script src="<?= base_url(); ?>/node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>/node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url(); ?>/node_modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
    <!-- JS Libraies sweet alert -->
    <script src="<?= base_url(); ?>/node_modules/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url(); ?>/assets/js/page/modules-datatables.js"></script>

    <!-- Page Specific JS File sweetalert -->
    <script src="<?= base_url(); ?>/assets/js/page/modules-sweetalert.js"></script>

</body>

</html>