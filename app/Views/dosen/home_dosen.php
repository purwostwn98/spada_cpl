<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$session = \Config\Services::session();
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Beranda</h1>
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
                                        <a class="dropdown-item has-icon" href="/dosen/metode-nilai/kdmk"><i class="fa fa-cog"></i>Sumber penilaian</a>
                                        <a class="dropdown-item has-icon" href="/dosen/input-nilai/kdmk"><i class="far fa-edit"></i>Input nilai Sub-CPMK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-users"></i> | Peserta
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-user-plus"></i> Atur peserta manual</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-chalkboard-teacher"></i> Atur dosen</a>
                                        <a class="dropdown-item has-icon" href="#" id="atur_asisten"><i class="fas fa-user-tie"></i> Atur asisten dosen</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-users"></i> <i>Enrolled Users</i></a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-street-view"></i> Atur Grup LMS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog" aria-hidden="true"></i> | Pengaturan
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-pen-square"></i> Atur course </a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-archive"></i> <i>Backup course</i></a>
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
                            <!-- <div class="col-lg-2 col-sm-12">
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
                            </div> -->
                        </div>
                        <hr class="mb-0">
                        <div class="article-title mt-0">
                            <h1 class="m-0"><a target="_blank" href="http://learnmoodle.com/course/view.php?id=4&token=<?= $userSession = $session->get('token_moodle'); ?>">ECE3231256 - Analisis Sistem Tenaga Listrik</a></h1>
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
                                        <a class="dropdown-item has-icon" href="/dosen/rekap-nilai-lms/kdmk"><i class="far fa-file"></i>Rekap nilai LMS</a>
                                        <a class="dropdown-item has-icon" href="/dosen/metode-nilai/kdmk"><i class="fa fa-cog"></i>Sumber penilaian</a>
                                        <a class="dropdown-item has-icon" href="/dosen/input-nilai/kdmk"><i class="far fa-edit"></i>Input nilai Sub-CPMK</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-users"></i> | Peserta
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-user-plus"></i> Atur peserta manual</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-chalkboard-teacher"></i> Atur dosen</a>
                                        <a class="dropdown-item has-icon" href="#" id="atur_asisten"><i class="fas fa-user-tie"></i> Atur asisten dosen</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-users"></i> <i>Enrolled Users</i></a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-street-view"></i> Atur Grup LMS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-12">
                                <div class="dropdown d-inline">
                                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog" aria-hidden="true"></i> | Pengaturan
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-pen-square"></i> Atur course </a>
                                        <a class="dropdown-item has-icon" href="#"><i class="fas fa-archive"></i> <i>Backup course</i></a>
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
                            <!-- <div class="col-lg-2 col-sm-12">
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
                            </div> -->
                        </div>
                        <hr class="mb-0">
                        <div class="article-title mt-0">
                            <h1 class="m-0"><a href="http://learnmoodle.com/course/view.php?id=4&token=<?= $userSession = $session->get('token_moodle'); ?>">ECE3231117 - Praktikum Dasar Pemrograman</a></h1>
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

<div class="modal01">

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Ketika link dengan id 'link' diklik
        $("#atur_asisten").on("click", function(e) {
            e.preventDefault(); // Mencegah perilaku default dari elemen <a> untuk mengarahkan langsung ke '#'

            // Redirect ke halaman web tertentu (ganti 'URL_HALAMAN' dengan URL yang diinginkan)
            // window.location.href = 'URL_HALAMAN';
            $.ajax({
                url: "<?= site_url('dinamis/load-atur-asisten'); ?>",
                type: "POST",
                dataType: "json",
                data: {
                    id_mk: "id_mk"
                },
                dataType: "json",
                beforeSend: function() {},
                complete: function() {},
                success: function(response) {
                    $(".modal01").html(response.data);
                    $(".bd-example-modal-lg").modal('show');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</script>
<?= $this->endSection(); ?>