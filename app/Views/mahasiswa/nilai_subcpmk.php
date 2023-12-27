<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header justify-content-between">
            <h1 class="">Nilai Sub-CPMK</h1>
            <div>
                ECE3231256 - Analisis Sistem Tenaga Listrik
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive ">
                    <table style="font-size: 11px;" class="table table-striped" id="table-1">
                        <thead class="bg-primary ">
                            <tr>
                                <th rowspan="2" class="text-center text-white"">
                                    #
                                </th>
                                <th rowspan=" 2" class="text-white text-center">NIM</th>
                                <th rowspan="2" class="text-white text-center">Nama Mahasiswa</th>
                                <th colspan="3" class="text-white text-center">CPMK 1</th>
                                <th colspan="2" class="text-white text-center">CPMK 2</th>
                                <th colspan="3" class="text-white text-center">CPMK 3</th>
                                <th colspan="4" class="text-white text-center">CPMK 4</th>
                                <th colspan="4" class="text-white text-center">CPMK 5</th>
                                <th rowspan="2" class="text-white text-center">Nilai Akhir</th>
                            </tr>
                            <tr>
                                <th class="text-white text-center">1</th>
                                <th class="text-white text-center">2</th>
                                <th class="text-white text-center">3</th>
                                <th class="text-white text-center">1</th>
                                <th class="text-white text-center">2</th>
                                <th class="text-white text-center">1</th>
                                <th class="text-white text-center">2</th>
                                <th class="text-white text-center">3</th>
                                <th class="text-white text-center">1</th>
                                <th class="text-white text-center">2</th>
                                <th class="text-white text-center">3</th>
                                <th class="text-white text-center">4</th>
                                <th class="text-white text-center">1</th>
                                <th class="text-white text-center">2</th>
                                <th class="text-white text-center">3</th>
                                <th class="text-white text-center">4</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                <td>
                                    80
                                </td>
                                <td>
                                    80
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    80
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td>
                                    0
                                </td>
                                <td class="bg-secondary text-center">
                                    <b>74</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="text-center bg-primary p-1 text-white">Purwo Setiawan <br> D600160125</p>
                    <table style="font-size: 13px;" class="table">
                        <thead>
                            <tr>
                                <th scope="col">Label</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">CPMK 1.1</td>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">CPMK 1.2</td>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">CPMK 1.3</td>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">CPMK 2.1</td>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">CPMK 2.2</td>
                                <td>
                                    <input type="number">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>