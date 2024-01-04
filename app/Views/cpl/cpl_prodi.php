<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 3;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Capaian Pembelajaran Lulusan (CPL)</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Program Studi Teknik Elektro</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data CPL</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tahun Kurikulum</label>
                                                <select class="form-control filter-thn" id="flter1" onchange="loadMhs()">
                                                    <option value="is_active" selected>Kurikulum Aktif</option>
                                                    <?php for ($i = $tahun_now; $i > $tahun_min; $i--) { ?>
                                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Program Studi</label>
                                                <select class="form-control select2 filter-prd" name="filter_prd" disabled>
                                                    <option value="" disabled selected></option>
                                                    <?php foreach ($lembaga as $key => $val) { ?>
                                                        <option <?= $val['id_lembaga'] == 'lmbg1002' ? 'selected' : ''; ?> value="<?= $val['id_lembaga']; ?>"><?= $val['nama_prodi']; ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card-body tabel_mstr">
                                            <div class="table-responsive ">
                                                <table class="table table-striped" id="table-10">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" width="10%">
                                                                CPL
                                                            </th>
                                                            <th width="60%">Deskripsi CPL</th>
                                                            <th width="10%">Tahun</th>
                                                            <th width="10%">Status</th>
                                                            <th width="10%">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- <tr>
                                                            <td>
                                                                CPL 1
                                                            </td>
                                                            <td>Mampu menangkap ikan dalam kolam</td>
                                                            <td class="">
                                                                2022
                                                            </td>
                                                            <td>
                                                                <span class="badge badge-success">yes</span>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-sm btn-warning">edit</button>
                                                            </td>
                                                        </tr> -->
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
    <div class="modal01">

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

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
        var tahun = $(".filter-thn").val();

        dataTabel(prodi, tahun);
    }


    function dataTabel(prodi = $(".filter-prd").val(), tahun = $(".filter-thn").val()) {
        nomor = 0;

        $('#table-10').DataTable({
            destroy: true,
            "ajax": {
                url: "<?= base_url('dinamis/load-mstr-cpl'); ?>",
                type: "POST",
                data: {
                    prodi: prodi,
                    tahun: tahun
                },
            },
            "columns": [{
                    data: "nomor_cpl"
                },
                {
                    data: "deskripsi"
                },
                {
                    data: "tahun"
                },
                {
                    data: "status"
                },
                {
                    "mData": null,
                    "bSortable": false,
                    "mRender": function(data, type, full) {
                        return '<button value="' + full['id_cpl'] + '" class="btn btn-sm btn-warning" onclick="editCPL(this.value);">edit</button>';
                    },
                }
            ],
        })
    }
</script>

<script>
    function editCPL(id_cpl) {
        $.ajax({
            url: "<?= site_url('dinamis/load-modal-cpl'); ?>",
            type: "POST",
            dataType: "json",
            data: {
                id_cpl: id_cpl
            },
            dataType: "json",
            beforeSend: function() {
                // $('.btn-simpan').prop('disabled', true);
                // $('.btn-simpan').html('<i class="fa fa-spin fa-spinner"></i> Mohon tunggu ...');
                // $('.tabelrekap').html('');
            },
            complete: function() {
                // $('.btn-update').prop('disabled', false);
                // $('.btn-update').html('<i class="fa fa-save text-white"></i> | Update CPL');
            },
            success: function(response) {
                $(".modal01").html(response.data);
                $(".bd-example-modal-lg").modal('show');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        return false;
    }
</script>


<?= $this->endSection(); ?>