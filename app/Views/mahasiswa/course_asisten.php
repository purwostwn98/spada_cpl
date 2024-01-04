<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary"><i>Course</i> Asisten Dosen</h1>
        </div>
        <article class="article article-style-c">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="article-header">
                        <div class="article-image mt-3" data-background="<?= base_url(); ?>/assets/img/cover_course/listrik.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="article-details">
                        <div class="row">
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bars"></i> | Aktivitas
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="/dosen/rekap-nilai-lms/kdmk"><i class="far fa-file"></i>Rekap nilai LMS</a>
                                        <!-- <a class="dropdown-item has-icon" href="/dosen/metode-nilai/kdmk"><i class="fa fa-cog"></i>Sumber penilaian</a> -->
                                        <a class="dropdown-item has-icon" href="/dosen/input-nilai/kdmk"><i class="far fa-edit"></i>Input nilai Sub-CPMK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-keyboard" aria-hidden="true"></i> | Laporan
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="/dosen/eval-cpl/kdmk"><i class="fa fa-signal" aria-hidden="true"></i>Evaluasi MK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-0">
                        <div class="article-title mt-0">
                            <h1 class="m-0"><a href="#">ECE3231256 - Analisis Sistem Tenaga Listrik</a></h1>
                            <span class="pt-0">Program Studi Teknik Elektro</span>
                        </div>
                        <div id="bodydesc" style="margin-left:auto; margin-right:auto; height: 50px; overflow-y: scroll;">
                            <p id="desc" style="float:left; font-size:12px">
                                Mata kuliah ini mengajarkan tentang konsep sistem jaringan 3 fase, analisa diagram reaktansi, perhitungan perunit, analisa aliran beban dengan metode gauss Seidel dan metode Newton Rapshon. Mata kuliah ini juga mengajarkan guna studi aliran beban seperti peramalan beban
                            </p>
                        </div>
                        <div class="article-user">
                            <div class="row">
                                <div class="col-6">
                                    <img alt="image" src="<?= base_url(); ?>/assets/img/avatar/avatar-3.png">
                                    <div class="article-user-details">
                                        <div class="user-detail-name">
                                            <a href="#">Ujang Maman</a>
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