<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 8;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Master Mahasiswa</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Master</a></div>
                <div class="breadcrumb-item"><a href="#">Akademik</a></div>
                <div class="breadcrumb-item">Mahasiswa</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Spada</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Import dari Siakad</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Angkatan</label>
                                                <input type="number" class="form-control filter-thn" value="<?= $tahun_max; ?>" onchange="loadMhs()">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Program Studi</label>
                                                <select class="form-control select2 filter-prd" name="filter_prd" onchange="loadMhs()">
                                                    <option value="" disabled selected></option>
                                                    <?php foreach ($lembaga as $key => $val) { ?>
                                                        <option value="<?= $val['kode_prodi']; ?>"><?= $val['nama_prodi']; ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body tabel_mstr">
                                                    <div class="table-responsive ">
                                                        <table class="table table-striped" id="table-10">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">
                                                                        #
                                                                    </th>
                                                                    <th>NIM</th>
                                                                    <th>Nama Mahasiswa</th>
                                                                    <th>Angkatan</th>
                                                                    <th>Program Studi</th>
                                                                    <th>Email</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($mahasiswa as $key => $mhs) : ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?= $key + 1; ?>
                                                                        </td>
                                                                        <td><?= $mhs['nim']; ?></td>
                                                                        <td class="">
                                                                            <?= $mhs['nama_mhs']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $mhs['angkatan']; ?>
                                                                        </td>
                                                                        <td> <?= $mhs['nama_prodi']; ?></td>
                                                                        <td> <?= $mhs['email']; ?></td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <?= form_open("/master/do-import-mhs", ['class' => 'formmhs']);
                                    csrf_field();
                                    ?>
                                    <div class="form container">
                                        <label class="d-block"><strong>Pilih Angkatan</strong></label>

                                        <div class="form-check">
                                            <input class="form-check-input checkAll" onclick="checkAllAkt(this.checked);" type="checkbox" id="checkAllAngkatan" name="checkAllAngkatan" value="#">
                                            <label class="form-check-label" for="checkAllAngkatan">
                                                <b> Pilih Semua Angkatan </b>
                                            </label>
                                        </div>

                                        <div class="row">
                                            <?php for ($i = $tahun_now; $i >= $tahun_min; $i--) { ?>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkAngkatan" type="checkbox" id="<?= $i; ?>" name="pilihangkatan[]" value="<?= $i; ?>">
                                                        <label class="form-check-label" for="<?= $i; ?>">
                                                            Angkatan <?= $i; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <br>
                                        <label class="d-block"><strong>Pilih Prgram Studi</strong></label>
                                        <div class="form-check">
                                            <input class="form-check-input" onclick="checkAllPrd(this.checked);" type="checkbox" id="checkAllProdi" name="checkAllProdi" value="#">
                                            <label class="form-check-label" for="checkAllProdi">
                                                <b> Pilih Semua Program Studi</b>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <?php foreach ($lembaga as $key => $value) { ?>
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input checkProdi" type="checkbox" value="<?= $value['kode_prodi']; ?>" id="<?= $value['kode_prodi']; ?>" name="programstudi[]">
                                                        <label class="form-check-label" for="<?= $value['kode_prodi']; ?>">
                                                            <?= $value['nama_prodi']; ?>
                                                        </label>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-12 content-align-center">
                                                <button class="btn btn-warning btn-simpan" type="button">Import Data Siakad</button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="csrf_pstwn" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                    <?= form_close(); ?>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between mt-auto">
                                                <span class="fw-semibold fs-6 text-gray-400">Process Compleation</span> <span id="pbarsapadaspan" class="fw-bold fs-6">0%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class=" mx-3 w-100 bg-light mb-3" style="height:20px">
                                                <div class="bg-success rounded " role="progressbar" id="pbarsapada" style="width: 0%; height:20px" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="progress-import table table-striped table-responsive">
                                                <tr class="bg-success text-white">
                                                    <th>No</th>
                                                    <th>Program Studi</th>
                                                    <th>Angkatan</th>
                                                    <th>Jml. Simpan</th>
                                                </tr>
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