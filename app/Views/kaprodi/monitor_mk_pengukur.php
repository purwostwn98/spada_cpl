<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Monitoring MK Pengukur</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Program Studi</label>
                    <select class="form-control select2 filter-prd" name="filter_prd" disabled>
                        <!-- <option value="" disabled selected></option> -->
                        <?php foreach ($lembaga as $key => $val) { ?>
                            <option <?= $val['id_lembaga'] == 'lmbg1002' ? 'selected' : ''; ?> value="<?= $val['kode_prodi']; ?>"><?= $val['nama_prodi']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Angkatan</label>
                    <input type="number" class="form-control filter-thn" value="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>-</label>
                    <button class="btn btn-info w-100"><i class="far fa-eye"></i> | Lihat nilai</button>
                </div>
            </div>

        </div>
        <!-- <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>2018 - Program Studi Teknik Elektro</h4>
                                <div class="card-header-action">
                                    <span>terakhir diupdate pada tanggal 30 Desember 2022 13:00</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart" height="100"></canvas>
                            </div>
                            <div class="card-footer bg-whitesmoke d-flex justify-content-between">
                                <div class="card-footer-action">
                                    <a href="#" class="btn btn-primary">Update CPL</a>
                                    <a href="#" class="btn btn-danger">Ekspor Pdf</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table style="font-size: 10px;" class="table table-bordered bg-white table-responsive">
                            <thead style="color: white;" class="text-center bg-primary">
                                <tr>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">No</th>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">NIM</th>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">Nama Mahasiswa</th>
                                    <th class="text-white" style="vertical-align: middle;" colspan="18">Mata Kuliah Pengukur CPL</th>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">MK tdk terpenuhi</th>
                                </tr>
                                <tr>
                                    <th class="text-white">GEO1221212</th>
                                    <th class="text-white">GEO1221224</th>
                                    <th class="text-white">GEO2221225</th>
                                    <th class="text-white">GEO2221249</th>
                                    <th class="text-white">GEO3221146</th>
                                    <th class="text-white">GEO3221156</th>
                                    <th class="text-white">GEO3221161</th>
                                    <th class="text-white">GEO3221220</th>
                                    <th class="text-white">GEO3221231</th>
                                    <th class="text-white">GEO3221240</th>
                                    <th class="text-white">GEO3221241</th>
                                    <th class="text-white">GEO3221242</th>
                                    <th class="text-white">GEO3221243</th>
                                    <th class="text-white">GEO3221245</th>
                                    <th class="text-white">GEO3221255</th>
                                    <th class="text-white">GEO3221260</th>
                                    <th class="text-white">GEO3221265</th>
                                    <th class="text-white">GEO3221272</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle;">1</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170001</td>
                                    <td style="vertical-align: middle;" class="p-1">APRILIA WIDI ASTUTI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.65</td>
                                    <td style="vertical-align: middle;" class="">69.13</td>
                                    <td style="vertical-align: middle;" class="">59.38</td>
                                    <td style="vertical-align: middle;" class="">64.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.4</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.73</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.36</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.25</td>
                                    <td style="vertical-align: middle;" class="">64.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.4</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">77.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">2</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170002</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITIYA CHANDRA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.67</td>
                                    <td style="vertical-align: middle;" class="">70.85</td>
                                    <td style="vertical-align: middle;" class="">70.98</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.5</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.73</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.5</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">3</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170003</td>
                                    <td style="vertical-align: middle;" class="p-1">OKKY RIZKY ARESTA SURASTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">69.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">4</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170004</td>
                                    <td style="vertical-align: middle;" class="p-1">BAYU KURNIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">5</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170005</td>
                                    <td style="vertical-align: middle;" class="p-1">EKA FITRIYANI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="">65.95</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="">56.97</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">89.12</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.25</td>
                                    <td style="vertical-align: middle;" class="">65.32</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">72.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">6</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170006</td>
                                    <td style="vertical-align: middle;" class="p-1">DAVID FAHRI MAULANA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.64</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.95</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="">60.69</td>
                                    <td style="vertical-align: middle;" class="">87.4</td>
                                    <td style="vertical-align: middle;" class="">84.28</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.5</td>
                                    <td style="vertical-align: middle;" class="">65.24</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">73.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">7</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170007</td>
                                    <td style="vertical-align: middle;" class="p-1">WASKITO RAKHMAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">8</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170008</td>
                                    <td style="vertical-align: middle;" class="p-1">MAHARDHIKA NOOR RAHMADANA PUTRA</td>
                                    <td style="vertical-align: middle;" class="">83</td>
                                    <td style="vertical-align: middle;" class="">56.5</td>
                                    <td style="vertical-align: middle;" class="">73.05</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="">78.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.25</td>
                                    <td style="vertical-align: middle;" class="">67.17</td>
                                    <td style="vertical-align: middle;" class="">88.5</td>
                                    <td style="vertical-align: middle;" class="">81.72</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">78.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">9</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170009</td>
                                    <td style="vertical-align: middle;" class="p-1">RACHMA MUTHIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">10</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170010</td>
                                    <td style="vertical-align: middle;" class="p-1">DITA RAHMI UNTARI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">11</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170011</td>
                                    <td style="vertical-align: middle;" class="p-1">APRILIA KURNIAWATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">12</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170012</td>
                                    <td style="vertical-align: middle;" class="p-1">FANI ADI PRIAMBODO</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">55.25</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.77</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">85.72</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.4</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">72.74</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">77.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">13</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170013</td>
                                    <td style="vertical-align: middle;" class="p-1">HASTRIO YUDHA PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">14</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170014</td>
                                    <td style="vertical-align: middle;" class="p-1">BHAYU SATRIA ANDIPRAYOGO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">15</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170016</td>
                                    <td style="vertical-align: middle;" class="p-1">WINDHI FEBRIANINGSIH</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">72.65</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="">70.3</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">70.29</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">89.32</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.75</td>
                                    <td style="vertical-align: middle;" class="">74.8</td>
                                    <td style="vertical-align: middle;" class="">70.3</td>
                                    <td style="vertical-align: middle;" class="">77.04</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">74.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">16</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170017</td>
                                    <td style="vertical-align: middle;" class="p-1">RIFQI HENDRA SAPUTRA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.25</td>
                                    <td style="vertical-align: middle;" class="">69.73</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">62.05</td>
                                    <td style="vertical-align: middle;" class="">56</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.73</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.25</td>
                                    <td style="vertical-align: middle;" class="">63.12</td>
                                    <td style="vertical-align: middle;" class="">56</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">68.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">17</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170018</td>
                                    <td style="vertical-align: middle;" class="p-1">TAMPAN HARTONO</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.91</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.7</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">60.81</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.16</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.25</td>
                                    <td style="vertical-align: middle;" class="">63.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">69.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">18</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170019</td>
                                    <td style="vertical-align: middle;" class="p-1">SYARIFATUL ULFAH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">73.25</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">69.21</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">80.44</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.75</td>
                                    <td style="vertical-align: middle;" class="">73.8</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">77.04</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">19</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170020</td>
                                    <td style="vertical-align: middle;" class="p-1">MARINI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">20</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170021</td>
                                    <td style="vertical-align: middle;" class="p-1">DESI HARYANI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">21</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170022</td>
                                    <td style="vertical-align: middle;" class="p-1">KHAIRUNNISA HIDAYATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">22</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170023</td>
                                    <td style="vertical-align: middle;" class="p-1">NAOMI DIDA TAMARA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">23</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170024</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYU BUDIATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">24</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170025</td>
                                    <td style="vertical-align: middle;" class="p-1">FITRIA ENDAH LESTARI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">25</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170026</td>
                                    <td style="vertical-align: middle;" class="p-1">ANNISA KESUMA LARASATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">26</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170027</td>
                                    <td style="vertical-align: middle;" class="p-1">DETA APRIMA BR NASUTION</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">27</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170028</td>
                                    <td style="vertical-align: middle;" class="p-1">SEPTI HERDIANTI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">28</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170029</td>
                                    <td style="vertical-align: middle;" class="p-1">ADE SUHERMAN</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.3</td>
                                    <td style="vertical-align: middle;" class="">68.08</td>
                                    <td style="vertical-align: middle;" class="">61.88</td>
                                    <td style="vertical-align: middle;" class="">68.85</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.05</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.5</td>
                                    <td style="vertical-align: middle;" class="">68.44</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">29</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170030</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD LUKMANTO TRICAHYADI</td>
                                    <td style="vertical-align: middle;" class="">83</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.68</td>
                                    <td style="vertical-align: middle;" class="">70.85</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">64.65</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">83.28</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.75</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">73.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">30</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170031</td>
                                    <td style="vertical-align: middle;" class="p-1">CANDIKA FILIL PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.3</td>
                                    <td style="vertical-align: middle;" class="">71.98</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">59.61</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">76.08</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.75</td>
                                    <td style="vertical-align: middle;" class="">72.28</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">31</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170032</td>
                                    <td style="vertical-align: middle;" class="p-1">M TEGAR DIYATJATI UTOMO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">32</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170033</td>
                                    <td style="vertical-align: middle;" class="p-1">DWI INDAH SEPTIARINI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">74.3</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">70.55</td>
                                    <td style="vertical-align: middle;" class="">71.6</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">58.89</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54</td>
                                    <td style="vertical-align: middle;" class="">70.88</td>
                                    <td style="vertical-align: middle;" class="">71.6</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">33</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170035</td>
                                    <td style="vertical-align: middle;" class="p-1">WICAKSONO TRI WISNU PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.74</td>
                                    <td style="vertical-align: middle;" class="">69.73</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">68.45</td>
                                    <td style="vertical-align: middle;" class="">67.6</td>
                                    <td style="vertical-align: middle;" class="">71.75</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.5</td>
                                    <td style="vertical-align: middle;" class="">68.28</td>
                                    <td style="vertical-align: middle;" class="">67.6</td>
                                    <td style="vertical-align: middle;" class="">72.22</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">34</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170036</td>
                                    <td style="vertical-align: middle;" class="p-1">INDAH AYU KUSUMA WARDANI</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">59.05</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">72.7</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="">63.93</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">87.32</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">55</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">35</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170037</td>
                                    <td style="vertical-align: middle;" class="p-1">ANYA SAVIRA CAHYA RIZKY</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">68.3</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">58.29</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">68.3</td>
                                    <td style="vertical-align: middle;" class="">77.04</td>
                                    <td style="vertical-align: middle;" class="">80.2</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">36</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170038</td>
                                    <td style="vertical-align: middle;" class="p-1">AFRIZAL PRIGYA KURNIAWAN</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.62</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">62.35</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.97</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">80.04</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.25</td>
                                    <td style="vertical-align: middle;" class="">62.4</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">74.6</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">37</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170039</td>
                                    <td style="vertical-align: middle;" class="p-1">BERLYTA ROSMAWATI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">56.65</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">76.25</td>
                                    <td style="vertical-align: middle;" class="">71.05</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">77.75</td>
                                    <td style="vertical-align: middle;" class="">67.17</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">87.12</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.75</td>
                                    <td style="vertical-align: middle;" class="">70.96</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">77.62</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">78.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">38</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170040</td>
                                    <td style="vertical-align: middle;" class="p-1">SYAHID NUR KHOTIB</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.63</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">65.5</td>
                                    <td style="vertical-align: middle;" class="">68.15</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="">77.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.97</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">87.12</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">67.88</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="">77.29</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">73.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">39</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170041</td>
                                    <td style="vertical-align: middle;" class="p-1">KASBIJAN DWI BIYANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">40</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170042</td>
                                    <td style="vertical-align: middle;" class="p-1">GESTIA AYU NINGGAR</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">69.73</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">63.75</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">72.45</td>
                                    <td style="vertical-align: middle;" class="">56.37</td>
                                    <td style="vertical-align: middle;" class="">75.9</td>
                                    <td style="vertical-align: middle;" class="">59.24</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">60.25</td>
                                    <td style="vertical-align: middle;" class="">63.52</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">73.26</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">80.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">41</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170044</td>
                                    <td style="vertical-align: middle;" class="p-1">SAKTI DEWA SAPUTRA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">42</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170045</td>
                                    <td style="vertical-align: middle;" class="p-1">THAREQ AKMAL HIBATULLAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">43</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170046</td>
                                    <td style="vertical-align: middle;" class="p-1">CANDRA RESTU AJI PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.45</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.21</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">82.16</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">72.07</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">44</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170047</td>
                                    <td style="vertical-align: middle;" class="p-1">FATIKHA ARDEASARI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">78.13</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="">62.9</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">56.37</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">81.88</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.64</td>
                                    <td style="vertical-align: middle;" class="">60.75</td>
                                    <td style="vertical-align: middle;" class="">63.28</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">75.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">45</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170048</td>
                                    <td style="vertical-align: middle;" class="p-1">AGIP PUTRA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">46</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170049</td>
                                    <td style="vertical-align: middle;" class="p-1">SYIFANA UKARIMA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">58.89</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">86.44</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">47</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170050</td>
                                    <td style="vertical-align: middle;" class="p-1">AGIM BASUNDORO</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.85</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">56.4</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.37</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">74.6</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">73.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.75</td>
                                    <td style="vertical-align: middle;" class="">56.48</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">76.36</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">79.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">48</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170051</td>
                                    <td style="vertical-align: middle;" class="p-1">ROM ERA KRISMON</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">74.95</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">72.45</td>
                                    <td style="vertical-align: middle;" class="">76.1</td>
                                    <td style="vertical-align: middle;" class="">78.05</td>
                                    <td style="vertical-align: middle;" class="">65.61</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">86.48</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">72.24</td>
                                    <td style="vertical-align: middle;" class="">76.1</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">75.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">49</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170052</td>
                                    <td style="vertical-align: middle;" class="p-1">ARIEF ADI RAHARJA</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">63.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25</td>
                                    <td style="vertical-align: middle;" class="">60.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.01</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.88</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">68.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.25</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">67.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">50</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170053</td>
                                    <td style="vertical-align: middle;" class="p-1">RINA MARIANI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">70.85</td>
                                    <td style="vertical-align: middle;" class="">65.13</td>
                                    <td style="vertical-align: middle;" class="">63.85</td>
                                    <td style="vertical-align: middle;" class="">78.7</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.57</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">86.52</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">63.36</td>
                                    <td style="vertical-align: middle;" class="">78.7</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">51</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170054</td>
                                    <td style="vertical-align: middle;" class="p-1">NADA SALSABILA FIRDAUS</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">59.05</td>
                                    <td style="vertical-align: middle;" class="">83.35</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">70.7</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">78.93</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">57.75</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">70.7</td>
                                    <td style="vertical-align: middle;" class="">78.03</td>
                                    <td style="vertical-align: middle;" class="">80.2</td>
                                    <td style="vertical-align: middle;" class="">73.52</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">52</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170055</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYU MAYANG KUSUMA</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">70.35</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">63.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">89.84</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48</td>
                                    <td style="vertical-align: middle;" class="">70.44</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">53</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170056</td>
                                    <td style="vertical-align: middle;" class="p-1">ALMIRA UNZILATUROCHMAH ISMAIL</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">71.98</td>
                                    <td style="vertical-align: middle;" class="">66.38</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">65.01</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">92.56</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">54</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170057</td>
                                    <td style="vertical-align: middle;" class="p-1">IRFANDA HIRMA DWI KARTIKA</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.34</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">59.3</td>
                                    <td style="vertical-align: middle;" class="">67.3</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.97</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">81.12</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49</td>
                                    <td style="vertical-align: middle;" class="">59.36</td>
                                    <td style="vertical-align: middle;" class="">67.3</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">55</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170058</td>
                                    <td style="vertical-align: middle;" class="p-1">TETRIANADHIEF FARIS AKBAR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.6</td>
                                    <td style="vertical-align: middle;" class="">70.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.69</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">85.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.5</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.6</td>
                                    <td style="vertical-align: middle;" class="">71.09</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">70.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">56</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170059</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD NIZAR</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">73.7</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">67.53</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">75.68</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">77.04</td>
                                    <td style="vertical-align: middle;" class="">73.7</td>
                                    <td style="vertical-align: middle;" class="">72.07</td>
                                    <td style="vertical-align: middle;" class="">80.2</td>
                                    <td style="vertical-align: middle;" class="">75.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">57</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170061</td>
                                    <td style="vertical-align: middle;" class="p-1">DWIKI FERY IRAWAN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">65.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.75</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.9</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">81.56</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">75.24</td>
                                    <td style="vertical-align: middle;" class="">55.75</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.9</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">58</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170062</td>
                                    <td style="vertical-align: middle;" class="p-1">MANISHA WIDI INSYAF FANNY</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.38</td>
                                    <td style="vertical-align: middle;" class="">68.88</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">60.9</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">61.29</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">71.52</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.75</td>
                                    <td style="vertical-align: middle;" class="">70.8</td>
                                    <td style="vertical-align: middle;" class="">60.9</td>
                                    <td style="vertical-align: middle;" class="">76.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">59</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170063</td>
                                    <td style="vertical-align: middle;" class="p-1">IKHTIAR FISABILILA RIDANI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.05</td>
                                    <td style="vertical-align: middle;" class="">57.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.38</td>
                                    <td style="vertical-align: middle;" class="">56.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.2</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.2</td>
                                    <td style="vertical-align: middle;" class="">68.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.74</td>
                                    <td style="vertical-align: middle;" class="">57.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.2</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">61.55</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">60</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170064</td>
                                    <td style="vertical-align: middle;" class="p-1">BELINDA KRISDANAWIYAH</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.57</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.4</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">55.5</td>
                                    <td style="vertical-align: middle;" class="">60.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">61</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170065</td>
                                    <td style="vertical-align: middle;" class="p-1">HANDIKA AJI PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.18</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">58.13</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.6</td>
                                    <td style="vertical-align: middle;" class="">76.65</td>
                                    <td style="vertical-align: middle;" class="">58.05</td>
                                    <td style="vertical-align: middle;" class="">75.1</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">67.63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.32</td>
                                    <td style="vertical-align: middle;" class="">74.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.6</td>
                                    <td style="vertical-align: middle;" class="">76.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">62</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170066</td>
                                    <td style="vertical-align: middle;" class="p-1">PANJI BHAKTI NUGRAHA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">64.2</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">55.29</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">58.72</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">65.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">63</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170067</td>
                                    <td style="vertical-align: middle;" class="p-1">DOMAS RIZKY RAMADHAN</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">63.75</td>
                                    <td style="vertical-align: middle;" class="">66.3</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="">55.17</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">84.28</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39</td>
                                    <td style="vertical-align: middle;" class="">66.44</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">64</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170068</td>
                                    <td style="vertical-align: middle;" class="p-1">PUTRA HIDAYAT</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">65</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170069</td>
                                    <td style="vertical-align: middle;" class="p-1">TIARA AGUSTIN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.09</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">86.12</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.75</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">66</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170070</td>
                                    <td style="vertical-align: middle;" class="p-1">YOGA ARIEF SETYA NUGRAHA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">73.03</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">64.7</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.73</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">81.56</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">77.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.75</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">71.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">67</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170071</td>
                                    <td style="vertical-align: middle;" class="p-1">MAULIDA FATKHIYAH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.25</td>
                                    <td style="vertical-align: middle;" class="">83.8</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">74.55</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">68.85</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">77.13</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">77.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">68</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170072</td>
                                    <td style="vertical-align: middle;" class="p-1">ELSA LUSIANA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.37</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">69</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170073</td>
                                    <td style="vertical-align: middle;" class="p-1">NIDIARTI SINTA UTAMI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">81.1</td>
                                    <td style="vertical-align: middle;" class="">71.88</td>
                                    <td style="vertical-align: middle;" class="">78.7</td>
                                    <td style="vertical-align: middle;" class="">87.9</td>
                                    <td style="vertical-align: middle;" class="">80.85</td>
                                    <td style="vertical-align: middle;" class="">77.49</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">80.92</td>
                                    <td style="vertical-align: middle;" class="">92</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="">87.9</td>
                                    <td style="vertical-align: middle;" class="">80.45</td>
                                    <td style="vertical-align: middle;" class="">80.2</td>
                                    <td style="vertical-align: middle;" class="">79.16</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">70</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170074</td>
                                    <td style="vertical-align: middle;" class="p-1">EVANKA VINE AURELY</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.25</td>
                                    <td style="vertical-align: middle;" class="">79.45</td>
                                    <td style="vertical-align: middle;" class="">66.38</td>
                                    <td style="vertical-align: middle;" class="">66.3</td>
                                    <td style="vertical-align: middle;" class="">66.2</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">62.85</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">90.96</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.75</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">66.2</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">75.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">71</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170075</td>
                                    <td style="vertical-align: middle;" class="p-1">ARIH MAHIRA LUPITANINGRUM</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">64.38</td>
                                    <td style="vertical-align: middle;" class="">57.9</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.41</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="">58.48</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">74.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">72</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170077</td>
                                    <td style="vertical-align: middle;" class="p-1">SASKIA RIZKY ANGGRAENY</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.63</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">63.95</td>
                                    <td style="vertical-align: middle;" class="">64.1</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">61.29</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">79.32</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">63.96</td>
                                    <td style="vertical-align: middle;" class="">64.1</td>
                                    <td style="vertical-align: middle;" class="">76.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">73</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170078</td>
                                    <td style="vertical-align: middle;" class="p-1">M HARYO HANIFAH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">58.58</td>
                                    <td style="vertical-align: middle;" class="">61.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.7</td>
                                    <td style="vertical-align: middle;" class="">61.4</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.17</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">80.32</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.6</td>
                                    <td style="vertical-align: middle;" class="">61.4</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">74</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170080</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZKY ASTA JUSMAN</td>
                                    <td style="vertical-align: middle;" class="">73.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.98</td>
                                    <td style="vertical-align: middle;" class="">67.58</td>
                                    <td style="vertical-align: middle;" class="">73.75</td>
                                    <td style="vertical-align: middle;" class="">73.8</td>
                                    <td style="vertical-align: middle;" class="">74.6</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">69.57</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">78.04</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="">77.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.5</td>
                                    <td style="vertical-align: middle;" class="">72.32</td>
                                    <td style="vertical-align: middle;" class="">74.6</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">75</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170081</td>
                                    <td style="vertical-align: middle;" class="p-1">HENGKY SETIAWAN</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">77.75</td>
                                    <td style="vertical-align: middle;" class="">68.75</td>
                                    <td style="vertical-align: middle;" class="">71.65</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">57.45</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">90.92</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="">64.75</td>
                                    <td style="vertical-align: middle;" class="">70.88</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">78.03</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">74.24</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">76</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170082</td>
                                    <td style="vertical-align: middle;" class="p-1">FAWWAZ AGSVI ROZAAN</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.93</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.94</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">70.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">77</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170083</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD ZUKHRIFAN</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">65.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">56.97</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">65.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">78</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170084</td>
                                    <td style="vertical-align: middle;" class="p-1">ABIZAR AGASHY</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.05</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.38</td>
                                    <td style="vertical-align: middle;" class="">66.45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.3</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">58.77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">69.12</td>
                                    <td style="vertical-align: middle;" class="">60.4</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.5</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.3</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">79</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170085</td>
                                    <td style="vertical-align: middle;" class="p-1">DWIKA CANDRA NOVANSYAH</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">67.58</td>
                                    <td style="vertical-align: middle;" class="">58.13</td>
                                    <td style="vertical-align: middle;" class="">62.8</td>
                                    <td style="vertical-align: middle;" class="">56.1</td>
                                    <td style="vertical-align: middle;" class="">77.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.21</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">69.4</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">68.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.5</td>
                                    <td style="vertical-align: middle;" class="">62.36</td>
                                    <td style="vertical-align: middle;" class="">56.1</td>
                                    <td style="vertical-align: middle;" class="">76.86</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">77.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">80</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170086</td>
                                    <td style="vertical-align: middle;" class="p-1">YODI IPAYANTO</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">19.2</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.65</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.64</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">66.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.5</td>
                                    <td style="vertical-align: middle;" class="">65.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.7</td>
                                    <td style="vertical-align: middle;" class="">67.8</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">81</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170087</td>
                                    <td style="vertical-align: middle;" class="p-1">SUSI SARTIKA</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.55</td>
                                    <td style="vertical-align: middle;" class="">60.08</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.93</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">63.04</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.75</td>
                                    <td style="vertical-align: middle;" class="">66.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">82</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170088</td>
                                    <td style="vertical-align: middle;" class="p-1">SELA ASTRALIA FEBRIANI PUTRI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">61.45</td>
                                    <td style="vertical-align: middle;" class="">81.7</td>
                                    <td style="vertical-align: middle;" class="">76.25</td>
                                    <td style="vertical-align: middle;" class="">77.65</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">75.93</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">88.92</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">64.25</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">83</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">83</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170089</td>
                                    <td style="vertical-align: middle;" class="p-1">IHLAS LORDIAN AKBAR</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">65.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.2</td>
                                    <td style="vertical-align: middle;" class="">70.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.09</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">68.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.85</td>
                                    <td style="vertical-align: middle;" class="">66.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.2</td>
                                    <td style="vertical-align: middle;" class="">71.45</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">75.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">84</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170090</td>
                                    <td style="vertical-align: middle;" class="p-1">ALIFIA RAHMA NAFISA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">58.49</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">71.75</td>
                                    <td style="vertical-align: middle;" class="">76.45</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">59.01</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">75.48</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.5</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="">74.22</td>
                                    <td style="vertical-align: middle;" class="">74.6</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">85</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170091</td>
                                    <td style="vertical-align: middle;" class="p-1">VERA RIZKY GUMILAR</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">66.75</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">59.49</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">85.12</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.5</td>
                                    <td style="vertical-align: middle;" class="">66.8</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">86</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170092</td>
                                    <td style="vertical-align: middle;" class="p-1">MIA APRILIA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">67.8</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="">67.63</td>
                                    <td style="vertical-align: middle;" class="">68.9</td>
                                    <td style="vertical-align: middle;" class="">65.9</td>
                                    <td style="vertical-align: middle;" class="">78.85</td>
                                    <td style="vertical-align: middle;" class="">57.69</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">87.52</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">68.32</td>
                                    <td style="vertical-align: middle;" class="">65.9</td>
                                    <td style="vertical-align: middle;" class="">78.69</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">87</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170093</td>
                                    <td style="vertical-align: middle;" class="p-1">BANGKIT EKO PRASETYO</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">19.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.89</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">88</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170094</td>
                                    <td style="vertical-align: middle;" class="p-1">ZAQIA ANANDYA LUTFIA</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">59.45</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">70.13</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">66.69</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">85.92</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52</td>
                                    <td style="vertical-align: middle;" class="">60.76</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">89</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170095</td>
                                    <td style="vertical-align: middle;" class="p-1">RENO TRI PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="">68.05</td>
                                    <td style="vertical-align: middle;" class="">59.9</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">65.49</td>
                                    <td style="vertical-align: middle;" class="">74.8</td>
                                    <td style="vertical-align: middle;" class="">83.44</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">66.76</td>
                                    <td style="vertical-align: middle;" class="">59.9</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">72.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">90</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170096</td>
                                    <td style="vertical-align: middle;" class="p-1">NURKHOLIS YODHA MAHENDRA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="">63.88</td>
                                    <td style="vertical-align: middle;" class="">58.85</td>
                                    <td style="vertical-align: middle;" class="">79.7</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.89</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">86.52</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.5</td>
                                    <td style="vertical-align: middle;" class="">58.44</td>
                                    <td style="vertical-align: middle;" class="">79.7</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">91</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170097</td>
                                    <td style="vertical-align: middle;" class="p-1">MITHA MAHESTI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">57.45</td>
                                    <td style="vertical-align: middle;" class="">79.98</td>
                                    <td style="vertical-align: middle;" class="">73.13</td>
                                    <td style="vertical-align: middle;" class="">74.45</td>
                                    <td style="vertical-align: middle;" class="">84.9</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">66.33</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">86.32</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">63.75</td>
                                    <td style="vertical-align: middle;" class="">73.04</td>
                                    <td style="vertical-align: middle;" class="">84.9</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">92</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170098</td>
                                    <td style="vertical-align: middle;" class="p-1">DELASKA HAEKAL MAHENDRA</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">59.8</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">63.13</td>
                                    <td style="vertical-align: middle;" class="">60.65</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">61.89</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">77.68</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">74.16</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">59.68</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">93</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170099</td>
                                    <td style="vertical-align: middle;" class="p-1">INNU AURA VALLERY</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">66.13</td>
                                    <td style="vertical-align: middle;" class="">62.1</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">64.53</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">80.88</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.25</td>
                                    <td style="vertical-align: middle;" class="">63.92</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">94</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170100</td>
                                    <td style="vertical-align: middle;" class="p-1">VENTURA IMMANUELA TIFFANY SOUMOKIL</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">62.38</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">59.65</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">64.77</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.32</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.65</td>
                                    <td style="vertical-align: middle;" class="">59.52</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">95</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170101</td>
                                    <td style="vertical-align: middle;" class="p-1">FAJAR ARIFIN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.65</td>
                                    <td style="vertical-align: middle;" class="">66.98</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54</td>
                                    <td style="vertical-align: middle;" class="">57.15</td>
                                    <td style="vertical-align: middle;" class="">59.2</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">81.72</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41</td>
                                    <td style="vertical-align: middle;" class="">56.88</td>
                                    <td style="vertical-align: middle;" class="">59.2</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">96</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170102</td>
                                    <td style="vertical-align: middle;" class="p-1">RAHMAT ARIFIN</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18.08</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">60.45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">59.01</td>
                                    <td style="vertical-align: middle;" class="">74.8</td>
                                    <td style="vertical-align: middle;" class="">67.6</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.25</td>
                                    <td style="vertical-align: middle;" class="">61.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">97</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170103</td>
                                    <td style="vertical-align: middle;" class="p-1">SINDI RUAIDA NIKMAH</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">63.65</td>
                                    <td style="vertical-align: middle;" class="">74.9</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">60.81</td>
                                    <td style="vertical-align: middle;" class="">84.4</td>
                                    <td style="vertical-align: middle;" class="">91.56</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.75</td>
                                    <td style="vertical-align: middle;" class="">63.96</td>
                                    <td style="vertical-align: middle;" class="">74.9</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">98</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170104</td>
                                    <td style="vertical-align: middle;" class="p-1">KHOLIDA AULULLIA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">57.05</td>
                                    <td style="vertical-align: middle;" class="">79.45</td>
                                    <td style="vertical-align: middle;" class="">74.13</td>
                                    <td style="vertical-align: middle;" class="">79.9</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">80.85</td>
                                    <td style="vertical-align: middle;" class="">72.81</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.75</td>
                                    <td style="vertical-align: middle;" class="">79.28</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">80.45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">99</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170105</td>
                                    <td style="vertical-align: middle;" class="p-1">YOGA DESCA SURYA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">64.38</td>
                                    <td style="vertical-align: middle;" class="">55.7</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="">77.35</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">83.28</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.75</td>
                                    <td style="vertical-align: middle;" class="">55.68</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="">76.86</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">100</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170106</td>
                                    <td style="vertical-align: middle;" class="p-1">ARMAN SETIYANTO</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.61</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15.8</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">101</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170107</td>
                                    <td style="vertical-align: middle;" class="p-1">MARANDA EKA SUKMA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">70.78</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">60.21</td>
                                    <td style="vertical-align: middle;" class="">74.8</td>
                                    <td style="vertical-align: middle;" class="">72.48</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">59.36</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">76.63</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">75.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">102</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170108</td>
                                    <td style="vertical-align: middle;" class="p-1">WILDAN ABDUL ARROYAN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">71.25</td>
                                    <td style="vertical-align: middle;" class="">66.65</td>
                                    <td style="vertical-align: middle;" class="">68.9</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">65.73</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">74.88</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54</td>
                                    <td style="vertical-align: middle;" class="">65.88</td>
                                    <td style="vertical-align: middle;" class="">68.9</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">69.4</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">103</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170109</td>
                                    <td style="vertical-align: middle;" class="p-1">ICHLASUL MUTHI'</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">64.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.89</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">-1.8</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">63.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">104</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170110</td>
                                    <td style="vertical-align: middle;" class="p-1">BIMO DWI PRASETYO</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.65</td>
                                    <td style="vertical-align: middle;" class="">70.85</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">65.25</td>
                                    <td style="vertical-align: middle;" class="">64.1</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">57.69</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">75.84</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.25</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">64.1</td>
                                    <td style="vertical-align: middle;" class="">76.83</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">105</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170111</td>
                                    <td style="vertical-align: middle;" class="p-1">ALFREDO WIKU CAHYA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">69.9</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">80.15</td>
                                    <td style="vertical-align: middle;" class="">60.33</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">76.92</td>
                                    <td style="vertical-align: middle;" class="">56</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">74.33</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">79.41</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">75.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">106</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170112</td>
                                    <td style="vertical-align: middle;" class="p-1">ARIF BUDIYANTO</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.45</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">64.9</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">75.68</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.25</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="">64.9</td>
                                    <td style="vertical-align: middle;" class="">76.42</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">107</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170113</td>
                                    <td style="vertical-align: middle;" class="p-1">ONY AZIZAH RACHMAWATI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="">66.15</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="">77.35</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">83.72</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.75</td>
                                    <td style="vertical-align: middle;" class="">66.68</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="">76.86</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">79.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">108</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170114</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS PRASETYO</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">68.85</td>
                                    <td style="vertical-align: middle;" class="">61.3</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.29</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">72.68</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">58.25</td>
                                    <td style="vertical-align: middle;" class="">69.4</td>
                                    <td style="vertical-align: middle;" class="">61.3</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">109</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170115</td>
                                    <td style="vertical-align: middle;" class="p-1">PINGKI RETNO SARI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">59.25</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.9</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">57.57</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">68.24</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">74.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.25</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.9</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.6</td>
                                    <td style="vertical-align: middle;" class="">71.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">110</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170116</td>
                                    <td style="vertical-align: middle;" class="p-1">FEBYLA ALIV AULIA PRAMUDITA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">75.3</td>
                                    <td style="vertical-align: middle;" class="">80.85</td>
                                    <td style="vertical-align: middle;" class="">72.69</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="">80.16</td>
                                    <td style="vertical-align: middle;" class="">75.3</td>
                                    <td style="vertical-align: middle;" class="">80.45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">111</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170117</td>
                                    <td style="vertical-align: middle;" class="p-1">HERMOYO PUTRO TAMTOMO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.49</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">112</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170118</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD DAFFA IHSANUDIN</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">60.63</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">77.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.45</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">85.36</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">113</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170119</td>
                                    <td style="vertical-align: middle;" class="p-1">M.THORIQ AFRIJAL MAHANDI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.25</td>
                                    <td style="vertical-align: middle;" class="">66.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.3</td>
                                    <td style="vertical-align: middle;" class="">74.3</td>
                                    <td style="vertical-align: middle;" class="">62.61</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.32</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">67.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.02</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.3</td>
                                    <td style="vertical-align: middle;" class="">74.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">72.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">114</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170120</td>
                                    <td style="vertical-align: middle;" class="p-1">WIDI MARTA PIYANA CAHYA SAMUDRA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">115</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170121</td>
                                    <td style="vertical-align: middle;" class="p-1">ANNISA SULISTYOWATI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">57.45</td>
                                    <td style="vertical-align: middle;" class="">79.9</td>
                                    <td style="vertical-align: middle;" class="">80.63</td>
                                    <td style="vertical-align: middle;" class="">84.35</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">66.57</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">90.4</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.75</td>
                                    <td style="vertical-align: middle;" class="">84.28</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">116</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170122</td>
                                    <td style="vertical-align: middle;" class="p-1">INDRA WAHID YUSRIYAN</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">65.25</td>
                                    <td style="vertical-align: middle;" class="">66.1</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.73</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">83.28</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">75.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.2</td>
                                    <td style="vertical-align: middle;" class="">64.68</td>
                                    <td style="vertical-align: middle;" class="">66.1</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">69.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">117</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170123</td>
                                    <td style="vertical-align: middle;" class="p-1">NARENDRA ADEY KUMALA DHUHITA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">60.25</td>
                                    <td style="vertical-align: middle;" class="">71.9</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">65.61</td>
                                    <td style="vertical-align: middle;" class="">84.4</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51</td>
                                    <td style="vertical-align: middle;" class="">75.12</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">69.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">118</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170124</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDRIE CAHYANTO</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">75.63</td>
                                    <td style="vertical-align: middle;" class="">69.75</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">77.25</td>
                                    <td style="vertical-align: middle;" class="">64.89</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">85.36</td>
                                    <td style="vertical-align: middle;" class="">78.48</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.5</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">72.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">119</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170125</td>
                                    <td style="vertical-align: middle;" class="p-1">NURFINA MAYASARI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.22</td>
                                    <td style="vertical-align: middle;" class="">76.08</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">65.25</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">81.92</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">78.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="">64.4</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">74.22</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">120</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170126</td>
                                    <td style="vertical-align: middle;" class="p-1">LINTANG EKA PRAKUSYA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="">76.35</td>
                                    <td style="vertical-align: middle;" class="">75.9</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">66.09</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">85.88</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54</td>
                                    <td style="vertical-align: middle;" class="">76.36</td>
                                    <td style="vertical-align: middle;" class="">75.9</td>
                                    <td style="vertical-align: middle;" class="">76.66</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">76.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">121</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170127</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYU WIDYARANI</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.06</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">75.63</td>
                                    <td style="vertical-align: middle;" class="">67.8</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="">65.13</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">85.16</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">55.75</td>
                                    <td style="vertical-align: middle;" class="">67.6</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">74.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">122</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170128</td>
                                    <td style="vertical-align: middle;" class="p-1">SIDHI AHMAD ABDILLAH</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">67.75</td>
                                    <td style="vertical-align: middle;" class="">57.8</td>
                                    <td style="vertical-align: middle;" class="">75.1</td>
                                    <td style="vertical-align: middle;" class="">72.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.37</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">74.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.75</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">75.1</td>
                                    <td style="vertical-align: middle;" class="">73.01</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">123</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170129</td>
                                    <td style="vertical-align: middle;" class="p-1">LINTANG GARHI TAMA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.3</td>
                                    <td style="vertical-align: middle;" class="">68.7</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="">58.53</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">89.08</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.75</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">124</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170130</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGA MAHENDRA SRI SUYONO</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">67.8</td>
                                    <td style="vertical-align: middle;" class="">73.03</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">67.05</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">70.1</td>
                                    <td style="vertical-align: middle;" class="">58.89</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.75</td>
                                    <td style="vertical-align: middle;" class="">66.92</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">71.09</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">125</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170131</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYU RIAN ARDIYANTO</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.75</td>
                                    <td style="vertical-align: middle;" class="">55.75</td>
                                    <td style="vertical-align: middle;" class="">67.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.1</td>
                                    <td style="vertical-align: middle;" class="">72.7</td>
                                    <td style="vertical-align: middle;" class="">56.61</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.88</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32.25</td>
                                    <td style="vertical-align: middle;" class="">67.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.1</td>
                                    <td style="vertical-align: middle;" class="">73.53</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="">71.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">126</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170132</td>
                                    <td style="vertical-align: middle;" class="p-1">EKY RISAR VILIA JUNITA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">73.03</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="">70.1</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.75</td>
                                    <td style="vertical-align: middle;" class="">70.72</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">127</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170133</td>
                                    <td style="vertical-align: middle;" class="p-1">DWI PUJI LESTARI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.98</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="">80.7</td>
                                    <td style="vertical-align: middle;" class="">85.8</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">70.29</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">93.76</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">80.48</td>
                                    <td style="vertical-align: middle;" class="">85.8</td>
                                    <td style="vertical-align: middle;" class="">77.13</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">128</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170134</td>
                                    <td style="vertical-align: middle;" class="p-1">OKKY GUNAWAN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">71.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.4</td>
                                    <td style="vertical-align: middle;" class="">73.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.93</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.4</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.4</td>
                                    <td style="vertical-align: middle;" class="">74.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.8</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">129</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170135</td>
                                    <td style="vertical-align: middle;" class="p-1">MOEHAMAD ROIS AMIEN MUSTHOFA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.51</td>
                                    <td style="vertical-align: middle;" class="">63.33</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.75</td>
                                    <td style="vertical-align: middle;" class="">59.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.1</td>
                                    <td style="vertical-align: middle;" class="">55.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.81</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.76</td>
                                    <td style="vertical-align: middle;" class="">68.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.5</td>
                                    <td style="vertical-align: middle;" class="">60.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.1</td>
                                    <td style="vertical-align: middle;" class="">55.9</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">58.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">130</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170136</td>
                                    <td style="vertical-align: middle;" class="p-1">FAUZIA ANINDA NISSA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.18</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">66.75</td>
                                    <td style="vertical-align: middle;" class="">73.3</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="">84.4</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">78.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">72.32</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">79.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">131</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170137</td>
                                    <td style="vertical-align: middle;" class="p-1">FREDY YUDI PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">70.35</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.61</td>
                                    <td style="vertical-align: middle;" class="">87.5</td>
                                    <td style="vertical-align: middle;" class="">87.52</td>
                                    <td style="vertical-align: middle;" class="">92</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.75</td>
                                    <td style="vertical-align: middle;" class="">70.52</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">80.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">132</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170138</td>
                                    <td style="vertical-align: middle;" class="p-1">ADE NURINDAH SARI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.49</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">69.45</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">66.57</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">133</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170139</td>
                                    <td style="vertical-align: middle;" class="p-1">HUSNA YUMNA HAKIM</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.53</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">73.75</td>
                                    <td style="vertical-align: middle;" class="">73.95</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">66.57</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.5</td>
                                    <td style="vertical-align: middle;" class="">74.08</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">80.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">134</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170140</td>
                                    <td style="vertical-align: middle;" class="p-1">RICHA MARDIKA RACHMAWATI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">68.95</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">61.89</td>
                                    <td style="vertical-align: middle;" class="">83.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">69.16</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">70.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">135</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170141</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGER ADHI RAMADHAN</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">55.5</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">58.05</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">67.44</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">67.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.67</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">55.5</td>
                                    <td style="vertical-align: middle;" class="">73.58</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">75.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">136</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170142</td>
                                    <td style="vertical-align: middle;" class="p-1">BAGAS YUDHIARTA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">137</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170143</td>
                                    <td style="vertical-align: middle;" class="p-1">DAMARANTI RAFIF SADIDA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.68</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.5</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.49</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">63.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39</td>
                                    <td style="vertical-align: middle;" class="">73.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">66.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">66.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">138</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170144</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITIYA LUCKY JANUR ALAMSYAH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">73.25</td>
                                    <td style="vertical-align: middle;" class="">69.65</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">77.75</td>
                                    <td style="vertical-align: middle;" class="">63.09</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">90.72</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">69.84</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">77.62</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">139</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170145</td>
                                    <td style="vertical-align: middle;" class="p-1">RINDI HERLYAN SYAH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">60.17</td>
                                    <td style="vertical-align: middle;" class="">76.08</td>
                                    <td style="vertical-align: middle;" class="">84.38</td>
                                    <td style="vertical-align: middle;" class="">73.95</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">64.17</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="">74.24</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">140</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170146</td>
                                    <td style="vertical-align: middle;" class="p-1">YASMIN PURBANITI NING TIASTUTI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">58.65</td>
                                    <td style="vertical-align: middle;" class="">78.65</td>
                                    <td style="vertical-align: middle;" class="">71.75</td>
                                    <td style="vertical-align: middle;" class="">77.15</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">60.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">57.75</td>
                                    <td style="vertical-align: middle;" class="">76.56</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">75.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">141</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170147</td>
                                    <td style="vertical-align: middle;" class="p-1">MIRA SAMSIAH</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">58.57</td>
                                    <td style="vertical-align: middle;" class="">78.65</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">81.15</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">62.49</td>
                                    <td style="vertical-align: middle;" class="">84.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">81.88</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">142</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170148</td>
                                    <td style="vertical-align: middle;" class="p-1">NURUL MAULIDAH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.69</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">76.1</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.75</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">143</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170149</td>
                                    <td style="vertical-align: middle;" class="p-1">AGATA ADI NUGROHO</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">68.7</td>
                                    <td style="vertical-align: middle;" class="">68.13</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.41</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">67.32</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">144</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170150</td>
                                    <td style="vertical-align: middle;" class="p-1">FERDIYAN DWI RAHMADANA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.45</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">65.1</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="">58.29</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">83.72</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">68.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="">64.84</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">72.74</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">145</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170151</td>
                                    <td style="vertical-align: middle;" class="p-1">LAELLY NADHIRA SINDY ASHARI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.52</td>
                                    <td style="vertical-align: middle;" class="">72.7</td>
                                    <td style="vertical-align: middle;" class="">79.38</td>
                                    <td style="vertical-align: middle;" class="">79.15</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">61.77</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">82.12</td>
                                    <td style="vertical-align: middle;" class="">86.4</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">78.52</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">81.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">146</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170152</td>
                                    <td style="vertical-align: middle;" class="p-1">SUNAN WASKITO ADI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.2</td>
                                    <td style="vertical-align: middle;" class="">79.1</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">60.93</td>
                                    <td style="vertical-align: middle;" class="">81.4</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="">68.8</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">147</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170153</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGRAINI NOOR LIA SARI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">69.23</td>
                                    <td style="vertical-align: middle;" class="">65.13</td>
                                    <td style="vertical-align: middle;" class="">70.95</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.49</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">82.48</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">59.25</td>
                                    <td style="vertical-align: middle;" class="">70.08</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">72.74</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">148</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170154</td>
                                    <td style="vertical-align: middle;" class="p-1">ASYIFA MAULIDA PRAMESWARI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.74</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">66.21</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">82.44</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">74.22</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">149</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170155</td>
                                    <td style="vertical-align: middle;" class="p-1">AISYAH OKTAVIANI YUSUF</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.26</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="">75.75</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">58.53</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">80.32</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">75.44</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">78.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">150</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170156</td>
                                    <td style="vertical-align: middle;" class="p-1">REFO DENIRO KASTALO</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">63.88</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.65</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">63.32</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">75.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">26.75</td>
                                    <td style="vertical-align: middle;" class="">65.2</td>
                                    <td style="vertical-align: middle;" class="">67.9</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">151</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170157</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITYA BAGUS CHATRIA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54</td>
                                    <td style="vertical-align: middle;" class="">77.25</td>
                                    <td style="vertical-align: middle;" class="">73.25</td>
                                    <td style="vertical-align: middle;" class="">64.3</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">55.29</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">93.2</td>
                                    <td style="vertical-align: middle;" class="">76.48</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="">64.56</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">76.69</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">152</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170159</td>
                                    <td style="vertical-align: middle;" class="p-1">TRI YOGA ARDHI WICAKSONO</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">58.2</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">74.38</td>
                                    <td style="vertical-align: middle;" class="">66.3</td>
                                    <td style="vertical-align: middle;" class="">63.1</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.29</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.75</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">63.1</td>
                                    <td style="vertical-align: middle;" class="">76.58</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">71.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">153</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170160</td>
                                    <td style="vertical-align: middle;" class="p-1">EDWIN HERMAWAN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">78.45</td>
                                    <td style="vertical-align: middle;" class="">80.1</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">69.57</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="">80.1</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">154</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170162</td>
                                    <td style="vertical-align: middle;" class="p-1">AFANDA BUANA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">67.25</td>
                                    <td style="vertical-align: middle;" class="">63.6</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.33</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">64.72</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48</td>
                                    <td style="vertical-align: middle;" class="">62.84</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">71.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">155</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170163</td>
                                    <td style="vertical-align: middle;" class="p-1">EZA GILANG FIRMANSYAH</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">68.13</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">65.25</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">74.12</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.75</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">74.65</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">156</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170164</td>
                                    <td style="vertical-align: middle;" class="p-1">TRI HASTUTI YUNIANSARI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.96</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">75.63</td>
                                    <td style="vertical-align: middle;" class="">68.15</td>
                                    <td style="vertical-align: middle;" class="">69.4</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">84.92</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="">67.88</td>
                                    <td style="vertical-align: middle;" class="">69.4</td>
                                    <td style="vertical-align: middle;" class="">78.36</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">157</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170165</td>
                                    <td style="vertical-align: middle;" class="p-1">AULIYA AYU CHAIRUNNISA</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">74.3</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">83.28</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.5</td>
                                    <td style="vertical-align: middle;" class="">73.36</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">158</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170166</td>
                                    <td style="vertical-align: middle;" class="p-1">KHAIRUNISSA ARI NURENI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">56.01</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">74.63</td>
                                    <td style="vertical-align: middle;" class="">69.75</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">56.49</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">90.76</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="">69.64</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">159</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170167</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD ABDUL LATIF</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">71.25</td>
                                    <td style="vertical-align: middle;" class="">62.45</td>
                                    <td style="vertical-align: middle;" class="">72.3</td>
                                    <td style="vertical-align: middle;" class="">78.85</td>
                                    <td style="vertical-align: middle;" class="">64.53</td>
                                    <td style="vertical-align: middle;" class="">88.5</td>
                                    <td style="vertical-align: middle;" class="">91.16</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">62.24</td>
                                    <td style="vertical-align: middle;" class="">72.3</td>
                                    <td style="vertical-align: middle;" class="">78.69</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">160</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170168</td>
                                    <td style="vertical-align: middle;" class="p-1">DHIANI NUR FA'IZAH</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.54</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">69.55</td>
                                    <td style="vertical-align: middle;" class="">83.7</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">73.89</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">65.25</td>
                                    <td style="vertical-align: middle;" class="">68.76</td>
                                    <td style="vertical-align: middle;" class="">83.7</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">161</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170169</td>
                                    <td style="vertical-align: middle;" class="p-1">ALDITA PRATAMAWATI KHOIRUNNISA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">66.98</td>
                                    <td style="vertical-align: middle;" class="">58.25</td>
                                    <td style="vertical-align: middle;" class="">70.7</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="">58.29</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">81.8</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.25</td>
                                    <td style="vertical-align: middle;" class="">70.72</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">162</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170170</td>
                                    <td style="vertical-align: middle;" class="p-1">ULFA DELLA NOVA TILOVA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.9</td>
                                    <td style="vertical-align: middle;" class="">79.45</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">79.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.25</td>
                                    <td style="vertical-align: middle;" class="">71.85</td>
                                    <td style="vertical-align: middle;" class="">89.5</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">163</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170171</td>
                                    <td style="vertical-align: middle;" class="p-1">AZIZ FAN FAUZI PETRA MAHARDIKHA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">55.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">65.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">164</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170172</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD KELVIN RIZQI EFENDI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">73.03</td>
                                    <td style="vertical-align: middle;" class="">66.63</td>
                                    <td style="vertical-align: middle;" class="">63.85</td>
                                    <td style="vertical-align: middle;" class="">65.2</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">59.37</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">63.25</td>
                                    <td style="vertical-align: middle;" class="">64.4</td>
                                    <td style="vertical-align: middle;" class="">65.2</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">74.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">165</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170173</td>
                                    <td style="vertical-align: middle;" class="p-1">BRURI SETIAJI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">68.15</td>
                                    <td style="vertical-align: middle;" class="">80.9</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">63.69</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">71.48</td>
                                    <td style="vertical-align: middle;" class="">80.8</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">67.88</td>
                                    <td style="vertical-align: middle;" class="">80.9</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">166</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170174</td>
                                    <td style="vertical-align: middle;" class="p-1">OKTAVIANA PUTRI HANDAYANI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">60.82</td>
                                    <td style="vertical-align: middle;" class="">75.43</td>
                                    <td style="vertical-align: middle;" class="">78.13</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">82.6</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">66.33</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">60.75</td>
                                    <td style="vertical-align: middle;" class="">76.84</td>
                                    <td style="vertical-align: middle;" class="">82.6</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">81.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">167</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170175</td>
                                    <td style="vertical-align: middle;" class="p-1">ERIN DYAH PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">56.5</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">72.38</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="">76.1</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">55.77</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">86.84</td>
                                    <td style="vertical-align: middle;" class="">91.2</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">58.25</td>
                                    <td style="vertical-align: middle;" class="">71.28</td>
                                    <td style="vertical-align: middle;" class="">76.1</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">168</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170176</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS SAPUTRO</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.2</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">70.75</td>
                                    <td style="vertical-align: middle;" class="">69.65</td>
                                    <td style="vertical-align: middle;" class="">59.3</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">57.45</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.5</td>
                                    <td style="vertical-align: middle;" class="">69.52</td>
                                    <td style="vertical-align: middle;" class="">59.3</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">169</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170177</td>
                                    <td style="vertical-align: middle;" class="p-1">SALMA RIFA' ROFIDAH</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">71.05</td>
                                    <td style="vertical-align: middle;" class="">61.8</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">72.21</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">71.84</td>
                                    <td style="vertical-align: middle;" class="">61.8</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">170</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170178</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD 'ABQARY AL GHIFARY</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">55.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">171</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170180</td>
                                    <td style="vertical-align: middle;" class="p-1">AGUSTIN DWI ROSIYANI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">60.82</td>
                                    <td style="vertical-align: middle;" class="">79.78</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">83.15</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">67.41</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">79.32</td>
                                    <td style="vertical-align: middle;" class="">92</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">63.25</td>
                                    <td style="vertical-align: middle;" class="">82.68</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">78.44</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">172</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170181</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYU AJI PANGESTU</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.7</td>
                                    <td style="vertical-align: middle;" class="">70.78</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">71.96</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.25</td>
                                    <td style="vertical-align: middle;" class="">56.68</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">74.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">173</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170182</td>
                                    <td style="vertical-align: middle;" class="p-1">KUSTIAN AZHAR RAHAGENG</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.91</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">82.1</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">57.45</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">72.68</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="">82.1</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">174</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170183</td>
                                    <td style="vertical-align: middle;" class="p-1">RISA AYU RIANA RIZQI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.83</td>
                                    <td style="vertical-align: middle;" class="">70.78</td>
                                    <td style="vertical-align: middle;" class="">68.88</td>
                                    <td style="vertical-align: middle;" class="">70.1</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">72.65</td>
                                    <td style="vertical-align: middle;" class="">58.17</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">83.24</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="">69.92</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">73.06</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">74.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">175</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170184</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD MURSID</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">176</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170185</td>
                                    <td style="vertical-align: middle;" class="p-1">MARETA SUCI PAMEKAR</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.71</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">63.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.2</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.16</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">76.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.75</td>
                                    <td style="vertical-align: middle;" class="">63.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.2</td>
                                    <td style="vertical-align: middle;" class="">71.97</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">76.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">177</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170186</td>
                                    <td style="vertical-align: middle;" class="p-1">OKY NURSETIYANI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">78.33</td>
                                    <td style="vertical-align: middle;" class="">75.63</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="">87</td>
                                    <td style="vertical-align: middle;" class="">85.84</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">82.84</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">178</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170187</td>
                                    <td style="vertical-align: middle;" class="p-1">CAKAP GILANG PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="">74.25</td>
                                    <td style="vertical-align: middle;" class="">81.1</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">60.21</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">92.92</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">74.48</td>
                                    <td style="vertical-align: middle;" class="">81.1</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">78.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">179</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170188</td>
                                    <td style="vertical-align: middle;" class="p-1">INASYARI NUR DAMAYANTI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">72.88</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">68.95</td>
                                    <td style="vertical-align: middle;" class="">67.9</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">64.17</td>
                                    <td style="vertical-align: middle;" class="">89.5</td>
                                    <td style="vertical-align: middle;" class="">74.32</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">60.25</td>
                                    <td style="vertical-align: middle;" class="">69.04</td>
                                    <td style="vertical-align: middle;" class="">67.9</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">180</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170189</td>
                                    <td style="vertical-align: middle;" class="p-1">NUGROHO ALVIN SUGIARTO</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.3</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="">70.7</td>
                                    <td style="vertical-align: middle;" class="">81.1</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">59.13</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">85.04</td>
                                    <td style="vertical-align: middle;" class="">80.8</td>
                                    <td style="vertical-align: middle;" class="">76.72</td>
                                    <td style="vertical-align: middle;" class="">56</td>
                                    <td style="vertical-align: middle;" class="">70.76</td>
                                    <td style="vertical-align: middle;" class="">81.1</td>
                                    <td style="vertical-align: middle;" class="">73.58</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">181</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170190</td>
                                    <td style="vertical-align: middle;" class="p-1">RIGA YUDHA PERWIRA ARDI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.57</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.88</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">67.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.6</td>
                                    <td style="vertical-align: middle;" class="">58.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">182</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170191</td>
                                    <td style="vertical-align: middle;" class="p-1">WILDAN RAYHAN PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.79</td>
                                    <td style="vertical-align: middle;" class="">65.85</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="">63.95</td>
                                    <td style="vertical-align: middle;" class="">60.7</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="">56.13</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">86.52</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">75.68</td>
                                    <td style="vertical-align: middle;" class="">55.75</td>
                                    <td style="vertical-align: middle;" class="">64.92</td>
                                    <td style="vertical-align: middle;" class="">60.7</td>
                                    <td style="vertical-align: middle;" class="">76.99</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">73.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">183</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170192</td>
                                    <td style="vertical-align: middle;" class="p-1">ALVIAN CAHYA PRAMUDYA</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">71.98</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">69.2</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">57.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">89.52</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">60.25</td>
                                    <td style="vertical-align: middle;" class="">73.68</td>
                                    <td style="vertical-align: middle;" class="">69.2</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">184</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170193</td>
                                    <td style="vertical-align: middle;" class="p-1">LATIFAH HANISA PRIHAPSARI</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.42</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">64.15</td>
                                    <td style="vertical-align: middle;" class="">59.3</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="">57.69</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">58.5</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">59.3</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">77.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">185</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170194</td>
                                    <td style="vertical-align: middle;" class="p-1">SATRIA SETYAWAN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.55</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">71.88</td>
                                    <td style="vertical-align: middle;" class="">74.85</td>
                                    <td style="vertical-align: middle;" class="">79.6</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">66.93</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.08</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">76.52</td>
                                    <td style="vertical-align: middle;" class="">79.6</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">80.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">186</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170195</td>
                                    <td style="vertical-align: middle;" class="p-1">HANIF NUR FAUZAN</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">55</td>
                                    <td style="vertical-align: middle;" class="">62.9</td>
                                    <td style="vertical-align: middle;" class="">55.5</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="">58.29</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">83.4</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.25</td>
                                    <td style="vertical-align: middle;" class="">63.28</td>
                                    <td style="vertical-align: middle;" class="">55.5</td>
                                    <td style="vertical-align: middle;" class="">76.58</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">73.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">187</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170196</td>
                                    <td style="vertical-align: middle;" class="p-1">MA'SUM MUNAWAR</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.75</td>
                                    <td style="vertical-align: middle;" class="">79.78</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">72.75</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">89.76</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.08</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">73.64</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">81.8</td>
                                    <td style="vertical-align: middle;" class="">82.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">188</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170197</td>
                                    <td style="vertical-align: middle;" class="p-1">MADDU MADANI SHIBGHATILLAH</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.68</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53</td>
                                    <td style="vertical-align: middle;" class="">63.7</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">72.35</td>
                                    <td style="vertical-align: middle;" class="">65.01</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">67.1</td>
                                    <td style="vertical-align: middle;" class="">58.9</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">73.01</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">82.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">189</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170198</td>
                                    <td style="vertical-align: middle;" class="p-1">THALIA PUTRI FITRIYANTI FARAHLILAH MASHU</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.63</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">55.88</td>
                                    <td style="vertical-align: middle;" class="">62.45</td>
                                    <td style="vertical-align: middle;" class="">56.8</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.05</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">80.84</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">62.12</td>
                                    <td style="vertical-align: middle;" class="">56.8</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">59.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">190</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170199</td>
                                    <td style="vertical-align: middle;" class="p-1">TITAN ADITYA KUSUMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">191</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170200</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS DANDY IRAWAN</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">73.13</td>
                                    <td style="vertical-align: middle;" class="">69.25</td>
                                    <td style="vertical-align: middle;" class="">76.1</td>
                                    <td style="vertical-align: middle;" class="">77.3</td>
                                    <td style="vertical-align: middle;" class="">61.65</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">82.96</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.5</td>
                                    <td style="vertical-align: middle;" class="">68.76</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="">77.29</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">192</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170201</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS ARSYAD SAFRUDIN</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.92</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.65</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">60.69</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">62.4</td>
                                    <td style="vertical-align: middle;" class="">78.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.25</td>
                                    <td style="vertical-align: middle;" class="">65.76</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">74.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">193</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170202</td>
                                    <td style="vertical-align: middle;" class="p-1">INTAN APRILIANI S</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">67.88</td>
                                    <td style="vertical-align: middle;" class="">67.88</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">60.69</td>
                                    <td style="vertical-align: middle;" class="">78.9</td>
                                    <td style="vertical-align: middle;" class="">80.44</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">73.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">194</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170203</td>
                                    <td style="vertical-align: middle;" class="p-1">AFIF SYIFAUR ROHMAN</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.25</td>
                                    <td style="vertical-align: middle;" class="">66.98</td>
                                    <td style="vertical-align: middle;" class="">62.13</td>
                                    <td style="vertical-align: middle;" class="">62.9</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">58.17</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">87.16</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">73.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.85</td>
                                    <td style="vertical-align: middle;" class="">63.28</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">74.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">195</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170205</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS INDRIANTO</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">57.2</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">61.88</td>
                                    <td style="vertical-align: middle;" class="">57.9</td>
                                    <td style="vertical-align: middle;" class="">66.2</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.49</td>
                                    <td style="vertical-align: middle;" class="">84.7</td>
                                    <td style="vertical-align: middle;" class="">61.8</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.75</td>
                                    <td style="vertical-align: middle;" class="">58.08</td>
                                    <td style="vertical-align: middle;" class="">66.2</td>
                                    <td style="vertical-align: middle;" class="">76.58</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">196</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170206</td>
                                    <td style="vertical-align: middle;" class="p-1">AMELIA FRIDYAWATI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.1</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">73.25</td>
                                    <td style="vertical-align: middle;" class="">66.35</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">57.09</td>
                                    <td style="vertical-align: middle;" class="">78.9</td>
                                    <td style="vertical-align: middle;" class="">75.72</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">66.36</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">72.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">197</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170207</td>
                                    <td style="vertical-align: middle;" class="p-1">WILDAN ADAM AL MUBAROK</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.45</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.4</td>
                                    <td style="vertical-align: middle;" class="">73.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">198</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170208</td>
                                    <td style="vertical-align: middle;" class="p-1">ADIB ABULKHAIR</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">70.78</td>
                                    <td style="vertical-align: middle;" class="">57.5</td>
                                    <td style="vertical-align: middle;" class="">58.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.9</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.41</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">56.56</td>
                                    <td style="vertical-align: middle;" class="">86.4</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.19</td>
                                    <td style="vertical-align: middle;" class="">57.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.9</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">70.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">199</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170209</td>
                                    <td style="vertical-align: middle;" class="p-1">JIHAD ALAM MAGHRIZA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.3</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">64.38</td>
                                    <td style="vertical-align: middle;" class="">58.25</td>
                                    <td style="vertical-align: middle;" class="">69.2</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.61</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">83.52</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="">69.2</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">74.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">200</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170210</td>
                                    <td style="vertical-align: middle;" class="p-1">VEMILIANA</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">69.35</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">65.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.8</td>
                                    <td style="vertical-align: middle;" class="">72.3</td>
                                    <td style="vertical-align: middle;" class="">64.41</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">75.72</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45</td>
                                    <td style="vertical-align: middle;" class="">65.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.8</td>
                                    <td style="vertical-align: middle;" class="">73.3</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">69.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">201</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170211</td>
                                    <td style="vertical-align: middle;" class="p-1">SANIA KUSUMA AYU PRASITA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">70.7</td>
                                    <td style="vertical-align: middle;" class="">58.13</td>
                                    <td style="vertical-align: middle;" class="">66.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.7</td>
                                    <td style="vertical-align: middle;" class="">72.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.05</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">57.28</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.5</td>
                                    <td style="vertical-align: middle;" class="">66.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.7</td>
                                    <td style="vertical-align: middle;" class="">73.01</td>
                                    <td style="vertical-align: middle;" class="">73.8</td>
                                    <td style="vertical-align: middle;" class="">72.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">202</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170214</td>
                                    <td style="vertical-align: middle;" class="p-1">ADE LIA DAMAYANTI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">72.58</td>
                                    <td style="vertical-align: middle;" class="">64.88</td>
                                    <td style="vertical-align: middle;" class="">63.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.3</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">55.41</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.25</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.3</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">203</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170215</td>
                                    <td style="vertical-align: middle;" class="p-1">DHIMAS PRIATMOJO</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">68.13</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.13</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">61.55</td>
                                    <td style="vertical-align: middle;" class="">80.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">204</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170216</td>
                                    <td style="vertical-align: middle;" class="p-1">LUSIANA NIKEN HAPSARI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">55.23</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">67.63</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">65.1</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">62.01</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">88.84</td>
                                    <td style="vertical-align: middle;" class="">92.8</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">60.25</td>
                                    <td style="vertical-align: middle;" class="">72.72</td>
                                    <td style="vertical-align: middle;" class="">65.1</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">79.8</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">205</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170217</td>
                                    <td style="vertical-align: middle;" class="p-1">DINA NURJANAH</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.98</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">56.97</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">206</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170218</td>
                                    <td style="vertical-align: middle;" class="p-1">SELY WARDANI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">57.46</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">72.88</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">81.3</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">65.49</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">77.52</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">77.32</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="">81.3</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">207</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170219</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZKY NOVARI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">62.38</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="">62.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.05</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="">75.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.25</td>
                                    <td style="vertical-align: middle;" class="">60.96</td>
                                    <td style="vertical-align: middle;" class="">62.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">67.4</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">208</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170220</td>
                                    <td style="vertical-align: middle;" class="p-1">FIRA ERA PRADITA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">209</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170221</td>
                                    <td style="vertical-align: middle;" class="p-1">AZIZAH NOERMA GUPITASARI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">57.15</td>
                                    <td style="vertical-align: middle;" class="">78.85</td>
                                    <td style="vertical-align: middle;" class="">71.25</td>
                                    <td style="vertical-align: middle;" class="">70.55</td>
                                    <td style="vertical-align: middle;" class="">80.8</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">64.53</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">89.16</td>
                                    <td style="vertical-align: middle;" class="">91.2</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">80.8</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">81.44</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">210</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170222</td>
                                    <td style="vertical-align: middle;" class="p-1">ALFARID WANGSA FADILLA</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">69.63</td>
                                    <td style="vertical-align: middle;" class="">60.7</td>
                                    <td style="vertical-align: middle;" class="">60.2</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.97</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">90.32</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">59.75</td>
                                    <td style="vertical-align: middle;" class="">60.72</td>
                                    <td style="vertical-align: middle;" class="">60.2</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">79.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">211</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170223</td>
                                    <td style="vertical-align: middle;" class="p-1">ADINDA PUTRI ANDAYANTI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">70.35</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">63.65</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.73</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">92.32</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="">63.52</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">212</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170224</td>
                                    <td style="vertical-align: middle;" class="p-1">ISMUAJI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">66.85</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">56.01</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">59.2</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.25</td>
                                    <td style="vertical-align: middle;" class="">67.72</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">213</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170225</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD AMIRUL FARRAS</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">214</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170226</td>
                                    <td style="vertical-align: middle;" class="p-1">DIAN ANISA PRAMESTI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.82</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="">68.38</td>
                                    <td style="vertical-align: middle;" class="">65.55</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">55.05</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">72.68</td>
                                    <td style="vertical-align: middle;" class="">91.2</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="">65.92</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">215</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170227</td>
                                    <td style="vertical-align: middle;" class="p-1">RIRIN MARTIKA</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">70.13</td>
                                    <td style="vertical-align: middle;" class="">73.2</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">77.35</td>
                                    <td style="vertical-align: middle;" class="">63.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">81.92</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">73.48</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">76.86</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">77.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">216</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170228</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD DZAKIR TYAS ASSHODIQ</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">67.58</td>
                                    <td style="vertical-align: middle;" class="">57.5</td>
                                    <td style="vertical-align: middle;" class="">62.4</td>
                                    <td style="vertical-align: middle;" class="">57.1</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.61</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">76.12</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.75</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="">57.1</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">217</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170229</td>
                                    <td style="vertical-align: middle;" class="p-1">OVI ENGGRIDYANI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="">58.88</td>
                                    <td style="vertical-align: middle;" class="">65.15</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">70.75</td>
                                    <td style="vertical-align: middle;" class="">56.13</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">66.84</td>
                                    <td style="vertical-align: middle;" class="">90.4</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.75</td>
                                    <td style="vertical-align: middle;" class="">66.56</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">71.9</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">76.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">218</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170230</td>
                                    <td style="vertical-align: middle;" class="p-1">NUR AFIFAH HIDAYAH</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.6</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">68.75</td>
                                    <td style="vertical-align: middle;" class="">63.7</td>
                                    <td style="vertical-align: middle;" class="">58.9</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">68.85</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">64.04</td>
                                    <td style="vertical-align: middle;" class="">58.9</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">219</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170231</td>
                                    <td style="vertical-align: middle;" class="p-1">DENIS KUSTIKONING SARI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">64.4</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">69.33</td>
                                    <td style="vertical-align: middle;" class="">84.4</td>
                                    <td style="vertical-align: middle;" class="">80.88</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">77.32</td>
                                    <td style="vertical-align: middle;" class="">56.5</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">64.4</td>
                                    <td style="vertical-align: middle;" class="">73.58</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">220</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170232</td>
                                    <td style="vertical-align: middle;" class="p-1">SEKAR PALUPI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">56.02</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">79.75</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">65.97</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">80.64</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">221</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170233</td>
                                    <td style="vertical-align: middle;" class="p-1">ENDANG SUCI HARMININGSIH</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">56.67</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">76.15</td>
                                    <td style="vertical-align: middle;" class="">63.3</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">57.93</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">87.64</td>
                                    <td style="vertical-align: middle;" class="">84.8</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">76.68</td>
                                    <td style="vertical-align: middle;" class="">63.3</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">222</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170234</td>
                                    <td style="vertical-align: middle;" class="p-1">RENI ASTUTI</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">65.1</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">69.38</td>
                                    <td style="vertical-align: middle;" class="">69.45</td>
                                    <td style="vertical-align: middle;" class="">62.3</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">62.73</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">82.88</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">62.3</td>
                                    <td style="vertical-align: middle;" class="">77.04</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">76.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">223</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170235</td>
                                    <td style="vertical-align: middle;" class="p-1">SULISTIANI</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">73.75</td>
                                    <td style="vertical-align: middle;" class="">86.4</td>
                                    <td style="vertical-align: middle;" class="">68.9</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">64.29</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.52</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.25</td>
                                    <td style="vertical-align: middle;" class="">86.32</td>
                                    <td style="vertical-align: middle;" class="">68.9</td>
                                    <td style="vertical-align: middle;" class="">77.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">224</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170236</td>
                                    <td style="vertical-align: middle;" class="p-1">ABEL GARIBALDI ISMAIL</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.87</td>
                                    <td style="vertical-align: middle;" class="">73.85</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">66.45</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.8</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">76.72</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">74.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="">80.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">225</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170237</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITYA WINKI PRIHUTOMO</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">69.23</td>
                                    <td style="vertical-align: middle;" class="">72.38</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.9</td>
                                    <td style="vertical-align: middle;" class="">71.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">62.52</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.9</td>
                                    <td style="vertical-align: middle;" class="">72.78</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">226</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170238</td>
                                    <td style="vertical-align: middle;" class="p-1">ROHMAT KURNIAWAN</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.25</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="">76.85</td>
                                    <td style="vertical-align: middle;" class="">65.73</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">86.56</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">60.75</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">80.2</td>
                                    <td style="vertical-align: middle;" class="">70.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">227</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170239</td>
                                    <td style="vertical-align: middle;" class="p-1">AKBAR SANTOSA</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.59</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">83.4</td>
                                    <td style="vertical-align: middle;" class="">70.7</td>
                                    <td style="vertical-align: middle;" class="">56.01</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">62.48</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">83.4</td>
                                    <td style="vertical-align: middle;" class="">72.45</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">228</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170240</td>
                                    <td style="vertical-align: middle;" class="p-1">PUTRI ENNO RAHMA NURAENI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">55.45</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">58.2</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">57.21</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">73.56</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">77.28</td>
                                    <td style="vertical-align: middle;" class="">58.2</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">229</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170241</td>
                                    <td style="vertical-align: middle;" class="p-1">M.AZIZIRRAHIM</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.69</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">19.5</td>
                                    <td style="vertical-align: middle;" class="">61.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.91</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">230</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170242</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD ROBBANI</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.87</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">61.8</td>
                                    <td style="vertical-align: middle;" class="">71.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.57</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">77.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.8</td>
                                    <td style="vertical-align: middle;" class="">61.8</td>
                                    <td style="vertical-align: middle;" class="">72.78</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">78.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">231</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170243</td>
                                    <td style="vertical-align: middle;" class="p-1">ANTON EDDY SAPUTRA</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36</td>
                                    <td style="vertical-align: middle;" class="">73.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.93</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.72</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">56.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.75</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36</td>
                                    <td style="vertical-align: middle;" class="">74.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">232</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170244</td>
                                    <td style="vertical-align: middle;" class="p-1">RISTIA NURUL RIYANI</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">76.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">233</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170245</td>
                                    <td style="vertical-align: middle;" class="p-1">IMANIAR EGA PAWESTRI</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">56.2</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="">55.63</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.3</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">71.36</td>
                                    <td style="vertical-align: middle;" class="">61.95</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.3</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">71.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">234</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170246</td>
                                    <td style="vertical-align: middle;" class="p-1">SATYA LUHUR PRADHANA</td>
                                    <td style="vertical-align: middle;" class="">78.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.75</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">71.05</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">78.85</td>
                                    <td style="vertical-align: middle;" class="">59.85</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">71.04</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">78.69</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">79.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">235</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170247</td>
                                    <td style="vertical-align: middle;" class="p-1">MAHIR OKKY DHARMAWAN</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">67.1</td>
                                    <td style="vertical-align: middle;" class="">63.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">90.04</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">67.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">236</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170248</td>
                                    <td style="vertical-align: middle;" class="p-1">EFTENDI YULIANTO</td>
                                    <td style="vertical-align: middle;" class="">64.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">63.13</td>
                                    <td style="vertical-align: middle;" class="">55.7</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.77</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">73.52</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">55</td>
                                    <td style="vertical-align: middle;" class="">55.6</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">73.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">237</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170249</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD ADIB ULINUHA</td>
                                    <td style="vertical-align: middle;" class="">64.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">59.13</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">64.92</td>
                                    <td style="vertical-align: middle;" class="">79.2</td>
                                    <td style="vertical-align: middle;" class="">74.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">73.2</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">238</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170250</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD RIFKI IQBAL</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">239</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170251</td>
                                    <td style="vertical-align: middle;" class="p-1">ISMAWAN SHOBIRIN</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.45</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">68.13</td>
                                    <td style="vertical-align: middle;" class="">65.1</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">72.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.29</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">76.52</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">59.75</td>
                                    <td style="vertical-align: middle;" class="">64.84</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">74.6</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">240</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170252</td>
                                    <td style="vertical-align: middle;" class="p-1">MEGA PUTRI ANGGIANI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.22</td>
                                    <td style="vertical-align: middle;" class="">78.85</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">61.65</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">83.08</td>
                                    <td style="vertical-align: middle;" class="">79.2</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">69.68</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">241</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170253</td>
                                    <td style="vertical-align: middle;" class="p-1">FAJAR ASRI RYHARTANTO</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.31</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.75</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">64.65</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.76</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.7</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">242</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170254</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD FIRMAN SYAH</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">60.08</td>
                                    <td style="vertical-align: middle;" class="">67.75</td>
                                    <td style="vertical-align: middle;" class="">62.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.8</td>
                                    <td style="vertical-align: middle;" class="">70.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.77</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">77.08</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.25</td>
                                    <td style="vertical-align: middle;" class="">61.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.8</td>
                                    <td style="vertical-align: middle;" class="">71.45</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="">74.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">243</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170256</td>
                                    <td style="vertical-align: middle;" class="p-1">FAJAR LATIEF AJI PRATIDINA</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.86</td>
                                    <td style="vertical-align: middle;" class="">66.45</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">64.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.7</td>
                                    <td style="vertical-align: middle;" class="">78.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.61</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.52</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.75</td>
                                    <td style="vertical-align: middle;" class="">64.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.7</td>
                                    <td style="vertical-align: middle;" class="">78.28</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">244</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170257</td>
                                    <td style="vertical-align: middle;" class="p-1">KURNIA EKA PANGESTU</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">65.13</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="">72.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.09</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="">72.74</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">245</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170258</td>
                                    <td style="vertical-align: middle;" class="p-1">LUTFYA FRISKA WAHYU MAYMUNA</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="">60.17</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">71.45</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">66.33</td>
                                    <td style="vertical-align: middle;" class="">91.5</td>
                                    <td style="vertical-align: middle;" class="">87.32</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">64.25</td>
                                    <td style="vertical-align: middle;" class="">72.28</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">246</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170260</td>
                                    <td style="vertical-align: middle;" class="p-1">REZA NUR IRFAN</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">63.8</td>
                                    <td style="vertical-align: middle;" class="">73.03</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.7</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">55.53</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">82.8</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">65.56</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">76.42</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">247</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170261</td>
                                    <td style="vertical-align: middle;" class="p-1">AGAM ADI WIBOWO</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.24</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">65.95</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">70.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.72</td>
                                    <td style="vertical-align: middle;" class="">70.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.75</td>
                                    <td style="vertical-align: middle;" class="">65.12</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">71.9</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="">73.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">248</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170262</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD FAIZAL KURNIAWAN</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">59.13</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">249</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170263</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD FADLLIN ATTHORIQ</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.25</td>
                                    <td style="vertical-align: middle;" class="">55.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">250</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170264</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGA WIDIA DEVA</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.12</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="">76.5</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">59.73</td>
                                    <td style="vertical-align: middle;" class="">87</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">71.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">251</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170265</td>
                                    <td style="vertical-align: middle;" class="p-1">KHARIMAH AULLIA</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.3</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">59.25</td>
                                    <td style="vertical-align: middle;" class="">66.75</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">58.65</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.5</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">252</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170266</td>
                                    <td style="vertical-align: middle;" class="p-1">FITYA NUR ROSYID</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">57</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.7</td>
                                    <td style="vertical-align: middle;" class="">77.75</td>
                                    <td style="vertical-align: middle;" class="">55.17</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.64</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="">70.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.7</td>
                                    <td style="vertical-align: middle;" class="">77.75</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">253</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170267</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZKI AULIA</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.06</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">55.1</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">66.93</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">80.52</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">73.88</td>
                                    <td style="vertical-align: middle;" class="">55.1</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">254</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170268</td>
                                    <td style="vertical-align: middle;" class="p-1">SAIFUL RIDWAN</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">74.75</td>
                                    <td style="vertical-align: middle;" class="">65.5</td>
                                    <td style="vertical-align: middle;" class="">64.75</td>
                                    <td style="vertical-align: middle;" class="">62.1</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">58.89</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">80.8</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.75</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">62.1</td>
                                    <td style="vertical-align: middle;" class="">77.09</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">255</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170269</td>
                                    <td style="vertical-align: middle;" class="p-1">NUKE MEDIANA SAFITRI</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">61.4</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">67.12</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">61.48</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">77.32</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">79.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">256</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170270</td>
                                    <td style="vertical-align: middle;" class="p-1">DEDE MIFTAKHUL YAHYA</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.76</td>
                                    <td style="vertical-align: middle;" class="">67.48</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.8</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.16</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">55.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.8</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">257</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170271</td>
                                    <td style="vertical-align: middle;" class="p-1">ALIFAH NUR AINI</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.22</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">68.8</td>
                                    <td style="vertical-align: middle;" class="">67.7</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">57.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">96.2</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">59.75</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">67.7</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">258</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170272</td>
                                    <td style="vertical-align: middle;" class="p-1">FITRI YUNIAWATI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">55.06</td>
                                    <td style="vertical-align: middle;" class="">62.38</td>
                                    <td style="vertical-align: middle;" class="">68.13</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="">63.8</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">89.96</td>
                                    <td style="vertical-align: middle;" class="">82.4</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">63.8</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">259</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170273</td>
                                    <td style="vertical-align: middle;" class="p-1">ARDIANTO PRAKOSO</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">66.13</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">80.15</td>
                                    <td style="vertical-align: middle;" class="">63.57</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">86.92</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">62.75</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">79.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">260</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170274</td>
                                    <td style="vertical-align: middle;" class="p-1">RAJU AT TAUBI</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.48</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.88</td>
                                    <td style="vertical-align: middle;" class="">58.55</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">58.05</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">74.44</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.5</td>
                                    <td style="vertical-align: middle;" class="">58.04</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">261</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170275</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD AKMAL IRFANDI</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.15</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">66.35</td>
                                    <td style="vertical-align: middle;" class="">82.3</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">59.25</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">89.36</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="">66.64</td>
                                    <td style="vertical-align: middle;" class="">82.3</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">262</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170276</td>
                                    <td style="vertical-align: middle;" class="p-1">DIYAH AISIYAH KURNIAWATI</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">69.13</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.25</td>
                                    <td style="vertical-align: middle;" class="">63.35</td>
                                    <td style="vertical-align: middle;" class="">76.7</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">79.44</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44</td>
                                    <td style="vertical-align: middle;" class="">64.48</td>
                                    <td style="vertical-align: middle;" class="">76.7</td>
                                    <td style="vertical-align: middle;" class="">76.42</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">263</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170277</td>
                                    <td style="vertical-align: middle;" class="p-1">RENI OCHTAVIANI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.9</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">73.13</td>
                                    <td style="vertical-align: middle;" class="">70.45</td>
                                    <td style="vertical-align: middle;" class="">62.2</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">57.93</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">86.56</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">70.24</td>
                                    <td style="vertical-align: middle;" class="">62.2</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">72.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">264</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170278</td>
                                    <td style="vertical-align: middle;" class="p-1">ROSIKHOTI SAYYIDAH</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">89.12</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38</td>
                                    <td style="vertical-align: middle;" class="">67.04</td>
                                    <td style="vertical-align: middle;" class="">73.9</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">81.4</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">265</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170279</td>
                                    <td style="vertical-align: middle;" class="p-1">YESSI MONICA CHANDRA</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.35</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">60.6</td>
                                    <td style="vertical-align: middle;" class="">78.75</td>
                                    <td style="vertical-align: middle;" class="">63.69</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">84.52</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">75.12</td>
                                    <td style="vertical-align: middle;" class="">60.6</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">80.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">266</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170280</td>
                                    <td style="vertical-align: middle;" class="p-1">NAFAL ARROHMANSYAH</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">58.25</td>
                                    <td style="vertical-align: middle;" class="">66.7</td>
                                    <td style="vertical-align: middle;" class="">64.2</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.29</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">73.92</td>
                                    <td style="vertical-align: middle;" class="">80.8</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">64.2</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="">67.4</td>
                                    <td style="vertical-align: middle;" class="">72.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">267</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170281</td>
                                    <td style="vertical-align: middle;" class="p-1">KHUSNA FUROIDA</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">55.7</td>
                                    <td style="vertical-align: middle;" class="">81.03</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.25</td>
                                    <td style="vertical-align: middle;" class="">65.73</td>
                                    <td style="vertical-align: middle;" class="">89.5</td>
                                    <td style="vertical-align: middle;" class="">90.32</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">77.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.05</td>
                                    <td style="vertical-align: middle;" class="">82.2</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">268</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170282</td>
                                    <td style="vertical-align: middle;" class="p-1">RISKY NURAINI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.14</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="">75.35</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">70.75</td>
                                    <td style="vertical-align: middle;" class="">60.45</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">82.92</td>
                                    <td style="vertical-align: middle;" class="">83.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">55</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">71.9</td>
                                    <td style="vertical-align: middle;" class="">81.4</td>
                                    <td style="vertical-align: middle;" class="">75.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">269</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170283</td>
                                    <td style="vertical-align: middle;" class="p-1">NURRAHMAH DWI PRIMADANI</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">55.3</td>
                                    <td style="vertical-align: middle;" class="">79.45</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">72.9</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">59.25</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">93.56</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">73.12</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">270</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170284</td>
                                    <td style="vertical-align: middle;" class="p-1">SHELLY EKA NUCRAHENI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">271</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170286</td>
                                    <td style="vertical-align: middle;" class="p-1">INZHAGI POTRET ANANTA</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">68.8</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">66.13</td>
                                    <td style="vertical-align: middle;" class="">63.55</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">72.96</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">272</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170288</td>
                                    <td style="vertical-align: middle;" class="p-1">FILDZAH AINATURROHMAH BRILIANTI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">76.65</td>
                                    <td style="vertical-align: middle;" class="">75.9</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">62.61</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">88.12</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">62.75</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">75.9</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">71.24</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">273</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170290</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD ARIEF ADIPUTRA</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">68.38</td>
                                    <td style="vertical-align: middle;" class="">66.05</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">56.37</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">82.48</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45</td>
                                    <td style="vertical-align: middle;" class="">65.96</td>
                                    <td style="vertical-align: middle;" class="">66.4</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">73.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">274</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170291</td>
                                    <td style="vertical-align: middle;" class="p-1">INDAH YULIANTI</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">57.05</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">75.63</td>
                                    <td style="vertical-align: middle;" class="">69.75</td>
                                    <td style="vertical-align: middle;" class="">76.3</td>
                                    <td style="vertical-align: middle;" class="">80.85</td>
                                    <td style="vertical-align: middle;" class="">62.73</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="">69.68</td>
                                    <td style="vertical-align: middle;" class="">76.3</td>
                                    <td style="vertical-align: middle;" class="">80.45</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">275</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170292</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD SYAIFUL BAMBANG MARUTI</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="">70.35</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">69.3</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.45</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">84.92</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">61</td>
                                    <td style="vertical-align: middle;" class="">69.44</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">276</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170294</td>
                                    <td style="vertical-align: middle;" class="p-1">SOFI YANILESTARI</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.44</td>
                                    <td style="vertical-align: middle;" class="">74.23</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">66.3</td>
                                    <td style="vertical-align: middle;" class="">80.15</td>
                                    <td style="vertical-align: middle;" class="">64.41</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">81.32</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">62.75</td>
                                    <td style="vertical-align: middle;" class="">72.88</td>
                                    <td style="vertical-align: middle;" class="">66.3</td>
                                    <td style="vertical-align: middle;" class="">79.41</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">277</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170295</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYUDI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">70.25</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">80.7</td>
                                    <td style="vertical-align: middle;" class="">80.85</td>
                                    <td style="vertical-align: middle;" class="">66.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">83.48</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">66.84</td>
                                    <td style="vertical-align: middle;" class="">80.7</td>
                                    <td style="vertical-align: middle;" class="">80.45</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">278</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170296</td>
                                    <td style="vertical-align: middle;" class="p-1">DIANTIKA SEBTI ISLAMIYATI</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.6</td>
                                    <td style="vertical-align: middle;" class="">71.75</td>
                                    <td style="vertical-align: middle;" class="">57.81</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">62.68</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">73.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.6</td>
                                    <td style="vertical-align: middle;" class="">72.22</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">279</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170297</td>
                                    <td style="vertical-align: middle;" class="p-1">DARIN TRIASA MADANI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.3</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">76.13</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="">78.05</td>
                                    <td style="vertical-align: middle;" class="">60.69</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">92.36</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">80.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">280</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170298</td>
                                    <td style="vertical-align: middle;" class="p-1">WAES AL-QORONI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">71.15</td>
                                    <td style="vertical-align: middle;" class="">66.8</td>
                                    <td style="vertical-align: middle;" class="">77.35</td>
                                    <td style="vertical-align: middle;" class="">65.01</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">76.84</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">70.88</td>
                                    <td style="vertical-align: middle;" class="">66.8</td>
                                    <td style="vertical-align: middle;" class="">76.86</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">281</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170299</td>
                                    <td style="vertical-align: middle;" class="p-1">LULU' AGUSTINA</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">75.63</td>
                                    <td style="vertical-align: middle;" class="">68.25</td>
                                    <td style="vertical-align: middle;" class="">62.6</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">60.81</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">88.28</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">68.8</td>
                                    <td style="vertical-align: middle;" class="">62.6</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">75.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">282</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170300</td>
                                    <td style="vertical-align: middle;" class="p-1">AMELYA FAWWAZ</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">65.63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47</td>
                                    <td style="vertical-align: middle;" class="">63.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.6</td>
                                    <td style="vertical-align: middle;" class="">73.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.93</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">85.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.75</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.6</td>
                                    <td style="vertical-align: middle;" class="">73.66</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">75.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">283</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170301</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD ISMAIL ISLAM</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">69.63</td>
                                    <td style="vertical-align: middle;" class="">71.4</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">64.77</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">88.76</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">63.25</td>
                                    <td style="vertical-align: middle;" class="">71.52</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">76.6</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">284</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170302</td>
                                    <td style="vertical-align: middle;" class="p-1">ASYELLIA TRI OKMALIASARI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.25</td>
                                    <td style="vertical-align: middle;" class="">79.38</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">68.15</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="">65.85</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">92.56</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">61.75</td>
                                    <td style="vertical-align: middle;" class="">67.92</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="">80.2</td>
                                    <td style="vertical-align: middle;" class="">78.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">285</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170304</td>
                                    <td style="vertical-align: middle;" class="p-1">SAVIRA RAHMA NUR YUNISA</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">286</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170305</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITYA TRISNA MAHENDRA</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10</td>
                                    <td style="vertical-align: middle;" class="">60.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.17</td>
                                    <td style="vertical-align: middle;" class="">56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">61.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">287</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170307</td>
                                    <td style="vertical-align: middle;" class="p-1">AYU DWI LESTARI</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.99</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.25</td>
                                    <td style="vertical-align: middle;" class="">65.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.8</td>
                                    <td style="vertical-align: middle;" class="">72.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.49</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">67.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.75</td>
                                    <td style="vertical-align: middle;" class="">66.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.8</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">78.65</td>
                                    <td style="vertical-align: middle;" class="">74.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">288</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170308</td>
                                    <td style="vertical-align: middle;" class="p-1">RAHMAT YULISTIANTO</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">67.8</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.25</td>
                                    <td style="vertical-align: middle;" class="">65.65</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">70.95</td>
                                    <td style="vertical-align: middle;" class="">62.01</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">65.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.95</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">71.45</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">289</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170309</td>
                                    <td style="vertical-align: middle;" class="p-1">ARI SUSANTO</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">55.6</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">62.6</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">64.89</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.28</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">60.75</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">62.6</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">290</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170311</td>
                                    <td style="vertical-align: middle;" class="p-1">NITTA ANGGRAENI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">55.85</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">75.38</td>
                                    <td style="vertical-align: middle;" class="">72.25</td>
                                    <td style="vertical-align: middle;" class="">64.7</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">61.65</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">86.76</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">72.76</td>
                                    <td style="vertical-align: middle;" class="">64.7</td>
                                    <td style="vertical-align: middle;" class="">77.04</td>
                                    <td style="vertical-align: middle;" class="">81.4</td>
                                    <td style="vertical-align: middle;" class="">71.84</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">291</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170312</td>
                                    <td style="vertical-align: middle;" class="p-1">ALSAVERO RIVAL NUGRAHA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">292</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170314</td>
                                    <td style="vertical-align: middle;" class="p-1">IQBAL ALAN ABDULLAH</td>
                                    <td style="vertical-align: middle;" class="">65.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">64.2</td>
                                    <td style="vertical-align: middle;" class="">56.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.7</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">58.17</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.2</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.95</td>
                                    <td style="vertical-align: middle;" class="">55.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.7</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">293</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170317</td>
                                    <td style="vertical-align: middle;" class="p-1">DHIMAS SEPTIAN CAHYONO PUTRO</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">67.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">67.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">294</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170318</td>
                                    <td style="vertical-align: middle;" class="p-1">RATANTRA RASJID AGITAMA LUIS</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">59.8</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="">74.85</td>
                                    <td style="vertical-align: middle;" class="">58.53</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">74.8</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="">75.17</td>
                                    <td style="vertical-align: middle;" class="">81.8</td>
                                    <td style="vertical-align: middle;" class="">77.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">295</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170319</td>
                                    <td style="vertical-align: middle;" class="p-1">ARSYAD RISANDI MAULANA</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.48</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.25</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.7</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.45</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.24</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">76.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32.75</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.7</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">58.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">296</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170320</td>
                                    <td style="vertical-align: middle;" class="p-1">SULASTRI WULANDARI</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">78.13</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">65.37</td>
                                    <td style="vertical-align: middle;" class="">91.5</td>
                                    <td style="vertical-align: middle;" class="">82.04</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="">79.16</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">77.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">297</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170321</td>
                                    <td style="vertical-align: middle;" class="p-1">ANIS PUTRI SARI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">69.23</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.25</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">78.7</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.93</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">76.64</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">65.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.97</td>
                                    <td style="vertical-align: middle;" class="">61.44</td>
                                    <td style="vertical-align: middle;" class="">78.7</td>
                                    <td style="vertical-align: middle;" class="">71.97</td>
                                    <td style="vertical-align: middle;" class="">77.75</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">298</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170322</td>
                                    <td style="vertical-align: middle;" class="p-1">EGA INDAH HERNINGRUM</td>
                                    <td style="vertical-align: middle;" class="">65.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.24</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.4</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.65</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">62.76</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">78.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.4</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">299</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170323</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGA PRATAMA JAYA EFENDI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.34</td>
                                    <td style="vertical-align: middle;" class="">74.23</td>
                                    <td style="vertical-align: middle;" class="">66.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.9</td>
                                    <td style="vertical-align: middle;" class="">63.4</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">59.37</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="">63.4</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">74.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">300</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170324</td>
                                    <td style="vertical-align: middle;" class="p-1">DIAJENG PAWESTRI</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">68.1</td>
                                    <td style="vertical-align: middle;" class="">68.75</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">70.9</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.57</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">85.32</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="">76.56</td>
                                    <td style="vertical-align: middle;" class="">70.9</td>
                                    <td style="vertical-align: middle;" class="">74.65</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">73.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">301</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170325</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD FAKHRI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.15</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">68.13</td>
                                    <td style="vertical-align: middle;" class="">74.55</td>
                                    <td style="vertical-align: middle;" class="">81.9</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">67.77</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">83.56</td>
                                    <td style="vertical-align: middle;" class="">81.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">74.28</td>
                                    <td style="vertical-align: middle;" class="">81.9</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">302</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170326</td>
                                    <td style="vertical-align: middle;" class="p-1">TEGAR ABDUL HAFID</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.68</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">68.75</td>
                                    <td style="vertical-align: middle;" class="">63.7</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">69.81</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">57.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="">62.64</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">303</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170327</td>
                                    <td style="vertical-align: middle;" class="p-1">ANNISA RIZKY BAHARI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.45</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">68.15</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">76.75</td>
                                    <td style="vertical-align: middle;" class="">63.69</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">79.48</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">67.88</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">73.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">304</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170328</td>
                                    <td style="vertical-align: middle;" class="p-1">NIKEN ZULHAIDA</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">70.13</td>
                                    <td style="vertical-align: middle;" class="">65.75</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">74.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.93</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">79.12</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">65.84</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">74.74</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">305</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170329</td>
                                    <td style="vertical-align: middle;" class="p-1">MAISY PUTRI LESTARI</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">56.98</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">73.13</td>
                                    <td style="vertical-align: middle;" class="">76.7</td>
                                    <td style="vertical-align: middle;" class="">81.9</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">75.81</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">89.36</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="">76.72</td>
                                    <td style="vertical-align: middle;" class="">81.9</td>
                                    <td style="vertical-align: middle;" class="">77.66</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">306</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170330</td>
                                    <td style="vertical-align: middle;" class="p-1">AMIRUL IHSAN</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.4</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">70.63</td>
                                    <td style="vertical-align: middle;" class="">69.9</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">61.53</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">85.92</td>
                                    <td style="vertical-align: middle;" class="">89.6</td>
                                    <td style="vertical-align: middle;" class="">78.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.5</td>
                                    <td style="vertical-align: middle;" class="">70.24</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">78.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">307</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170333</td>
                                    <td style="vertical-align: middle;" class="p-1">FARID HASAN IHSAN ALAMSYAH</td>
                                    <td style="vertical-align: middle;" class="">65.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">22.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.89</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.4</td>
                                    <td style="vertical-align: middle;" class="">59.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">308</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170334</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD AFIF FARHAN</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.4</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="">59.38</td>
                                    <td style="vertical-align: middle;" class="">63.6</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">69.21</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">84.36</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">65.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.5</td>
                                    <td style="vertical-align: middle;" class="">63.92</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">74.2</td>
                                    <td style="vertical-align: middle;" class="">79.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">309</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170337</td>
                                    <td style="vertical-align: middle;" class="p-1">DEDEN ARDIYANTO</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">55.6</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.75</td>
                                    <td style="vertical-align: middle;" class="">66.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.9</td>
                                    <td style="vertical-align: middle;" class="">73.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.45</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">79.2</td>
                                    <td style="vertical-align: middle;" class="">56.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.25</td>
                                    <td style="vertical-align: middle;" class="">66.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.9</td>
                                    <td style="vertical-align: middle;" class="">73.66</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">310</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170338</td>
                                    <td style="vertical-align: middle;" class="p-1">TATAG BUDI WIBOWO</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">57.2</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">63.13</td>
                                    <td style="vertical-align: middle;" class="">68.45</td>
                                    <td style="vertical-align: middle;" class="">69.1</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.37</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">81.32</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">74.08</td>
                                    <td style="vertical-align: middle;" class="">56.5</td>
                                    <td style="vertical-align: middle;" class="">68.32</td>
                                    <td style="vertical-align: middle;" class="">69.1</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">311</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170339</td>
                                    <td style="vertical-align: middle;" class="p-1">YOGA BANGKIT TRI WIBOWO</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">67.48</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">64.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.1</td>
                                    <td style="vertical-align: middle;" class="">73.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.85</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.32</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">56.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">64.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.1</td>
                                    <td style="vertical-align: middle;" class="">73.66</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">312</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170341</td>
                                    <td style="vertical-align: middle;" class="p-1">RIO NOVIANTO</td>
                                    <td style="vertical-align: middle;" class="">65.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.43</td>
                                    <td style="vertical-align: middle;" class="">68.38</td>
                                    <td style="vertical-align: middle;" class="">57.5</td>
                                    <td style="vertical-align: middle;" class="">62.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.4</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.29</td>
                                    <td style="vertical-align: middle;" class="">87</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.4</td>
                                    <td style="vertical-align: middle;" class="">56.4</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">62.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.4</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">73.8</td>
                                    <td style="vertical-align: middle;" class="">59.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">313</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170342</td>
                                    <td style="vertical-align: middle;" class="p-1">SRI WAHYUNINGSIH</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.65</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">67.25</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="">64.77</td>
                                    <td style="vertical-align: middle;" class="">91.5</td>
                                    <td style="vertical-align: middle;" class="">87.52</td>
                                    <td style="vertical-align: middle;" class="">79.52</td>
                                    <td style="vertical-align: middle;" class="">78.12</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">78.8</td>
                                    <td style="vertical-align: middle;" class="">68.6</td>
                                    <td style="vertical-align: middle;" class="">67.74</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">80.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">314</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170348</td>
                                    <td style="vertical-align: middle;" class="p-1">AVINDRA KURNIAWAN</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.2</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">74.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.2</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">59.97</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">74.52</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="">79.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">74.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.2</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">315</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170349</td>
                                    <td style="vertical-align: middle;" class="p-1">ABEL DWIKA FEBRIANSYAH</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.85</td>
                                    <td style="vertical-align: middle;" class="">73.03</td>
                                    <td style="vertical-align: middle;" class="">59.25</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.8</td>
                                    <td style="vertical-align: middle;" class="">73.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.37</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">81.32</td>
                                    <td style="vertical-align: middle;" class="">59.6</td>
                                    <td style="vertical-align: middle;" class="">77.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.75</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.8</td>
                                    <td style="vertical-align: middle;" class="">74.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">316</td>
                                    <td style="vertical-align: middle;" class="p-1">E100170350</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGITA PRASETYANINGTYAS</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.83</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">51.33</td>
                                    <td style="vertical-align: middle;" class="">59.38</td>
                                    <td style="vertical-align: middle;" class="">74.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.1</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">55.53</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="">60.88</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.9</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.1</td>
                                    <td style="vertical-align: middle;" class="">77.66</td>
                                    <td style="vertical-align: middle;" class="">76.2</td>
                                    <td style="vertical-align: middle;" class="">73.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">317</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171015</td>
                                    <td style="vertical-align: middle;" class="p-1">ALBERTA SHENDY LAMANDAU</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">318</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171161</td>
                                    <td style="vertical-align: middle;" class="p-1">AZIS NURWAHYUANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">319</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171179</td>
                                    <td style="vertical-align: middle;" class="p-1">MELATI ZAADA RIZKI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">320</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171204</td>
                                    <td style="vertical-align: middle;" class="p-1">NIRMA QOLBI NISAUL HUSNA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">321</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171212</td>
                                    <td style="vertical-align: middle;" class="p-1">BINTANG SETYA PUTRA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">322</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171213</td>
                                    <td style="vertical-align: middle;" class="p-1">HANANG OCTAVIAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">323</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171255</td>
                                    <td style="vertical-align: middle;" class="p-1">FIAN ANDI TRISNADI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">324</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171259</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDRA RAHMAN HAKIM AKROM</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">325</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171285</td>
                                    <td style="vertical-align: middle;" class="p-1">KURNIAWAN AGUNG PAMBUDI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">326</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171289</td>
                                    <td style="vertical-align: middle;" class="p-1">TESY NONITA DEWI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">327</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171293</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGI RIZKY DAMAYANTI SATRIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">328</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171303</td>
                                    <td style="vertical-align: middle;" class="p-1">ARDHIO WIRA HUTOMO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">329</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171310</td>
                                    <td style="vertical-align: middle;" class="p-1">HIKMAH FAJAR ASSIDIQ</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">330</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171313</td>
                                    <td style="vertical-align: middle;" class="p-1">MONA PATRICIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">331</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171315</td>
                                    <td style="vertical-align: middle;" class="p-1">DINA EKA AGUSTIN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">332</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171316</td>
                                    <td style="vertical-align: middle;" class="p-1">ROFIATUN NUR LATHIFAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">333</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171331</td>
                                    <td style="vertical-align: middle;" class="p-1">FADHILA FIE UMIRIN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">334</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171332</td>
                                    <td style="vertical-align: middle;" class="p-1">WINARNI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">335</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171336</td>
                                    <td style="vertical-align: middle;" class="p-1">NURIN SWASTI KANTHI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">336</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171340</td>
                                    <td style="vertical-align: middle;" class="p-1">AINUL FAHMI NUR ILMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">337</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171343</td>
                                    <td style="vertical-align: middle;" class="p-1">PAJRI YUNUS</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">338</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171344</td>
                                    <td style="vertical-align: middle;" class="p-1">ADANI SABRINA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">339</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171346</td>
                                    <td style="vertical-align: middle;" class="p-1">AZIZ RIDWAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">340</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171351</td>
                                    <td style="vertical-align: middle;" class="p-1">ADHYSTA PROBOSARI PUTRI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">341</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171352</td>
                                    <td style="vertical-align: middle;" class="p-1">YAYANG PUTRIA DHOFIR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">342</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171353</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDI NURSUANDI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">343</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171354</td>
                                    <td style="vertical-align: middle;" class="p-1">IGOR AVIEZENA ERIS</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">344</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171355</td>
                                    <td style="vertical-align: middle;" class="p-1">ALIEF BANI RISWANDA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">345</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171356</td>
                                    <td style="vertical-align: middle;" class="p-1">CAHYO ANUGRA RAMDAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">346</td>
                                    <td style="vertical-align: middle;" class="p-1">E100171357</td>
                                    <td style="vertical-align: middle;" class="p-1">NADIA MAULIDA FATMAWATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">347</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172034</td>
                                    <td style="vertical-align: middle;" class="p-1">RICO EFENDI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.2</td>
                                    <td style="vertical-align: middle;" class="">64.5</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">68.95</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">59.13</td>
                                    <td style="vertical-align: middle;" class="">86.4</td>
                                    <td style="vertical-align: middle;" class="">83.04</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.5</td>
                                    <td style="vertical-align: middle;" class="">69.24</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">348</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172043</td>
                                    <td style="vertical-align: middle;" class="p-1">SIDIQ PRAMONO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">349</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172060</td>
                                    <td style="vertical-align: middle;" class="p-1">SEPTIAN RONAN CANDRA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">350</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172076</td>
                                    <td style="vertical-align: middle;" class="p-1">FATHURRAHMAN ARROZI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">351</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172079</td>
                                    <td style="vertical-align: middle;" class="p-1">MELIANI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">71.95</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">61.05</td>
                                    <td style="vertical-align: middle;" class="">76.4</td>
                                    <td style="vertical-align: middle;" class="">59.84</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">73.68</td>
                                    <td style="vertical-align: middle;" class="">58.75</td>
                                    <td style="vertical-align: middle;" class="">73.12</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="">77.72</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">352</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172158</td>
                                    <td style="vertical-align: middle;" class="p-1">DIANA PRAMESTI LISTIAJI</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.05</td>
                                    <td style="vertical-align: middle;" class="">70.35</td>
                                    <td style="vertical-align: middle;" class="">70.75</td>
                                    <td style="vertical-align: middle;" class="">67.55</td>
                                    <td style="vertical-align: middle;" class="">66.7</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.37</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="">67.2</td>
                                    <td style="vertical-align: middle;" class="">72.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.5</td>
                                    <td style="vertical-align: middle;" class="">67.92</td>
                                    <td style="vertical-align: middle;" class="">66.7</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">77.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">353</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172287</td>
                                    <td style="vertical-align: middle;" class="p-1">IMAM MIFTAHISSUNNAH</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50.65</td>
                                    <td style="vertical-align: middle;" class="">71.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">56.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.8</td>
                                    <td style="vertical-align: middle;" class="">72.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.85</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">87.28</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">77.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.8</td>
                                    <td style="vertical-align: middle;" class="">73.88</td>
                                    <td style="vertical-align: middle;" class="">64.25</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">354</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172306</td>
                                    <td style="vertical-align: middle;" class="p-1">SYIFAA LESTYA ANDINA</td>
                                    <td style="vertical-align: middle;" class="">65.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">64.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">64.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">355</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172335</td>
                                    <td style="vertical-align: middle;" class="p-1">DWI ANITA KUMALASARI</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">55.38</td>
                                    <td style="vertical-align: middle;" class="">73.63</td>
                                    <td style="vertical-align: middle;" class="">63.13</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">60.57</td>
                                    <td style="vertical-align: middle;" class="">88</td>
                                    <td style="vertical-align: middle;" class="">80.28</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="">61.25</td>
                                    <td style="vertical-align: middle;" class="">67.28</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">76.83</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">356</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172345</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGITA ROBBY GUNAWAN</td>
                                    <td style="vertical-align: middle;" class="">80.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.1</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">54.33</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">58.08</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.22</td>
                                    <td style="vertical-align: middle;" class="">60.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.1</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">72.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">357</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172347</td>
                                    <td style="vertical-align: middle;" class="p-1">RONI SIANTURI</td>
                                    <td style="vertical-align: middle;" class="">73.84</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="">65.75</td>
                                    <td style="vertical-align: middle;" class="">62.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.49</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">69.36</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">78.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.25</td>
                                    <td style="vertical-align: middle;" class="">63.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">53.5</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">70.6</td>
                                    <td style="vertical-align: middle;" class="">70.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">358</td>
                                    <td style="vertical-align: middle;" class="p-1">E100172358</td>
                                    <td style="vertical-align: middle;" class="p-1">SENDI SULISTYOWATI</td>
                                    <td style="vertical-align: middle;" class="">65.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.5</td>
                                    <td style="vertical-align: middle;" class="">78.33</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="">66.1</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">52.05</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">69.92</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">77.92</td>
                                    <td style="vertical-align: middle;" class="">60.25</td>
                                    <td style="vertical-align: middle;" class="">65.88</td>
                                    <td style="vertical-align: middle;" class="">69.7</td>
                                    <td style="vertical-align: middle;" class="">76.8</td>
                                    <td style="vertical-align: middle;" class="">78.2</td>
                                    <td style="vertical-align: middle;" class="">73.76</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr class="bg-warning text-white">
                                    <td style="vertical-align: middle;" colspan="3" class="p-1">Jumlah MK tidak terpenuhi</td>
                                    <td style="vertical-align: middle;">70</td>
                                    <td style="vertical-align: middle;">276</td>
                                    <td style="vertical-align: middle;">92</td>
                                    <td style="vertical-align: middle;">114</td>
                                    <td style="vertical-align: middle;">90</td>
                                    <td style="vertical-align: middle;">139</td>
                                    <td style="vertical-align: middle;">93</td>
                                    <td style="vertical-align: middle;">161</td>
                                    <td style="vertical-align: middle;">86</td>
                                    <td style="vertical-align: middle;">134</td>
                                    <td style="vertical-align: middle;">86</td>
                                    <td style="vertical-align: middle;">91</td>
                                    <td style="vertical-align: middle;">253</td>
                                    <td style="vertical-align: middle;">83</td>
                                    <td style="vertical-align: middle;">139</td>
                                    <td style="vertical-align: middle;">93</td>
                                    <td style="vertical-align: middle;">122</td>
                                    <td style="vertical-align: middle;">89</td>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['CPL.1', 'CPL.2', 'CPL.3', 'CPL.4', 'CPL.5', 'CPL.6'],
            datasets: [{
                    label: 'batas min.',
                    data: [50, 50, 50, 50, 50, 50],
                    borderWidth: 1,
                    backgroundColor: 'rgba(255, 99, 132, 0.5)'
                }, {
                    label: 'CPL terpenuhi',
                    data: [70, 80, 80, 90, 30, 30],
                    borderWidth: 1,
                    backgroundColor: 'rgba(54, 162, 235)'
                },
                {
                    label: 'target',
                    data: [68, 68, 68, 68, 68, 68],
                    borderWidth: 1,
                    backgroundColor: 'rgba(115, 243, 98, 0.5)'
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?= $this->endSection(); ?>