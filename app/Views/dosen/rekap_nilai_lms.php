<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1 class="">Rekap Nilai LMS</h1>
            <div>
                <a target="_blank" href="<?= base_url(); ?>/excel_template/template_nilai_subcpmk.xlsx" class="btn btn-success"><i class="far fa-edit"></i> | Download Rekap</a>
                <!-- <button class="btn btn-primary"><i class="fa fa-upload"></i> | Unggah Nilai</button> -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table style="font-size: 11px;" class="table table-striped" id="table-2">
                        <thead class="bg-success">
                            <tr>
                                <th class="text-center text-white"">
                                    #
                                </th>
                                <th class=" text-white">NIM</th>
                                <th class="text-white">Nama Mahasiswa</th>
                                <th class="text-white">Tugas (cpmk1.2)</th>
                                <th class="text-white">Quiz (cpmk3.4)</th>
                                <th class="text-white">Tugas (cpmk4.1)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>D600160126</td>
                                <td class="">
                                    Dani Setyawan
                                </td>
                                <td>
                                    56
                                </td>
                                <td>
                                    20
                                </td>
                                <td>
                                    99
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>D600160125</td>
                                <td class="">
                                    Purwo Setiawan
                                </td>
                                <td>
                                    80
                                </td>
                                <td>
                                    80
                                </td>
                                <td>
                                    80
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>