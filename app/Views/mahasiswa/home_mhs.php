<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header mb-2">
            <h1 class="text-primary">Beranda</h1>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">

                <div style="border-radius: 10px;" class="form-group row bg-primary p-2 mb-3 mt-0">
                    <label for="inputEmail3" class="col-sm-4 col-form-label text-white form-sm">Pilih semester: </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="inputEmail3" value="6" placeholder="Email">
                    </div>
                </div>

            </div>
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
                                        <a class="dropdown-item has-icon" href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-file-alt"></i><i>Assignment</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-award"></i> | <i>Reports</i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="/mhs/nilai-lms"><i class="far fa-eye"></i>Lihat Nilai LMS</a>
                                        <a class="dropdown-item has-icon" href="/mhs/nilai-subcpmk"><i class="fas fa-folder-open"></i>Lihat Nilai Sub-CPMK</a>
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
                        <!-- <div class="overflow-auto" height="100px">
                            <p style="font-size: 13px;"> Mata kuliah ini mengajarkan tentang konsep sistem jaringan 3 fase, analisa diagram reaktansi, perhitungan perunit, analisa aliran beban dengan metode gauss Seidel dan metode Newton Rapshon. Mata kuliah ini juga mengajarkan guna studi aliran beban seperti peramalan beban</p>
                        </div> -->
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
        <article class="article article-style-c">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="article-header">
                        <div class="article-image mt-3" data-background="<?= base_url(); ?>/assets/img/cover_course/cplus.png">
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
                                        <a class="dropdown-item has-icon" href="/dosen/rekap-nilai-lms/kdmk"><i class="far fa-file-alt"></i>Tugas</a>
                                        <a class="dropdown-item has-icon" href="/dosen/rekap-nilai-lms/kdmk"><i class="fas fa-shapes"></i><i>Quiz</i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-award"></i> | <i>Reports</i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="/mhs/nilai-lms"><i class="far fa-eye"></i>Lihat Nilai LMS</a>
                                        <a class="dropdown-item has-icon" href="/dosen/rekap-nilai-lms/kdmk"><i class="fas fa-folder-open"></i>Lihat Nilai Sub-CPMK</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-0">
                        <div class="article-title mt-0">
                            <h1 class="m-0"><a href="#">ECE3231117 - Praktikum Dasar Pemrograman</a></h1>
                            <span class="pt-0">Program Studi Teknik Elektro</span>
                        </div>
                        <div id="bodydesc" style="margin-left:auto; margin-right:auto; height: 50px; overflow-y: scroll;">

                            <p id="desc" style="float:left; font-size:12px">
                                Praktikum untuk mengenalkan berbagai algoritma dan pemrograman dasar menggunakan Bahasa Pemrograman C
                            </p>

                        </div>
                        <!-- <div class="overflow-auto" height="100px">
                            <p style="font-size: 13px;"> Mata kuliah ini mengajarkan tentang konsep sistem jaringan 3 fase, analisa diagram reaktansi, perhitungan perunit, analisa aliran beban dengan metode gauss Seidel dan metode Newton Rapshon. Mata kuliah ini juga mengajarkan guna studi aliran beban seperti peramalan beban</p>
                        </div> -->
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>ECE3231256 - Analisis Sistem Tenaga Listrik</h4>
                            </div>
                            <div class="card-body">
                                <div id="accordion">
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="false">
                                            <h4 class="mb-0">CPMK 1 (bobot: 20%)</h4>
                                            <span>Mampu menganalisis daya komplex baik satu fase maupun 3 fase setimbang, diagram segaris sistem daya, dan diagram impedansi serta reaktansi sistem daya</span>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion">
                                            <ul>
                                                <li><a href=""><i class="fas fa-business-time"></i> Studi Kasus 1</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion2">
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2" aria-expanded="false">
                                            <h4 class="mb-0">CPMK 2 (bobot: 20%)</h4>
                                            <span>Mampu menghitung besaran satuan volt, amper, ohm dan lainnya dalam bentuk per unit sistem</span>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion2">
                                            <ul>
                                                <li><a href=""><i class="fas fa-bullhorn"></i> Quiz Pengantar</a></li>
                                                <li><a href=""><i class="fas fa-bullhorn"></i> Quiz Pengantar2</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion3">
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3" aria-expanded="false">
                                            <h4 class="mb-0">CPMK 3 (bobot: 35%)</h4>
                                            <span>Mampu menghitung arus, tegangan, jatuh tegangan dan daya pada sistem aliran beban</span>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion3">
                                            <ul>
                                                <li><a href=""><i class="fas fa-business-time"></i> Proyek</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion4">
                                    <div class="accordion">
                                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4" aria-expanded="false">
                                            <h4 class="mb-0">CPMK 4 (bobot: 25%)</h4>
                                            <span>Mampu menggunakan program Etap untuk perhitungan Aliran Beban</span>
                                        </div>
                                        <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion4">
                                            <ul>
                                                <li><a href=""><i class="fas fa-bullhorn"></i> Quiz Perancangan Sirkuit</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>