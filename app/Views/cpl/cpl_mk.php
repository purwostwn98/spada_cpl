<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 8;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Evaluasi MK</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Program Studi</label>
                                        <select class="form-control select2 filter-prd" name="filter_prd" onchange="loadMk()">
                                            <option value="" disabled selected></option>
                                            <?php foreach ($lembaga as $key => $val) { ?>
                                                <option <?= $val['id_lembaga'] == 'lmbg1002' ? 'selected' : ''; ?> value="<?= $val['id_lembaga']; ?>"><?= $val['nama_prodi']; ?></option>
                                            <?php  } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Periode</label>
                                        <select class="form-control filter-smt" name="filter_smt" onchange="loadKls()">
                                            <option value="" disabled selected></option>
                                            <?php foreach ($list_periode as $key => $val) { ?>
                                                <option <?= $val['kode_smt'] == $list_periode[0]['kode_smt'] ? 'selected' : ''; ?> value="<?= $val['kode_smt']; ?>"><?= $val['label_smt']; ?></option>
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
                                                            <th>Kode</th>
                                                            <th>Nama</th>
                                                            <th>SKS</th>
                                                            <th>Evaluasi MK</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

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
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        dataTabel();

    });
</script>

<script>
    function loadMk() {
        var prodi = $(".filter-prd").val();
        dataTabel(prodi);
    }


    function dataTabel(prodi = $(".filter-prd").val()) {
        nomor = 0;
        $('#table-10').DataTable({
            destroy: true,
            "ajax": {
                url: "<?= base_url('dinamis/load-mstr-mk'); ?>",
                type: "POST",
                data: {
                    prodi: prodi,
                },
            },
            "columns": [{
                    data: 'nomor'
                },
                {
                    data: "kode_mk"
                },
                {
                    data: "nama_mk"
                },
                {
                    data: "sks_mk"
                },
                {
                    "mData": null,
                    "bSortable": false,
                    "mRender": function(data, type, full) {
                        return '<button class="btn btn-info btn-sm" value="' + full['kode_mk'] + '" onclick="evalMK(this.value);">' + 'detail' + '</button>';
                    },
                }
            ],
        })
    }
</script>

<script>
    function evalMK(params) {
        window.location.href = "/dosen/eval-cpl/" + params;
    }
</script>


<?= $this->endSection(); ?>