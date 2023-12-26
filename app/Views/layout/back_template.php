<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Components &rsaquo; Hero &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Data Tables -->
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/node_modules/select2/dist/css/select2.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/components.css">
</head>

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
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
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
                    <?php
                    $session = \Config\Services::session();
                    $userSession = $session->get('userdata');
                    $jabatan = $userSession['kode_jabatan'];
                    ?>


                    <?php if ($jabatan == 1) { ?>
                        <ul class="sidebar-menu mt-4">
                            <li class="menu-header">Dashboard</li>
                            <li class="nav-item <?= $halaman[1] == 'home' ? 'active' : ''; ?>">
                                <a href="/" class="nav-link"><i class="fas fa-fire"></i><span>Home</span></a>
                            </li>
                            <li class="menu-header">Course</li>
                            <li class="nav-item <?= $halaman[1] == 'semua-course' ? 'active' : ''; ?>">
                                <a href="/courseadm/semua-course" class="nav-link"><i class="fas fa-columns"></i> <span>Semua Course</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Course</span></a>
                            </li>

                            <li class="menu-header">CPL</li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>CPL Mahasiswa</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>CPL Angkatan</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Eval. CPL MK</span></a>
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


                    <?php if ($jabatan == 8) { ?>
                        <ul class="sidebar-menu mt-4">
                            <li class="menu-header">Menu Dosen</li>
                            <li class="nav-item <?= $halaman[1] == 'home' ? 'active' : ''; ?>">
                                <a href="/dosen/home" class="nav-link"><i class="fas fa-fire"></i><span>Home</span></a>
                            </li>
                            <li class="nav-item dropdown <?= $halaman[0] == 'course' ? 'active' : ''; ?>">
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Course</span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dosen/salin-course" class="nav-link <?= $halaman[1] == 'salin-course' ? 'active beep beep-sidebar' : ''; ?>">Salin Course</a></li>
                                    <li><a href="/dosen/buat-course" class="nav-link <?= $halaman[1] == 'buat-course' ? 'active beep beep-sidebar' : ''; ?>">Buat Course</a></li>
                                    <li><a href="/dosen/master-mbz" class="nav-link <?= $halaman[1] == 'master-mbz' ? 'active beep beep-sidebar' : ''; ?>">Master Mbz</a></li>
                                </ul>
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

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url(); ?>/assets/js/page/modules-datatables.js"></script>
</body>

</html>