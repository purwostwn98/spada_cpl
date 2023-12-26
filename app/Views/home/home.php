<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            90,700
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Mata Kuliah</h4>
                        </div>
                        <div class="card-body">
                            42
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Course</h4>
                        </div>
                        <div class="card-body">
                            5
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Online Users</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12 col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 bg-info pt-2 pb-0 mb-3">
                                <h6 class="text-dark bg-info p-2">Statistik Courses</h6>
                            </div>
                            <div class="col-6 bg-info pt-2 pb-0 mb-3">
                                <div class="form-group bg-info">
                                    <select class="form-control select2 filter-prd" name="filter_prd" onchange="gantiPeriode()">
                                        <option value="20231">2023/2024 Ganjil</option>
                                        <option value="20222">2022/2023 Genap</option>
                                        <option value="20221">2022/2023 Ganjil</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">2,100</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Teknik</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Kedokteran</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Keguruan dan Ilmu Pendidikan</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">884</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Hukum</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">473</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Komunikasi dan Informatika</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">418</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Agama Islam</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="text-small float-right font-weight-bold text-muted">418</div>
                            <div class="font-weight-bold mb-1 text-primary">Fakultas Farmasi</div>
                            <div class="progress" data-height="3">
                                <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-1.png" alt="avatar">
                                <div class="media-body">
                                    <div class="badge badge-pill badge-success mb-1 float-right">Now</div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <span class="text-small text-muted">Teknik Industri</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                                <div class="media-body">
                                    <div class="badge badge-pill badge-success mb-1 float-right">12m</div>
                                    <div class="media-title">Purwo Setiawan</div>
                                    <span class="text-small text-muted">Teknik Informatika</span>
                                </div>
                            </li>
                            <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-2.png" alt="avatar">
                                <div class="media-body">
                                    <div class="badge badge-pill badge-success mb-1 float-right">15m</div>
                                    <div class="media-title">Wuryanto</div>
                                    <span class="text-small text-muted">Magister Informatika</span>
                                </div>
                            </li>

                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="#" class="btn btn-primary btn-lg btn-round">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="../assets/img/news/img14.jpg">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category"><a href="#"></a>
                            <div class="bullet"></div> <a href="#">S1 Teknik Informatika</a>
                        </div>
                        <div class="article-title">
                            <h2><a href="#">Academic Writing</a></h2>
                        </div>
                        <p> -- </p>
                        <div class="article-user">
                            <div class="row">
                                <div class="col-6">
                                    <img alt="image" src="../assets/img/avatar/avatar-3.png">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a href="#">Agus</a>
                                        </div>
                                        <div class="text-job">Dosen</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img alt="image" src="../assets/img/avatar/avatar-3.png">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a href="#">Dewi Candraningrum</a>
                                        </div>
                                        <div class="text-job">Dosen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="../assets/img/news/img14.jpg">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category"><a href="#"></a>
                            <div class="bullet"></div> <a href="#">S1 Teknik Informatika</a>
                        </div>
                        <div class="article-title">
                            <h2><a href="#">Administrasi Jaringan Komputer</a></h2>
                        </div>
                        <p> -- </p>
                        <div class="article-user">
                            <img alt="image" src="../assets/img/avatar/avatar-3.png">
                            <div class="article-user-details">
                                <div class="user-detail-name">
                                    <a href="#">Bana Handaga</a>
                                </div>
                                <div class="text-job">Dosen</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="../assets/img/news/img14.jpg">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-category"><a href="#"></a>
                            <div class="bullet"></div> <a href="#">S1 Pendidikan Teknik Informatika </a>
                        </div>
                        <div class="article-title">
                            <h2><a href="#">Algoritma dan Pemrograman</a></h2>
                        </div>
                        <p> -- </p>
                        <div class="article-user">
                            <img alt="image" src="../assets/img/avatar/avatar-3.png">
                            <div class="article-user-details">
                                <div class="user-detail-name">
                                    <a href="#">Husni Thamrin</a>
                                </div>
                                <div class="text-job">Dosen</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>


        </div>

    </section>
</div>
<?= $this->endSection(); ?>