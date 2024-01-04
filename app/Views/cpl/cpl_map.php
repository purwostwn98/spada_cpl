<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 8;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">CPL Map</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-md">
                                <table style="width: 100%; font-size: 13px;" class="table table-responsive table-border-y table-border-x text-dark-m2 text-95 border-y-1 brc-primary-l1">
                                    <thead class="text-white text-uppercase text-center">
                                        <tr class="bg-primary text-white" style="width: 100%;">
                                            <th class="border-0 text-white text-center">No</th>
                                            <th class="border-0 text-white text-center">Kode MK</th>
                                            <th class="border-0 text-white">Mata Kuliah</th>
                                            <th class="border-0 text-white">Sks</th>
                                            <!-- inisiasi jumlah bobot -->
                                            <th class="border-0 text-white">CPl 1</th>
                                            <th class="border-0 text-white">CPl 2</th>
                                            <th class="border-0 text-white">CPl 3</th>
                                            <th class="border-0 text-white">CPl 4</th>
                                            <th class="border-0 text-white">CPl 5</th>
                                            <th class="border-0 text-white">CPl 6</th>
                                            <th class="border-0 text-white">CPl 7</th>
                                            <th class="border-0 text-white">CPl 8</th>
                                            <th class="border-0 text-white">CPl 9</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">1</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231256</td>
                                            <td class="border-0 bgc-secondary-l2">Analisis Sistem Tenaga Listrik</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">15.38</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231225</td>
                                            <td class="border-0 bgc-secondary-l2">Kepemimpinan dan Kewirausahaan</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">12.5</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">15.38</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">3</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231257</td>
                                            <td class="border-0 bgc-secondary-l2">Mesin Listrik</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">1</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">6.25</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">4.35</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">7.69</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">4</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231291</td>
                                            <td class="border-0 bgc-secondary-l2">Kecerdasan Buatan</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">15.38</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">5</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231376</td>
                                            <td class="border-0 bgc-secondary-l2">Robotika</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">12.5</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">40</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">6</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231269</td>
                                            <td class="border-0 bgc-secondary-l2">Sistem Pengolahan Sinyal</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">1</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">4.35</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">20</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">7</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231323</td>
                                            <td class="border-0 bgc-secondary-l2">Dasar Mikroprosesor</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">22.22</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">8</td>
                                            <td class="border-0 bgc-secondary-l2">ECE1231201</td>
                                            <td class="border-0 bgc-secondary-l2">Agama</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">22.22</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">12.5</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">9</td>
                                            <td class="border-0 bgc-secondary-l2">ECE1231219</td>
                                            <td class="border-0 bgc-secondary-l2">Islam dan IPTEKS</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">1</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">11.11</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">6.25</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">4.35</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">10</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231297</td>
                                            <td class="border-0 bgc-secondary-l2">Teknik Tegangan Tinggi</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">20</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">12.5</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">11</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231264</td>
                                            <td class="border-0 bgc-secondary-l2">Komputerisasi Sistem Tenaga Listrik</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">12.5</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">15.38</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">12</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231126</td>
                                            <td class="border-0 bgc-secondary-l2">Praktikum Dasar Teknik Elektro</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">20</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">12.5</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">15.38</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 bgc-secondary-l2 text-center">13</td>
                                            <td class="border-0 bgc-secondary-l2">ECE3231306</td>
                                            <td class="border-0 bgc-secondary-l2">Dasar Pemrograman</td>
                                            <td class="border-0 bgc-secondary-l2 text-center">2</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">20</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">8.7</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">15.38</td>
                                            <td class="border-0 bgc-h-default-l3 text-center bg-info text-white">100</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                            <td class="border-0 bgc-h-default-l3 text-center ">0</td>
                                        </tr>
                                        <tr class="table-border-y">
                                            <td colspan="4" class="border-0 bg-secondary text-dark text-center">Total</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                            <td class="border-0 bg-secondary text-dark text-center">100</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


<?= $this->endSection(); ?>