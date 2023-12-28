<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 8;
$session = \Config\Services::session();
$userSession = $session->get('userdata');
$jabatan = $userSession['kode_jabatan'];
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Buat <i>Course</i></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><i>Course</i></div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Semua Course</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-12">

                                            <span>Keterangan</span>
                                            <br>
                                            <span>Halaman ini digunakan untuk membuat <i>course</i> baru bagi dosen pembuat RPS</span>
                                            <ul>
                                                <li>
                                                    <strong class="text-primary">Tombol Buat</strong> digunakan untuk membuat <i>course</i> baru dengan topic yang telah disesuaikan dengan sub-cpmk
                                                </li>
                                                <li>
                                                    <strong class="text-primary">Tombol Konek</strong> digunakan untuk membuat <i>course</i> baru dengan menggunakan <i>course</i> yang sudah dibuat pada periode sebelumnya
                                                </li>
                                                <li>
                                                    <strong class="text-primary">Tombol Unggah</strong> digunakan untuk membuat <i>course</i> baru dengan mengunggah file MBZ hasil <i>backup course</i> dari LMS
                                                </li>
                                                <li>
                                                    <strong class="text-success">Tombol Bagikan</strong> digunakan untuk membagikan master <i>course</i> dengan dosen pengampu lainnya
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Periode</label>
                                                <input type="number" class="form-control filter-thn" value="20201" onchange="gantiPeriode()">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">

                                            <table class="table table-sm table-bordered" id="">
                                                <thead class="bg-dark text-white">
                                                    <tr>
                                                        <th class="text-center">Mata Kuliah</th>
                                                        <th class="text-center">Program Studi</th>
                                                        <?php if ($jabatan == 1) { ?>
                                                            <th class="text-center">Pembuat RPS</th>
                                                        <?php  } ?>
                                                        <th class="text-center">Buat</th>
                                                        <th class="text-center">Konek</th>
                                                        <th class="text-center">Unggah MBZ</th>
                                                        <th class="text-center">Bagikan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ECE3231118 - Praktikum Fisika Listrik</td>
                                                        <td>S1 Teknik Elektro</td>
                                                        <?php if ($jabatan == 1) { ?>
                                                            <td>Ujang Maman, S.T., M.Sc.</td>
                                                        <?php  } ?>
                                                        <td> <button class="btn btn-sm btn-primary" type="button">Buat</button></td>
                                                        <td> <button class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#exampleModal">Konek</button></td>
                                                        <td> <button class="btn btn-sm btn-info" type="button">Unggah</button></td>
                                                        <td> <button class="btn btn-sm btn-success" type="button">Bagikan</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>ECE3231256 - Analisis Sistem Tenaga Listrik</td>
                                                        <td>S1 Teknik Elektro</td>
                                                        <?php if ($jabatan == 1) { ?>
                                                            <td>Huda, S.T., M.Sc.</td>
                                                        <?php  } ?>
                                                        <td> <button class="btn btn-sm btn-primary" type="button">Buat</button></td>
                                                        <td> <button class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#exampleModal">Konek</button></td>
                                                        <td> <button class="btn btn-sm btn-info" type="button">Unggah</button></td>
                                                        <td> <button class="btn btn-sm btn-success" type="button">Bagikan</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal Konek -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i>Course</i> ECE3231256 - Analisis Sistem Tenaga Listrik </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table style="font-size: 13px;" class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Pembuat</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>2022/2023 Gasal</td>
                            <td>Ujang Maman, S.T., M.Sc.</td>
                            <td><button class="btn btn-sm btn-primary">Pilih</button></td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td scope="row">2</td>
                            <td>2021/2022 Gasal</td>
                            <td>Ujang Maman, S.T., M.Sc.</td>
                            <td><button class="btn btn-sm btn-primary">Pilih</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $(".btn-simpan").click(function() {

            $('#pbarsapadaspan').text('0%');
            $('#pbarsapada').css('width', '0%');
            $('#pbarsapada').attr('aria-valuenow', '0');


            var PRODI = Array();
            $('.checkProdi:checked').each(function() {
                PRODI.push($(this).val());
            });
            const ANGKATAN = [];
            $('.checkAngkatan:checked').each(function() {
                ANGKATAN.push($(this).val());
            });
            PRODI_AKT = [];
            PRODI.forEach(myProdi);

            function myProdi(prd, index) {
                for (let i = 0; i < ANGKATAN.length; i++) {
                    PRODI_AKT.push([prd, ANGKATAN[i]]);;
                }
            }

            proses_update()
        });

        var NO = 0;

        function proses_update() {
            var p = NO + 1;
            var persen = (p / PRODI_AKT.length) * 100;
            var csrfName = $('.csrf_pstwn').attr('name'); // CSRF Token name
            var csrfHash = $('.csrf_pstwn').val(); // CSRF hash
            if (NO < PRODI_AKT.length) {
                var prodi = PRODI_AKT[NO][0];
                var angkatan = PRODI_AKT[NO][1];
                $('#pbarsapadaspan').text(persen + '%');
                $('#pbarsapada').css('width', persen + '%');
                $('#pbarsapada').attr('aria-valuenow', persen);
                $.ajax({
                    url: "<?= site_url('master/do-import-mhs'); ?>",
                    type: "POST",
                    dataType: "json",
                    data: {
                        prodi: prodi,
                        angkatan: angkatan,
                        [csrfName]: csrfHash
                    },
                    dataType: "json",
                    beforeSend: function() {
                        $('.btn-simpan').prop('disabled', true);
                        $('.btn-simpan').html('<i class="fa fa-spin fa-spinner"></i> Mohon tunggu ...');
                        // $('.tabelrekap').html('');
                    },
                    complete: function() {
                        // $('.btn-update').prop('disabled', false);
                        // $('.btn-update').html('<i class="fa fa-save text-white"></i> | Update CPL');
                    },
                    success: function(response) {
                        var txt = '<tr><td>' + (NO + 1) + '</td><td>' + response.berhasil.nama_prodi + '</td><td>' + response.berhasil.angkatan + '</td><td align=center>' + response.berhasil.jumlah + '</td></tr>';
                        $('.progress-import').append(txt);
                        NO++;
                        $('.csrf_pstwn').val(response.token);
                        proses_update();
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
                return false;
            } else {
                console.log('selesai')
                $('.btn-simpan').prop('disabled', true);
                $('.btn-simpan').html('Improt Data Siakad');

                $('#pbarsapadaspan').text('100%');
                $('#pbarsapada').css('width', '100%');
                $('#pbarsapada').attr('aria-valuenow', '100');
            }
        }

        dataTabel();

    });
</script>
<script>
    function checkAllAkt(c) {
        $('.checkAngkatan').each(function() {
            $(this).prop('checked', c);
        });
    }

    function checkAllPrd(c) {
        $('.checkProdi').each(function() {
            $(this).prop('checked', c);
        });
    }
</script>

<script>
    function loadMhs() {
        var prodi = $(".filter-prd").val();
        var angkatan = $(".filter-thn").val();

        dataTabel(prodi, angkatan);
    }


    function dataTabel(prodi = $(".filter-prd").val(), angkatan = $(".filter-thn").val()) {
        nomor = 0;
        $('#table-10').DataTable({
            destroy: true,
            "ajax": {
                url: "<?= base_url('dinamis/load-mstr-mahasiswa'); ?>",
                type: "POST",
                data: {
                    prodi: prodi,
                    angkatan: angkatan
                },
            },
            "columns": [{
                    data: 'nomor'
                },
                {
                    data: "nim"
                },
                {
                    data: "nama_mhs"
                },
                {
                    data: "angkatan"
                },
                {
                    data: "nama_prodi"
                },
                {
                    data: "email"
                }
            ],
        })
    }
</script>


<?= $this->endSection(); ?>