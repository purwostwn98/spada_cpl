<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">My Courses</h1>
        </div>
        <article class="article article-style-c">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="article-header">
                        <div class="article-image" data-background="<?= base_url(); ?>/assets/img/unsplash/eberhard-grossgasteiger-1207565-unsplash.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="article-details">
                        <div class="row">
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars"></i> | Aktifitas
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="/dosen/rekap-nilai-lms/kdmk"><i class="far fa-file"></i> Rekap Nilai LMS</a>
                                        <a class="dropdown-item has-icon" href="/dosen/metode-nilai/kdmk"><i class="fa fa-cog"></i> Sumber Penilaian</a>
                                        <a class="dropdown-item has-icon" href="/dosen/input-nilai/kdmk"><i class="far fa-edit"></i> Input Nilai Subcpmk</a>
                                        <a class="dropdown-item has-icon" href="/dosen/eval-cpl/kdmk"><i class="fa fa-signal" aria-hidden="true"></i> CPL MK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-users"></i> | Peserta
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog" aria-hidden="true"></i> | Setting
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-keyboard" aria-hidden="true"></i> | Reports
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-question" aria-hidden="true"></i> | Question Bank
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-0">
                        <div class="article-title mt-0">
                            <h1 class="m-0"><a href="#">Academic Writing</a></h1>
                            <span class="pt-0">Program Studi Teknik Informatika</span>
                        </div>
                        <p style="font-size: 13px;"> Deskripsi MK diambil dari mykurikulum</p>
                        <div class="article-user">
                            <div class="row">
                                <div class="col-6">
                                    <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-3.png">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a href="#">Agus</a>
                                        </div>
                                        <div class="text-job">Dosen</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-3.png">
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
                </div>
            </div>
        </article>

        <article class="article article-style-c">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="article-header">
                        <div class="article-image" data-background="<?= base_url(); ?>/assets/img/news/img14.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="article-details">
                        <div class="row">
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars"></i> | Aktifitas
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-users"></i> | Peserta
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog" aria-hidden="true"></i> | Setting
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-keyboard" aria-hidden="true"></i> | Reports
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-question" aria-hidden="true"></i> | Question Bank
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Another action</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-clock"></i> Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-0">
                        <div class="article-title mt-0">
                            <h1 class="m-0"><a href="#">Academic Writing</a></h1>
                            <span class="pt-0">Program Studi Teknik Informatika</span>
                        </div>
                        <p style="font-size: 13px;"> Deskripsi MK diambil dari mykurikulum</p>
                        <div class="article-user">
                            <div class="row">
                                <div class="col-6">
                                    <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-3.png">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a href="#">Agus</a>
                                        </div>
                                        <div class="text-job">Dosen</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-3.png">
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
                </div>
            </div>
        </article>
    </section>
</div>
<?= $this->endSection(); ?>