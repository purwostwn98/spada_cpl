<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1>Master Dosen</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Master</a></div>
                <div class="breadcrumb-item"><a href="#">Akademik</a></div>
                <div class="breadcrumb-item">Dosen</div>
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
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Data Spada</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped" id="table-1">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">
                                                                        #
                                                                    </th>
                                                                    <th>Nama</th>
                                                                    <th>ID</th>
                                                                    <th>NIDN</th>
                                                                    <th>Email</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($dosen as $key => $val) : ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?= $key + 1; ?>
                                                                        </td>
                                                                        <td><?= $val['nama_dsn']; ?></td>
                                                                        <td><?= $val['id_dsn']; ?></td>
                                                                        <td><?= $val['nidn']; ?></td>
                                                                        <td> <?= $val['email_dsn']; ?></td>
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
                                <?php
                                $tahun_now = date('Y');
                                $tahun_min = $tahun_now - 8;
                                ?>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-12 content-align-center">
                                            <button class="btn btn-warning btn-simpan" type="button">Import Data Siakad</button>
                                        </div>
                                    </div>
                                    <input type="hidden" class="csrf_pstwn" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                    <hr>
                                    <span class="bg-primary text-white p-1 mb-2 t-inpo"></span>
                                    <div class="row mt-2">
                                        <div class="table-responsive col-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>ID</th>
                                                        <th>NIDN</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-body">
                                                    <!-- tambahan data disini -->
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $(".btn-simpan").click(function() {
            var csrfName = $('.csrf_pstwn').attr('name'); // CSRF Token name
            var csrfHash = $('.csrf_pstwn').val(); // CSRF hash
            $.ajax({
                url: "<?= site_url('master/do-import-dsn'); ?>",
                type: "POST",
                dataType: "json",
                data: {
                    data: 'tidakperludata',
                    [csrfName]: csrfHash
                },
                dataType: "json",
                beforeSend: function() {
                    $('.btn-simpan').prop('disabled', true);
                    $('.btn-simpan').html('<i class="fa fa-spin fa-spinner"></i> Mohon tunggu ...');
                },
                complete: function() {
                    //...
                },
                success: function(response) {
                    $(".table-body").html(response.berhasil.html_tabel);
                    $('.csrf_pstwn').val(response.token);
                    $('.t-inpo').html(response.berhasil.jumlah + ' Dosen berhasil ditambahkan');
                    $('.btn-simpan').prop('disabled', false);
                    $('.btn-simpan').html('Import Data Siakad');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</script>

<?= $this->endSection(); ?>