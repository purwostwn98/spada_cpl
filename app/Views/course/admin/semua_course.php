<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 8;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Semua Course</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Course</a></div>
                <div class="breadcrumb-item">Semua Course</div>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Periode</label>
                                                <input type="number" class="form-control filter-thn" value="20201" onchange="gantiPeriode()">
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
                                                    <div class="table-responsive table-bordered">
                                                        <table class="table table-stripped" id="">
                                                            <thead>
                                                                <tr>
                                                                    <th>Mata Kuliah</th>
                                                                    <th>Program Studi</th>
                                                                    <th>Dosen</th>
                                                                    <th>Kelas</th>
                                                                    <th>Jml KRS</th>
                                                                    <th>Create</th>
                                                                    <th>Connect</th>
                                                                    <th>Upload MBZ</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php foreach ($jml_mk as $mk => $val) {  ?>
                                                                    <?php foreach ($val['dosen'] as $k => $va) { ?>
                                                                        <?php foreach ($va['kelas'] as $i => $v) { ?>
                                                                            <tr>
                                                                                <?php if (($i == 0) && ($k == 0)) { ?>
                                                                                    <td rowspan="<?= $val['jml_mk']; ?>">
                                                                                        <?= $mk, $k;  ?>
                                                                                    </td>
                                                                                    <td rowspan="<?= $val['jml_mk']; ?>">
                                                                                        <?= $v['kode_prodi']; ?>
                                                                                    </td>
                                                                                <?php  } ?>
                                                                                <?php if ($i == 0) { ?>
                                                                                    <td rowspan="<?= $va['jml_kls']; ?>" class="">
                                                                                        <?= $v['id_dosen']; ?>
                                                                                    </td>
                                                                                <?php  } ?>
                                                                                <td>
                                                                                    <?= $v['kelas_kuliah']; ?>
                                                                                </td>
                                                                                <td><?= $v['jml_peserta']; ?></td>
                                                                                <?php if ($i == 0) { ?>
                                                                                    <td> <button class="btn btn-success" type="button">Create</button></td>
                                                                                    <td> <button class="btn btn-warning" type="button">Connect</button></td>
                                                                                    <td> <button class="btn btn-info" type="button">Upload</button></td>
                                                                                <?php  } ?>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    <?php } ?>

                                                                <?php } ?>

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