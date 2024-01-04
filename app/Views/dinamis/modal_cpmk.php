<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-title">
        </div>
        <div class="modal-content">
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4><?= $mk['kode_mk']; ?> - <?= $mk['nama_mk']; ?></h4>
                            </div>
                            <div class="card-body">
                                <?php foreach ($cpmk as $key => $value) { ?>

                                    <div id="accordion-<?= $key; ?>">
                                        <div class="accordion">
                                            <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-<?= $key; ?>" aria-expanded="false">
                                                <h4 class="mb-0">CPMK <?= $value['nomor_cpmk']; ?> (bobot: <?= $value['bobot_cpmk']; ?>% | CPL diukur: <?= implode(',', $cpl_diukur[$value['id_cpmk']]); ?>)</h4>
                                                <span class="mt-0"><?= $value['deskripsi_cpmk']; ?></span>
                                            </div>
                                            <div class="accordion-body collapse" id="panel-body-<?= $key; ?>" data-parent="#accordion-<?= $key; ?>">
                                                <table style="font-size: 12px;" class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <td>sub.1</td>
                                                            <td>Rem nulla magni quod minima architecto totam fugiat a quasi, </td>
                                                            <td>Tes Tertulis</td>
                                                            <td>20%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>sub.2</td>
                                                            <td>Assumenda hic porro, tenetur reiciendis, aliquam commodi provident aut accusamus atque tempore!</td>
                                                            <td>Observasi</td>
                                                            <td>80%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>