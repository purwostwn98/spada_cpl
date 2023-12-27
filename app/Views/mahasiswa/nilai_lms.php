<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1 class="">Rekap Nilai LMS</h1>
            <div>
                ECE3231256 - Analisis Sistem Tenaga Listrik
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table style="font-size: 13px;" class="table table-striped" id="table-2">
                        <thead class="bg-dark">
                            <tr>
                                <th class="text-center text-white"">
                                    #
                                </th>
                                <th class=" text-white">NIM</th>
                                <th class="text-white">Nama Mahasiswa</th>
                                <th class="text-white">Studi Kasus (CPMK 1)</th>
                                <th class="text-white">Quiz (CPMK 2)</th>
                                <th class="text-white">Proyek (CPMK 3)</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>D400160125</td>
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