<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">CPL Angkatan</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Angkatan</label>
                    <input type="number" class="form-control filter-thn" value="" onchange="loadMhs()">
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
                <div class="card card-info">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>2016 - Program Studi Teknik Elektro</h4>
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table style="font-size: 10px;" class="table table-bordered bg-white table-responsive" width="100%">
                            <thead class="text-center text-white bg-primary">
                                <tr class="text-white">
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">No</th>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">NIM</th>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">Nama Mahasiswa</th>
                                    <th class="text-white" style="vertical-align: middle;" colspan="9">Capaian Pembelajaran Lulusan (CPL)</th>
                                    <th class="text-white" style="vertical-align: middle;" rowspan="2">CPL tdk terpenuhi</th>
                                </tr>
                                <tr>
                                    <th class="text-white">1</th>
                                    <th class="text-white">2</th>
                                    <th class="text-white">3</th>
                                    <th class="text-white">4</th>
                                    <th class="text-white">5</th>
                                    <th class="text-white">6</th>
                                    <th class="text-white">7</th>
                                    <th class="text-white">8</th>
                                    <th class="text-white">9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle;">1</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180001</td>
                                    <td style="vertical-align: middle;" class="p-1">AL FATHIYA FALAH</td>
                                    <td style="vertical-align: middle;" class="">70.69</td>
                                    <td style="vertical-align: middle;" class="">74.87</td>
                                    <td style="vertical-align: middle;" class="">72.29</td>
                                    <td style="vertical-align: middle;" class="">72.31</td>
                                    <td style="vertical-align: middle;" class="">72.3</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">66.24</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">2</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180003</td>
                                    <td style="vertical-align: middle;" class="p-1">MUSTOFA AJI KUSUMA S.</td>
                                    <td style="vertical-align: middle;" class="">64.53</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">62.89</td>
                                    <td style="vertical-align: middle;" class="">60.33</td>
                                    <td style="vertical-align: middle;" class="">54.44</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">72.58</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">3</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180005</td>
                                    <td style="vertical-align: middle;" class="p-1">GIGA VIANDA</td>
                                    <td style="vertical-align: middle;" class="">66.48</td>
                                    <td style="vertical-align: middle;" class="">62.18</td>
                                    <td style="vertical-align: middle;" class="">69.97</td>
                                    <td style="vertical-align: middle;" class="">67.62</td>
                                    <td style="vertical-align: middle;" class="">73.97</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">71.17</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="">61.62</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">4</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180006</td>
                                    <td style="vertical-align: middle;" class="p-1">ALAM MAULANA BARU</td>
                                    <td style="vertical-align: middle;" class="">72.39</td>
                                    <td style="vertical-align: middle;" class="">80.23</td>
                                    <td style="vertical-align: middle;" class="">74.48</td>
                                    <td style="vertical-align: middle;" class="">71.86</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">65.64</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">5</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180007</td>
                                    <td style="vertical-align: middle;" class="p-1">RAHMAWATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">6</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180008</td>
                                    <td style="vertical-align: middle;" class="p-1">NOVARIS ADI NUGROHO</td>
                                    <td style="vertical-align: middle;" class="">65.93</td>
                                    <td style="vertical-align: middle;" class="">74.04</td>
                                    <td style="vertical-align: middle;" class="">74.46</td>
                                    <td style="vertical-align: middle;" class="">69.57</td>
                                    <td style="vertical-align: middle;" class="">70.53</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">60.42</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">7</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180009</td>
                                    <td style="vertical-align: middle;" class="p-1">BAYU ADITYA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">76.31</td>
                                    <td style="vertical-align: middle;" class="">81.28</td>
                                    <td style="vertical-align: middle;" class="">81.84</td>
                                    <td style="vertical-align: middle;" class="">78.72</td>
                                    <td style="vertical-align: middle;" class="">83.24</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">78.83</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">65.88</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">8</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180010</td>
                                    <td style="vertical-align: middle;" class="p-1">FARISA RAHMASARI</td>
                                    <td style="vertical-align: middle;" class="">75.59</td>
                                    <td style="vertical-align: middle;" class="">80.48</td>
                                    <td style="vertical-align: middle;" class="">80.97</td>
                                    <td style="vertical-align: middle;" class="">76.35</td>
                                    <td style="vertical-align: middle;" class="">75.74</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">60.84</td>
                                    <td style="vertical-align: middle;" class="">62.66</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">9</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180020</td>
                                    <td style="vertical-align: middle;" class="p-1">ALVIN BHAKTI SATRIYA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">10</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180026</td>
                                    <td style="vertical-align: middle;" class="p-1">DIDIED ARIE PUTRA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1.81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">11</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180031</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD NUR IKHSAN</td>
                                    <td style="vertical-align: middle;" class="">67.78</td>
                                    <td style="vertical-align: middle;" class="">78.66</td>
                                    <td style="vertical-align: middle;" class="">77.24</td>
                                    <td style="vertical-align: middle;" class="">77.53</td>
                                    <td style="vertical-align: middle;" class="">75.32</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">73.97</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">62.09</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">12</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180033</td>
                                    <td style="vertical-align: middle;" class="p-1">NABILLA APRIANDINA ANANDYA RIYANTO</td>
                                    <td style="vertical-align: middle;" class="">64.88</td>
                                    <td style="vertical-align: middle;" class="">74.37</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="">68.49</td>
                                    <td style="vertical-align: middle;" class="">55.58</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">60.99</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">13</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180040</td>
                                    <td style="vertical-align: middle;" class="p-1">NADIA FITRIANTI</td>
                                    <td style="vertical-align: middle;" class="">74.98</td>
                                    <td style="vertical-align: middle;" class="">78.55</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">78.07</td>
                                    <td style="vertical-align: middle;" class="">79.22</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">63.24</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">14</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180043</td>
                                    <td style="vertical-align: middle;" class="p-1">NIKO NOVAL FAJRIYANTO</td>
                                    <td style="vertical-align: middle;" class="">69.17</td>
                                    <td style="vertical-align: middle;" class="">76.7</td>
                                    <td style="vertical-align: middle;" class="">73.24</td>
                                    <td style="vertical-align: middle;" class="">68.12</td>
                                    <td style="vertical-align: middle;" class="">68.53</td>
                                    <td style="vertical-align: middle;" class="">88.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">15</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180052</td>
                                    <td style="vertical-align: middle;" class="p-1">FADILAH ISROKHAYATI</td>
                                    <td style="vertical-align: middle;" class="">73.33</td>
                                    <td style="vertical-align: middle;" class="">79.08</td>
                                    <td style="vertical-align: middle;" class="">82.01</td>
                                    <td style="vertical-align: middle;" class="">77.14</td>
                                    <td style="vertical-align: middle;" class="">76.28</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.44</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">16</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180055</td>
                                    <td style="vertical-align: middle;" class="p-1">AQSAL NINO RAIHAN</td>
                                    <td style="vertical-align: middle;" class="">65.73</td>
                                    <td style="vertical-align: middle;" class="">71.15</td>
                                    <td style="vertical-align: middle;" class="">69.56</td>
                                    <td style="vertical-align: middle;" class="">66.39</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">60.35</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">17</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180056</td>
                                    <td style="vertical-align: middle;" class="p-1">ARDY FIRMAN RAMADHANI</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="">80.07</td>
                                    <td style="vertical-align: middle;" class="">77.31</td>
                                    <td style="vertical-align: middle;" class="">73.24</td>
                                    <td style="vertical-align: middle;" class="">69.65</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">66.1</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">18</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180057</td>
                                    <td style="vertical-align: middle;" class="p-1">NABILA HANA WIMANDA</td>
                                    <td style="vertical-align: middle;" class="">77.9</td>
                                    <td style="vertical-align: middle;" class="">77.4</td>
                                    <td style="vertical-align: middle;" class="">79.67</td>
                                    <td style="vertical-align: middle;" class="">78.87</td>
                                    <td style="vertical-align: middle;" class="">80.15</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">19</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180060</td>
                                    <td style="vertical-align: middle;" class="p-1">IKHSAN ARDIANSYAH HERMAWAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">20</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180062</td>
                                    <td style="vertical-align: middle;" class="p-1">ARIYANI ZULI SETYANINGRUM</td>
                                    <td style="vertical-align: middle;" class="">74.76</td>
                                    <td style="vertical-align: middle;" class="">79.64</td>
                                    <td style="vertical-align: middle;" class="">78.41</td>
                                    <td style="vertical-align: middle;" class="">71.94</td>
                                    <td style="vertical-align: middle;" class="">74.67</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">63.48</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">21</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180063</td>
                                    <td style="vertical-align: middle;" class="p-1">MERDA BRILIANNITA HENDRAWATI</td>
                                    <td style="vertical-align: middle;" class="">79.08</td>
                                    <td style="vertical-align: middle;" class="">76.92</td>
                                    <td style="vertical-align: middle;" class="">75.08</td>
                                    <td style="vertical-align: middle;" class="">69.96</td>
                                    <td style="vertical-align: middle;" class="">73.14</td>
                                    <td style="vertical-align: middle;" class="">81.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">59.58</td>
                                    <td style="vertical-align: middle;" class="">62.63</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">22</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180064</td>
                                    <td style="vertical-align: middle;" class="p-1">BERNIKA SAFA AYU ARSYANI</td>
                                    <td style="vertical-align: middle;" class="">70.82</td>
                                    <td style="vertical-align: middle;" class="">76.79</td>
                                    <td style="vertical-align: middle;" class="">63.48</td>
                                    <td style="vertical-align: middle;" class="">66.55</td>
                                    <td style="vertical-align: middle;" class="">66.22</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">62.52</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">23</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180066</td>
                                    <td style="vertical-align: middle;" class="p-1">FARAH AQIELLA SAKINATUN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">24</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180067</td>
                                    <td style="vertical-align: middle;" class="p-1">ZOLANDA CINDY ARISTA</td>
                                    <td style="vertical-align: middle;" class="">69.37</td>
                                    <td style="vertical-align: middle;" class="">78.06</td>
                                    <td style="vertical-align: middle;" class="">77.81</td>
                                    <td style="vertical-align: middle;" class="">71.97</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">62.09</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">25</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180068</td>
                                    <td style="vertical-align: middle;" class="p-1">YUDHI WAHYU YULIANTO</td>
                                    <td style="vertical-align: middle;" class="">69.26</td>
                                    <td style="vertical-align: middle;" class="">74.92</td>
                                    <td style="vertical-align: middle;" class="">72.82</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">66.31</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.26</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">26</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180069</td>
                                    <td style="vertical-align: middle;" class="p-1">JANUAR AHMAD MUKHLIS</td>
                                    <td style="vertical-align: middle;" class="">65.51</td>
                                    <td style="vertical-align: middle;" class="">74.17</td>
                                    <td style="vertical-align: middle;" class="">72.79</td>
                                    <td style="vertical-align: middle;" class="">66.59</td>
                                    <td style="vertical-align: middle;" class="">66.16</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">59.39</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">27</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180070</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD FASKI ALFATIH</td>
                                    <td style="vertical-align: middle;" class="">64.04</td>
                                    <td style="vertical-align: middle;" class="">59.52</td>
                                    <td style="vertical-align: middle;" class="">56.37</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">61.62</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">28</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180071</td>
                                    <td style="vertical-align: middle;" class="p-1">BAHARUDIN YUSUF HABIEBIE</td>
                                    <td style="vertical-align: middle;" class="">55.86</td>
                                    <td style="vertical-align: middle;" class="">64.11</td>
                                    <td style="vertical-align: middle;" class="">79.24</td>
                                    <td style="vertical-align: middle;" class="">67.91</td>
                                    <td style="vertical-align: middle;" class="">76.79</td>
                                    <td style="vertical-align: middle;" class="">87</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">63.36</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">29</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180072</td>
                                    <td style="vertical-align: middle;" class="p-1">ORYZA SATIVA PUTRI NADYA</td>
                                    <td style="vertical-align: middle;" class="">70.43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.74</td>
                                    <td style="vertical-align: middle;" class="">53.92</td>
                                    <td style="vertical-align: middle;" class="">62.11</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">74.4</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">59.84</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">30</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180073</td>
                                    <td style="vertical-align: middle;" class="p-1">IMAM HANAFI</td>
                                    <td style="vertical-align: middle;" class="">71.48</td>
                                    <td style="vertical-align: middle;" class="">79.53</td>
                                    <td style="vertical-align: middle;" class="">79.84</td>
                                    <td style="vertical-align: middle;" class="">75.05</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">63.26</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">31</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180074</td>
                                    <td style="vertical-align: middle;" class="p-1">FARRELEO ARDANA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">32</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180075</td>
                                    <td style="vertical-align: middle;" class="p-1">HARIZA AFIA AKTAVIANI</td>
                                    <td style="vertical-align: middle;" class="">69.71</td>
                                    <td style="vertical-align: middle;" class="">75.74</td>
                                    <td style="vertical-align: middle;" class="">70.54</td>
                                    <td style="vertical-align: middle;" class="">70.99</td>
                                    <td style="vertical-align: middle;" class="">68.55</td>
                                    <td style="vertical-align: middle;" class="">55</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">62.52</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">33</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180076</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD RAIHAN SATRIA BAGASKARA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">34</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180077</td>
                                    <td style="vertical-align: middle;" class="p-1">NICKEN AYU ANDHIKA MAYANGSARI</td>
                                    <td style="vertical-align: middle;" class="">77.27</td>
                                    <td style="vertical-align: middle;" class="">78.6</td>
                                    <td style="vertical-align: middle;" class="">79.43</td>
                                    <td style="vertical-align: middle;" class="">76.78</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">85</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.82</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">35</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180078</td>
                                    <td style="vertical-align: middle;" class="p-1">GANANG BIMA FERIAWAN</td>
                                    <td style="vertical-align: middle;" class="">72.07</td>
                                    <td style="vertical-align: middle;" class="">70.69</td>
                                    <td style="vertical-align: middle;" class="">67.36</td>
                                    <td style="vertical-align: middle;" class="">66.11</td>
                                    <td style="vertical-align: middle;" class="">53.4</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">61.14</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">36</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180079</td>
                                    <td style="vertical-align: middle;" class="p-1">NURUL HIDAYATI ISLAMIYAH</td>
                                    <td style="vertical-align: middle;" class="">76.84</td>
                                    <td style="vertical-align: middle;" class="">80.66</td>
                                    <td style="vertical-align: middle;" class="">82.18</td>
                                    <td style="vertical-align: middle;" class="">78.53</td>
                                    <td style="vertical-align: middle;" class="">78.55</td>
                                    <td style="vertical-align: middle;" class="">83</td>
                                    <td style="vertical-align: middle;" class="">73.37</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">62.63</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">37</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180080</td>
                                    <td style="vertical-align: middle;" class="p-1">PANDU PRAWIRA UTAMA</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">65.3</td>
                                    <td style="vertical-align: middle;" class="">68.17</td>
                                    <td style="vertical-align: middle;" class="">64.48</td>
                                    <td style="vertical-align: middle;" class="">67.63</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="">73.97</td>
                                    <td style="vertical-align: middle;" class="">75.2</td>
                                    <td style="vertical-align: middle;" class="">74.99</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">38</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180081</td>
                                    <td style="vertical-align: middle;" class="p-1">SISKA WIDIYANINGTYAS</td>
                                    <td style="vertical-align: middle;" class="">77.66</td>
                                    <td style="vertical-align: middle;" class="">79.92</td>
                                    <td style="vertical-align: middle;" class="">81.82</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">77.17</td>
                                    <td style="vertical-align: middle;" class="">84.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.83</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">39</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180082</td>
                                    <td style="vertical-align: middle;" class="p-1">NAFA PUTRI MUKTI ASIH</td>
                                    <td style="vertical-align: middle;" class="">74.68</td>
                                    <td style="vertical-align: middle;" class="">78.09</td>
                                    <td style="vertical-align: middle;" class="">70.68</td>
                                    <td style="vertical-align: middle;" class="">63.91</td>
                                    <td style="vertical-align: middle;" class="">69.73</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">62.28</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">40</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180083</td>
                                    <td style="vertical-align: middle;" class="p-1">ANOM WISNU WIJAKSONO</td>
                                    <td style="vertical-align: middle;" class="">73.27</td>
                                    <td style="vertical-align: middle;" class="">82.07</td>
                                    <td style="vertical-align: middle;" class="">79.89</td>
                                    <td style="vertical-align: middle;" class="">76.81</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">63.31</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">41</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180084</td>
                                    <td style="vertical-align: middle;" class="p-1">YUSLIM KHOTAMI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">74.87</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">42</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180085</td>
                                    <td style="vertical-align: middle;" class="p-1">DINDA ENGGAR LARASATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.11</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.91</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13.54</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">43</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180086</td>
                                    <td style="vertical-align: middle;" class="p-1">YUNAN AKHMAD ISNANTO</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="">79.82</td>
                                    <td style="vertical-align: middle;" class="">77.68</td>
                                    <td style="vertical-align: middle;" class="">75.33</td>
                                    <td style="vertical-align: middle;" class="">73.07</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">73.37</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">66.36</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">44</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180087</td>
                                    <td style="vertical-align: middle;" class="p-1">ARMANDA OKI PRAKOSO</td>
                                    <td style="vertical-align: middle;" class="">71.18</td>
                                    <td style="vertical-align: middle;" class="">59.09</td>
                                    <td style="vertical-align: middle;" class="">61.97</td>
                                    <td style="vertical-align: middle;" class="">61.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.09</td>
                                    <td style="vertical-align: middle;" class="">52.5</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">64.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">45</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180088</td>
                                    <td style="vertical-align: middle;" class="p-1">ECKY SHAFIRA MAHARANI DEWI</td>
                                    <td style="vertical-align: middle;" class="">62.14</td>
                                    <td style="vertical-align: middle;" class="">72.74</td>
                                    <td style="vertical-align: middle;" class="">75.42</td>
                                    <td style="vertical-align: middle;" class="">72.64</td>
                                    <td style="vertical-align: middle;" class="">68.03</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">61.13</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">46</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180089</td>
                                    <td style="vertical-align: middle;" class="p-1">TIARA RIZKA ANINDHITA</td>
                                    <td style="vertical-align: middle;" class="">68.37</td>
                                    <td style="vertical-align: middle;" class="">64.52</td>
                                    <td style="vertical-align: middle;" class="">65.99</td>
                                    <td style="vertical-align: middle;" class="">68.53</td>
                                    <td style="vertical-align: middle;" class="">68.65</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.18</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">47</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180090</td>
                                    <td style="vertical-align: middle;" class="p-1">ARISTA CAHYANINGRUM</td>
                                    <td style="vertical-align: middle;" class="">71.94</td>
                                    <td style="vertical-align: middle;" class="">75.32</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">79.4</td>
                                    <td style="vertical-align: middle;" class="">91</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">48</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180091</td>
                                    <td style="vertical-align: middle;" class="p-1">RIFQI ZUHDI</td>
                                    <td style="vertical-align: middle;" class="">63.36</td>
                                    <td style="vertical-align: middle;" class="">74.59</td>
                                    <td style="vertical-align: middle;" class="">67.78</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">67.57</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">60.42</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">49</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180092</td>
                                    <td style="vertical-align: middle;" class="p-1">DANANDA ANGGARA PUTRA</td>
                                    <td style="vertical-align: middle;" class="">75.62</td>
                                    <td style="vertical-align: middle;" class="">82.21</td>
                                    <td style="vertical-align: middle;" class="">81.48</td>
                                    <td style="vertical-align: middle;" class="">80.3</td>
                                    <td style="vertical-align: middle;" class="">83.45</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">73.23</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">62.52</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">50</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180093</td>
                                    <td style="vertical-align: middle;" class="p-1">YUSNITA HANDAYANI</td>
                                    <td style="vertical-align: middle;" class="">61.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.91</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.21</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.5</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">51</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180094</td>
                                    <td style="vertical-align: middle;" class="p-1">FAUZAN MUHAMMAD RAFI</td>
                                    <td style="vertical-align: middle;" class="">65.26</td>
                                    <td style="vertical-align: middle;" class="">66.69</td>
                                    <td style="vertical-align: middle;" class="">59.96</td>
                                    <td style="vertical-align: middle;" class="">58.53</td>
                                    <td style="vertical-align: middle;" class="">58.52</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">73.2</td>
                                    <td style="vertical-align: middle;" class="">72.94</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">52</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180095</td>
                                    <td style="vertical-align: middle;" class="p-1">RINDO PLAMINO</td>
                                    <td style="vertical-align: middle;" class="">72.08</td>
                                    <td style="vertical-align: middle;" class="">83.77</td>
                                    <td style="vertical-align: middle;" class="">81.28</td>
                                    <td style="vertical-align: middle;" class="">75.84</td>
                                    <td style="vertical-align: middle;" class="">78.17</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">61.56</td>
                                    <td style="vertical-align: middle;" class="">63.48</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">53</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180096</td>
                                    <td style="vertical-align: middle;" class="p-1">RYAN ZAKARYA YAHYA</td>
                                    <td style="vertical-align: middle;" class="">68.96</td>
                                    <td style="vertical-align: middle;" class="">77.66</td>
                                    <td style="vertical-align: middle;" class="">79.22</td>
                                    <td style="vertical-align: middle;" class="">74.58</td>
                                    <td style="vertical-align: middle;" class="">77.18</td>
                                    <td style="vertical-align: middle;" class="">87.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">76.24</td>
                                    <td style="vertical-align: middle;" class="">76.92</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">54</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180097</td>
                                    <td style="vertical-align: middle;" class="p-1">KHOLIQ IHSANUDIN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.88</td>
                                    <td style="vertical-align: middle;" class="">52.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.17</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17.5</td>
                                    <td style="vertical-align: middle;" class="">56.47</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.62</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">55</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180098</td>
                                    <td style="vertical-align: middle;" class="p-1">AJENG ARLENDA PUTRI</td>
                                    <td style="vertical-align: middle;" class="">50.08</td>
                                    <td style="vertical-align: middle;" class="">78.73</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">71.68</td>
                                    <td style="vertical-align: middle;" class="">76.06</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.94</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">56</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180099</td>
                                    <td style="vertical-align: middle;" class="p-1">TATA BANGUN ISTIQFAR</td>
                                    <td style="vertical-align: middle;" class="">60.62</td>
                                    <td style="vertical-align: middle;" class="">72.31</td>
                                    <td style="vertical-align: middle;" class="">65.51</td>
                                    <td style="vertical-align: middle;" class="">61.56</td>
                                    <td style="vertical-align: middle;" class="">57.83</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">51.6</td>
                                    <td style="vertical-align: middle;" class="">58.54</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">57</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180100</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD CHOIRUL FATIHIN</td>
                                    <td style="vertical-align: middle;" class="">56.81</td>
                                    <td style="vertical-align: middle;" class="">63.52</td>
                                    <td style="vertical-align: middle;" class="">69.15</td>
                                    <td style="vertical-align: middle;" class="">64.68</td>
                                    <td style="vertical-align: middle;" class="">53.58</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">60.06</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">58</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180101</td>
                                    <td style="vertical-align: middle;" class="p-1">ADE FAJAR KURNIAWAN</td>
                                    <td style="vertical-align: middle;" class="">62.05</td>
                                    <td style="vertical-align: middle;" class="">72.6</td>
                                    <td style="vertical-align: middle;" class="">75.69</td>
                                    <td style="vertical-align: middle;" class="">70.29</td>
                                    <td style="vertical-align: middle;" class="">75.7</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">70.96</td>
                                    <td style="vertical-align: middle;" class="">75.04</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">59</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180102</td>
                                    <td style="vertical-align: middle;" class="p-1">NIKEN PURNAMASARI</td>
                                    <td style="vertical-align: middle;" class="">71.3</td>
                                    <td style="vertical-align: middle;" class="">74.21</td>
                                    <td style="vertical-align: middle;" class="">64.39</td>
                                    <td style="vertical-align: middle;" class="">61.43</td>
                                    <td style="vertical-align: middle;" class="">61.66</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">61.26</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">60</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180103</td>
                                    <td style="vertical-align: middle;" class="p-1">REFORMASI DWIAN MAHARDIKA</td>
                                    <td style="vertical-align: middle;" class="">69.69</td>
                                    <td style="vertical-align: middle;" class="">77.73</td>
                                    <td style="vertical-align: middle;" class="">77.94</td>
                                    <td style="vertical-align: middle;" class="">77.64</td>
                                    <td style="vertical-align: middle;" class="">78.25</td>
                                    <td style="vertical-align: middle;" class="">84.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.49</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">61</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180104</td>
                                    <td style="vertical-align: middle;" class="p-1">AISYAH NUR DIMARYATI</td>
                                    <td style="vertical-align: middle;" class="">75.36</td>
                                    <td style="vertical-align: middle;" class="">73.8</td>
                                    <td style="vertical-align: middle;" class="">76.96</td>
                                    <td style="vertical-align: middle;" class="">73.27</td>
                                    <td style="vertical-align: middle;" class="">74.15</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">62.16</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">62</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180105</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS SURYO UTOMO</td>
                                    <td style="vertical-align: middle;" class="">73.13</td>
                                    <td style="vertical-align: middle;" class="">78.77</td>
                                    <td style="vertical-align: middle;" class="">80.7</td>
                                    <td style="vertical-align: middle;" class="">77.89</td>
                                    <td style="vertical-align: middle;" class="">79.76</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">65.6</td>
                                    <td style="vertical-align: middle;" class="">75.21</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">63</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180108</td>
                                    <td style="vertical-align: middle;" class="p-1">ISNAINI NURIL HUDA</td>
                                    <td style="vertical-align: middle;" class="">68.71</td>
                                    <td style="vertical-align: middle;" class="">80.98</td>
                                    <td style="vertical-align: middle;" class="">79.44</td>
                                    <td style="vertical-align: middle;" class="">72.97</td>
                                    <td style="vertical-align: middle;" class="">75.37</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">67.84</td>
                                    <td style="vertical-align: middle;" class="">74.84</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">64</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180109</td>
                                    <td style="vertical-align: middle;" class="p-1">RAHMAT RAMADHANA</td>
                                    <td style="vertical-align: middle;" class="">71.36</td>
                                    <td style="vertical-align: middle;" class="">55.3</td>
                                    <td style="vertical-align: middle;" class="">51.12</td>
                                    <td style="vertical-align: middle;" class="">54.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.9</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">58.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">65</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180110</td>
                                    <td style="vertical-align: middle;" class="p-1">KUNTO WIBISONO</td>
                                    <td style="vertical-align: middle;" class="">71.64</td>
                                    <td style="vertical-align: middle;" class="">77.17</td>
                                    <td style="vertical-align: middle;" class="">61.23</td>
                                    <td style="vertical-align: middle;" class="">62.57</td>
                                    <td style="vertical-align: middle;" class="">59.73</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.91</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">66</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180111</td>
                                    <td style="vertical-align: middle;" class="p-1">DODHI KURNIAWAN WIDODO</td>
                                    <td style="vertical-align: middle;" class="">78.38</td>
                                    <td style="vertical-align: middle;" class="">81.44</td>
                                    <td style="vertical-align: middle;" class="">80.56</td>
                                    <td style="vertical-align: middle;" class="">79.66</td>
                                    <td style="vertical-align: middle;" class="">80.44</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">64.56</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">67</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180112</td>
                                    <td style="vertical-align: middle;" class="p-1">DWI FITRIA PUSPITASARI</td>
                                    <td style="vertical-align: middle;" class="">69.51</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">69.08</td>
                                    <td style="vertical-align: middle;" class="">71.49</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">68</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180113</td>
                                    <td style="vertical-align: middle;" class="p-1">NURAISAH JAMIL</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">57.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">69</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180114</td>
                                    <td style="vertical-align: middle;" class="p-1">RADHYKA GALIH PRANATA</td>
                                    <td style="vertical-align: middle;" class="">65.91</td>
                                    <td style="vertical-align: middle;" class="">74.22</td>
                                    <td style="vertical-align: middle;" class="">63.07</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="">61.43</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">70</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180115</td>
                                    <td style="vertical-align: middle;" class="p-1">AFIQ MURTADHO</td>
                                    <td style="vertical-align: middle;" class="">73.72</td>
                                    <td style="vertical-align: middle;" class="">76.08</td>
                                    <td style="vertical-align: middle;" class="">78.04</td>
                                    <td style="vertical-align: middle;" class="">73.75</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">71</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180116</td>
                                    <td style="vertical-align: middle;" class="p-1">TAUFIK HIDAYAT</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.73</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.69</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">72</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180117</td>
                                    <td style="vertical-align: middle;" class="p-1">LESTYA YOGA TANZILAL AZIZI</td>
                                    <td style="vertical-align: middle;" class="">64.89</td>
                                    <td style="vertical-align: middle;" class="">68.24</td>
                                    <td style="vertical-align: middle;" class="">67.04</td>
                                    <td style="vertical-align: middle;" class="">67.83</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">60.44</td>
                                    <td style="vertical-align: middle;" class="">71.61</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">73</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180118</td>
                                    <td style="vertical-align: middle;" class="p-1">INAS YUSRIYAH</td>
                                    <td style="vertical-align: middle;" class="">68.54</td>
                                    <td style="vertical-align: middle;" class="">78.58</td>
                                    <td style="vertical-align: middle;" class="">75.02</td>
                                    <td style="vertical-align: middle;" class="">72.39</td>
                                    <td style="vertical-align: middle;" class="">75.05</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">65.84</td>
                                    <td style="vertical-align: middle;" class="">78.8</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">74</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180119</td>
                                    <td style="vertical-align: middle;" class="p-1">DEDY SETIAWAN</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="">72.91</td>
                                    <td style="vertical-align: middle;" class="">70.56</td>
                                    <td style="vertical-align: middle;" class="">66.65</td>
                                    <td style="vertical-align: middle;" class="">68.64</td>
                                    <td style="vertical-align: middle;" class="">77.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">61.63</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">75</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180120</td>
                                    <td style="vertical-align: middle;" class="p-1">REZA DARMAWANSYAH</td>
                                    <td style="vertical-align: middle;" class="">75.06</td>
                                    <td style="vertical-align: middle;" class="">79.08</td>
                                    <td style="vertical-align: middle;" class="">74.02</td>
                                    <td style="vertical-align: middle;" class="">74.32</td>
                                    <td style="vertical-align: middle;" class="">77.13</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">64.02</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">76</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180121</td>
                                    <td style="vertical-align: middle;" class="p-1">ESTI MUNAWAROH</td>
                                    <td style="vertical-align: middle;" class="">69.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">21.87</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">36.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32.53</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">77</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180122</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD EFENDI</td>
                                    <td style="vertical-align: middle;" class="">54.35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.34</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.42</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.37</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">57.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">21.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">78</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180123</td>
                                    <td style="vertical-align: middle;" class="p-1">SHAFIRA NUR SHALSHABILA</td>
                                    <td style="vertical-align: middle;" class="">73.74</td>
                                    <td style="vertical-align: middle;" class="">76.57</td>
                                    <td style="vertical-align: middle;" class="">80.07</td>
                                    <td style="vertical-align: middle;" class="">79.31</td>
                                    <td style="vertical-align: middle;" class="">79.69</td>
                                    <td style="vertical-align: middle;" class="">87</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">69.66</td>
                                    <td style="vertical-align: middle;" class="">63.84</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">79</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180124</td>
                                    <td style="vertical-align: middle;" class="p-1">RENANDO ARKO SAPUTRO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0.91</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">80</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180125</td>
                                    <td style="vertical-align: middle;" class="p-1">YOGAFIDA BHAKTIAR MARULY</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">61.55</td>
                                    <td style="vertical-align: middle;" class="">61.58</td>
                                    <td style="vertical-align: middle;" class="">65.16</td>
                                    <td style="vertical-align: middle;" class="">54.49</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">70.09</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">81</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180126</td>
                                    <td style="vertical-align: middle;" class="p-1">EKA PUTRI YUSNITA SARI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">82</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180127</td>
                                    <td style="vertical-align: middle;" class="p-1">LAILY IDHA MARATU SOLEHA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.02</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.67</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">83</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180128</td>
                                    <td style="vertical-align: middle;" class="p-1">MAHESA SHEVA SONY PUTRA</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">72.64</td>
                                    <td style="vertical-align: middle;" class="">68.59</td>
                                    <td style="vertical-align: middle;" class="">64.76</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">70.89</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">84</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180129</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDRI SOLEH PAMBUDI</td>
                                    <td style="vertical-align: middle;" class="">74.3</td>
                                    <td style="vertical-align: middle;" class="">81.14</td>
                                    <td style="vertical-align: middle;" class="">80.99</td>
                                    <td style="vertical-align: middle;" class="">80.16</td>
                                    <td style="vertical-align: middle;" class="">79.87</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">65.37</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">85</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180130</td>
                                    <td style="vertical-align: middle;" class="p-1">ANANDA BELLA MUTIARA</td>
                                    <td style="vertical-align: middle;" class="">68.85</td>
                                    <td style="vertical-align: middle;" class="">69.78</td>
                                    <td style="vertical-align: middle;" class="">71.71</td>
                                    <td style="vertical-align: middle;" class="">61.09</td>
                                    <td style="vertical-align: middle;" class="">57.79</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="">64.32</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">86</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180131</td>
                                    <td style="vertical-align: middle;" class="p-1">TRI JOKO ARIF NUGROHO</td>
                                    <td style="vertical-align: middle;" class="">74.26</td>
                                    <td style="vertical-align: middle;" class="">79.12</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">76.78</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">80.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">60.84</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">87</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180132</td>
                                    <td style="vertical-align: middle;" class="p-1">ILHAM BAGUS YULIYANTO</td>
                                    <td style="vertical-align: middle;" class="">71.87</td>
                                    <td style="vertical-align: middle;" class="">80.07</td>
                                    <td style="vertical-align: middle;" class="">77.74</td>
                                    <td style="vertical-align: middle;" class="">73.35</td>
                                    <td style="vertical-align: middle;" class="">70.42</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">75.8</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">88</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180133</td>
                                    <td style="vertical-align: middle;" class="p-1">ROFIQI NAUFAL AZIZI</td>
                                    <td style="vertical-align: middle;" class="">74.17</td>
                                    <td style="vertical-align: middle;" class="">75.76</td>
                                    <td style="vertical-align: middle;" class="">77.96</td>
                                    <td style="vertical-align: middle;" class="">76.34</td>
                                    <td style="vertical-align: middle;" class="">74.9</td>
                                    <td style="vertical-align: middle;" class="">65.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.74</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">89</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180134</td>
                                    <td style="vertical-align: middle;" class="p-1">REZA PRATIWI</td>
                                    <td style="vertical-align: middle;" class="">57.18</td>
                                    <td style="vertical-align: middle;" class="">67.01</td>
                                    <td style="vertical-align: middle;" class="">63.56</td>
                                    <td style="vertical-align: middle;" class="">61.88</td>
                                    <td style="vertical-align: middle;" class="">64.24</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="">73.36</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">90</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180135</td>
                                    <td style="vertical-align: middle;" class="p-1">ERLANGGA WARDANA PUTRA</td>
                                    <td style="vertical-align: middle;" class="">57.55</td>
                                    <td style="vertical-align: middle;" class="">52.27</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.04</td>
                                    <td style="vertical-align: middle;" class="">50.99</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.74</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">28.7</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">91</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180136</td>
                                    <td style="vertical-align: middle;" class="p-1">RAMADHANI AQMAR ARIJUDDIN</td>
                                    <td style="vertical-align: middle;" class="">66.9</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="">69.09</td>
                                    <td style="vertical-align: middle;" class="">57.02</td>
                                    <td style="vertical-align: middle;" class="">58.2</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">76.7</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">92</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180137</td>
                                    <td style="vertical-align: middle;" class="p-1">ALFI DWI YULIYANTO</td>
                                    <td style="vertical-align: middle;" class="">74.94</td>
                                    <td style="vertical-align: middle;" class="">81.62</td>
                                    <td style="vertical-align: middle;" class="">77.77</td>
                                    <td style="vertical-align: middle;" class="">75.01</td>
                                    <td style="vertical-align: middle;" class="">74.49</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">64.98</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">93</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180138</td>
                                    <td style="vertical-align: middle;" class="p-1">RINNEKE HANNY MURYONO PUTRI</td>
                                    <td style="vertical-align: middle;" class="">71.82</td>
                                    <td style="vertical-align: middle;" class="">58.41</td>
                                    <td style="vertical-align: middle;" class="">66.75</td>
                                    <td style="vertical-align: middle;" class="">58.7</td>
                                    <td style="vertical-align: middle;" class="">62.2</td>
                                    <td style="vertical-align: middle;" class="">65.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.94</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">94</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180139</td>
                                    <td style="vertical-align: middle;" class="p-1">KRISNA ARDHYAN PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">68.38</td>
                                    <td style="vertical-align: middle;" class="">69.41</td>
                                    <td style="vertical-align: middle;" class="">75.76</td>
                                    <td style="vertical-align: middle;" class="">69.01</td>
                                    <td style="vertical-align: middle;" class="">65.23</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">81.28</td>
                                    <td style="vertical-align: middle;" class="">78.56</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">95</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180140</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD FATHUL HUDA</td>
                                    <td style="vertical-align: middle;" class="">54.66</td>
                                    <td style="vertical-align: middle;" class="">51.85</td>
                                    <td style="vertical-align: middle;" class="">52.5</td>
                                    <td style="vertical-align: middle;" class="">54.39</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32.96</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">66.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">96</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180141</td>
                                    <td style="vertical-align: middle;" class="p-1">YUSUF SANTOSA PUTRA</td>
                                    <td style="vertical-align: middle;" class="">69.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.7</td>
                                    <td style="vertical-align: middle;" class="">55.16</td>
                                    <td style="vertical-align: middle;" class="">51.51</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.13</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">97</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180142</td>
                                    <td style="vertical-align: middle;" class="p-1">HAPSARI KUSUMA DEWI</td>
                                    <td style="vertical-align: middle;" class="">76.82</td>
                                    <td style="vertical-align: middle;" class="">77.26</td>
                                    <td style="vertical-align: middle;" class="">81.96</td>
                                    <td style="vertical-align: middle;" class="">80.21</td>
                                    <td style="vertical-align: middle;" class="">79.17</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">98</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180143</td>
                                    <td style="vertical-align: middle;" class="p-1">AMIEN PANDU SURYANEGARA</td>
                                    <td style="vertical-align: middle;" class="">71.09</td>
                                    <td style="vertical-align: middle;" class="">68.21</td>
                                    <td style="vertical-align: middle;" class="">67.26</td>
                                    <td style="vertical-align: middle;" class="">57.24</td>
                                    <td style="vertical-align: middle;" class="">61.37</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">74.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">99</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180144</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZKI AULIA RAMADZANI</td>
                                    <td style="vertical-align: middle;" class="">75.01</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">67.61</td>
                                    <td style="vertical-align: middle;" class="">69.01</td>
                                    <td style="vertical-align: middle;" class="">61.18</td>
                                    <td style="vertical-align: middle;" class="">55</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">62.28</td>
                                    <td style="vertical-align: middle;" class="">61.82</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">100</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180145</td>
                                    <td style="vertical-align: middle;" class="p-1">SARWOTO</td>
                                    <td style="vertical-align: middle;" class="">73.04</td>
                                    <td style="vertical-align: middle;" class="">75.94</td>
                                    <td style="vertical-align: middle;" class="">70.54</td>
                                    <td style="vertical-align: middle;" class="">68.06</td>
                                    <td style="vertical-align: middle;" class="">54.78</td>
                                    <td style="vertical-align: middle;" class="">55</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">79.04</td>
                                    <td style="vertical-align: middle;" class="">79.68</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">101</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180146</td>
                                    <td style="vertical-align: middle;" class="p-1">AURA DESTY NUR CAHYANI</td>
                                    <td style="vertical-align: middle;" class="">72.35</td>
                                    <td style="vertical-align: middle;" class="">74.94</td>
                                    <td style="vertical-align: middle;" class="">70.59</td>
                                    <td style="vertical-align: middle;" class="">69.28</td>
                                    <td style="vertical-align: middle;" class="">66.83</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">102</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180147</td>
                                    <td style="vertical-align: middle;" class="p-1">KHANSA IHSAN MAHARDIKA</td>
                                    <td style="vertical-align: middle;" class="">73.69</td>
                                    <td style="vertical-align: middle;" class="">60.28</td>
                                    <td style="vertical-align: middle;" class="">67.58</td>
                                    <td style="vertical-align: middle;" class="">70.77</td>
                                    <td style="vertical-align: middle;" class="">75.23</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">60.41</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">103</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180148</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD ARMILEO BAGAS RAMADHAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">104</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180149</td>
                                    <td style="vertical-align: middle;" class="p-1">SATRIA KRESNOMUKTI</td>
                                    <td style="vertical-align: middle;" class="">62.67</td>
                                    <td style="vertical-align: middle;" class="">70.09</td>
                                    <td style="vertical-align: middle;" class="">73.56</td>
                                    <td style="vertical-align: middle;" class="">72.49</td>
                                    <td style="vertical-align: middle;" class="">71.94</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">105</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180150</td>
                                    <td style="vertical-align: middle;" class="p-1">NUR ROHMAH FITRIANI</td>
                                    <td style="vertical-align: middle;" class="">74.97</td>
                                    <td style="vertical-align: middle;" class="">72.49</td>
                                    <td style="vertical-align: middle;" class="">76.68</td>
                                    <td style="vertical-align: middle;" class="">74.51</td>
                                    <td style="vertical-align: middle;" class="">70.76</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">61.38</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">106</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180152</td>
                                    <td style="vertical-align: middle;" class="p-1">NINA YULIYANTI RIYANTO</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">66.79</td>
                                    <td style="vertical-align: middle;" class="">72.53</td>
                                    <td style="vertical-align: middle;" class="">67.95</td>
                                    <td style="vertical-align: middle;" class="">70.32</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">107</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180153</td>
                                    <td style="vertical-align: middle;" class="p-1">UNSA CHESA FARACH FARICHA</td>
                                    <td style="vertical-align: middle;" class="">77.03</td>
                                    <td style="vertical-align: middle;" class="">76.9</td>
                                    <td style="vertical-align: middle;" class="">78.14</td>
                                    <td style="vertical-align: middle;" class="">77.07</td>
                                    <td style="vertical-align: middle;" class="">76.43</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">61.62</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">108</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180154</td>
                                    <td style="vertical-align: middle;" class="p-1">LUTHFIAN AKMALDHANI SUMARTONO</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="">79.62</td>
                                    <td style="vertical-align: middle;" class="">80.39</td>
                                    <td style="vertical-align: middle;" class="">79.93</td>
                                    <td style="vertical-align: middle;" class="">79.25</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">63.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">109</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180155</td>
                                    <td style="vertical-align: middle;" class="p-1">HILHAM FATIHA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">28.43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">110</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180156</td>
                                    <td style="vertical-align: middle;" class="p-1">ALIF RIZQULLAH</td>
                                    <td style="vertical-align: middle;" class="">73.39</td>
                                    <td style="vertical-align: middle;" class="">77.15</td>
                                    <td style="vertical-align: middle;" class="">77.44</td>
                                    <td style="vertical-align: middle;" class="">76.98</td>
                                    <td style="vertical-align: middle;" class="">76.37</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">111</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180157</td>
                                    <td style="vertical-align: middle;" class="p-1">KARTIKA PUTRI NANDANI</td>
                                    <td style="vertical-align: middle;" class="">58.38</td>
                                    <td style="vertical-align: middle;" class="">64.36</td>
                                    <td style="vertical-align: middle;" class="">79.37</td>
                                    <td style="vertical-align: middle;" class="">69.85</td>
                                    <td style="vertical-align: middle;" class="">78.27</td>
                                    <td style="vertical-align: middle;" class="">81.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">65.88</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">112</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180158</td>
                                    <td style="vertical-align: middle;" class="p-1">IRWIN RODHIAL</td>
                                    <td style="vertical-align: middle;" class="">60.51</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.19</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.31</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">113</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180159</td>
                                    <td style="vertical-align: middle;" class="p-1">ANISA FITRI</td>
                                    <td style="vertical-align: middle;" class="">73.08</td>
                                    <td style="vertical-align: middle;" class="">77.46</td>
                                    <td style="vertical-align: middle;" class="">80.26</td>
                                    <td style="vertical-align: middle;" class="">78.71</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">85.5</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">65.88</td>
                                    <td style="vertical-align: middle;" class="">63.84</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">114</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180160</td>
                                    <td style="vertical-align: middle;" class="p-1">SHYTA AULIA NADHIRA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4.69</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7.83</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">115</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180161</td>
                                    <td style="vertical-align: middle;" class="p-1">PUSPITA SARI</td>
                                    <td style="vertical-align: middle;" class="">69.6</td>
                                    <td style="vertical-align: middle;" class="">63.82</td>
                                    <td style="vertical-align: middle;" class="">70.83</td>
                                    <td style="vertical-align: middle;" class="">65.12</td>
                                    <td style="vertical-align: middle;" class="">61.83</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">61.56</td>
                                    <td style="vertical-align: middle;" class="">61.74</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">116</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180162</td>
                                    <td style="vertical-align: middle;" class="p-1">JEFFREY IBNU IBRAHIM</td>
                                    <td style="vertical-align: middle;" class="">70.74</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">63.01</td>
                                    <td style="vertical-align: middle;" class="">62.27</td>
                                    <td style="vertical-align: middle;" class="">60.23</td>
                                    <td style="vertical-align: middle;" class="">83</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">61.84</td>
                                    <td style="vertical-align: middle;" class="">71.12</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">117</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180163</td>
                                    <td style="vertical-align: middle;" class="p-1">SABRINA FEBRIYANTI SUSANTO</td>
                                    <td style="vertical-align: middle;" class="">72.61</td>
                                    <td style="vertical-align: middle;" class="">57.22</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.33</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3.66</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">54.8</td>
                                    <td style="vertical-align: middle;" class="">50.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">118</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180164</td>
                                    <td style="vertical-align: middle;" class="p-1">ALVITA MARETHA PUTRI</td>
                                    <td style="vertical-align: middle;" class="">69.76</td>
                                    <td style="vertical-align: middle;" class="">64.1</td>
                                    <td style="vertical-align: middle;" class="">65.57</td>
                                    <td style="vertical-align: middle;" class="">57.33</td>
                                    <td style="vertical-align: middle;" class="">64.98</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="">63.12</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">119</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180165</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZAL ABI PERMANA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0.18</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">120</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180166</td>
                                    <td style="vertical-align: middle;" class="p-1">ISMULIA DENISHA</td>
                                    <td style="vertical-align: middle;" class="">72.31</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.61</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.66</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">4</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">121</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180168</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD IRVAN ADITIYA</td>
                                    <td style="vertical-align: middle;" class="">81.94</td>
                                    <td style="vertical-align: middle;" class="">67.06</td>
                                    <td style="vertical-align: middle;" class="">84.04</td>
                                    <td style="vertical-align: middle;" class="">80.23</td>
                                    <td style="vertical-align: middle;" class="">80.02</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">62.87</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">122</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180169</td>
                                    <td style="vertical-align: middle;" class="p-1">VEBBY AZHARI DANULUPI</td>
                                    <td style="vertical-align: middle;" class="">52.94</td>
                                    <td style="vertical-align: middle;" class="">66.68</td>
                                    <td style="vertical-align: middle;" class="">51</td>
                                    <td style="vertical-align: middle;" class="">52.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.34</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">64.6</td>
                                    <td style="vertical-align: middle;" class="">74.81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">123</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180170</td>
                                    <td style="vertical-align: middle;" class="p-1">SAFIRA NURUL FIRDOUS</td>
                                    <td style="vertical-align: middle;" class="">71.36</td>
                                    <td style="vertical-align: middle;" class="">75.99</td>
                                    <td style="vertical-align: middle;" class="">74.93</td>
                                    <td style="vertical-align: middle;" class="">71.82</td>
                                    <td style="vertical-align: middle;" class="">66.68</td>
                                    <td style="vertical-align: middle;" class="">68.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="">62.27</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">124</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180171</td>
                                    <td style="vertical-align: middle;" class="p-1">IKHSAN SETYAWAN</td>
                                    <td style="vertical-align: middle;" class="">65.31</td>
                                    <td style="vertical-align: middle;" class="">73.57</td>
                                    <td style="vertical-align: middle;" class="">71.93</td>
                                    <td style="vertical-align: middle;" class="">71.23</td>
                                    <td style="vertical-align: middle;" class="">70.87</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">61.52</td>
                                    <td style="vertical-align: middle;" class="">72.88</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">125</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180172</td>
                                    <td style="vertical-align: middle;" class="p-1">MOH. ALI MA'SUM</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">64.44</td>
                                    <td style="vertical-align: middle;" class="">81.89</td>
                                    <td style="vertical-align: middle;" class="">76.27</td>
                                    <td style="vertical-align: middle;" class="">79.58</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">64.65</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">126</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180173</td>
                                    <td style="vertical-align: middle;" class="p-1">WISNU ADI SETIAWAN</td>
                                    <td style="vertical-align: middle;" class="">62.36</td>
                                    <td style="vertical-align: middle;" class="">63.85</td>
                                    <td style="vertical-align: middle;" class="">75.78</td>
                                    <td style="vertical-align: middle;" class="">70.94</td>
                                    <td style="vertical-align: middle;" class="">68.38</td>
                                    <td style="vertical-align: middle;" class="">65.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">69.52</td>
                                    <td style="vertical-align: middle;" class="">76.16</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">127</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180174</td>
                                    <td style="vertical-align: middle;" class="p-1">HARIES EKI PRASETYO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.37</td>
                                    <td style="vertical-align: middle;" class="">59.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.11</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.07</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">59.06</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">128</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180175</td>
                                    <td style="vertical-align: middle;" class="p-1">AISHA SEKAR RAHMALILA</td>
                                    <td style="vertical-align: middle;" class="">71.41</td>
                                    <td style="vertical-align: middle;" class="">71.82</td>
                                    <td style="vertical-align: middle;" class="">72.91</td>
                                    <td style="vertical-align: middle;" class="">72.93</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">85.5</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">59.76</td>
                                    <td style="vertical-align: middle;" class="">61.58</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">129</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180176</td>
                                    <td style="vertical-align: middle;" class="p-1">TASYA AMALIA</td>
                                    <td style="vertical-align: middle;" class="">76.52</td>
                                    <td style="vertical-align: middle;" class="">78.98</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">72.34</td>
                                    <td style="vertical-align: middle;" class="">66.22</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">71.64</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">130</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180177</td>
                                    <td style="vertical-align: middle;" class="p-1">KARIM UBA</td>
                                    <td style="vertical-align: middle;" class="">54.54</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">39.44</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.73</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">131</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180178</td>
                                    <td style="vertical-align: middle;" class="p-1">TIARA NOVIANI LUBIS</td>
                                    <td style="vertical-align: middle;" class="">69.77</td>
                                    <td style="vertical-align: middle;" class="">64.64</td>
                                    <td style="vertical-align: middle;" class="">64.58</td>
                                    <td style="vertical-align: middle;" class="">70.3</td>
                                    <td style="vertical-align: middle;" class="">71.2</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">61.56</td>
                                    <td style="vertical-align: middle;" class="">54.78</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">132</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180179</td>
                                    <td style="vertical-align: middle;" class="p-1">JULIANTO</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">80.12</td>
                                    <td style="vertical-align: middle;" class="">76.14</td>
                                    <td style="vertical-align: middle;" class="">70.14</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">62.8</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">133</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180180</td>
                                    <td style="vertical-align: middle;" class="p-1">HANIYATUL WARDAH</td>
                                    <td style="vertical-align: middle;" class="">59.5</td>
                                    <td style="vertical-align: middle;" class="">62.45</td>
                                    <td style="vertical-align: middle;" class="">72.98</td>
                                    <td style="vertical-align: middle;" class="">67.86</td>
                                    <td style="vertical-align: middle;" class="">77.41</td>
                                    <td style="vertical-align: middle;" class="">74</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">134</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180181</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITYA SAPUTRA</td>
                                    <td style="vertical-align: middle;" class="">61.9</td>
                                    <td style="vertical-align: middle;" class="">63.67</td>
                                    <td style="vertical-align: middle;" class="">66.69</td>
                                    <td style="vertical-align: middle;" class="">63.34</td>
                                    <td style="vertical-align: middle;" class="">64.77</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">60.32</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">135</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180182</td>
                                    <td style="vertical-align: middle;" class="p-1">DYMAS ALFA FADHOLI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3.75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0.07</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">136</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180183</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD RIZAL</td>
                                    <td style="vertical-align: middle;" class="">61.49</td>
                                    <td style="vertical-align: middle;" class="">68.64</td>
                                    <td style="vertical-align: middle;" class="">59.31</td>
                                    <td style="vertical-align: middle;" class="">64.74</td>
                                    <td style="vertical-align: middle;" class="">56.79</td>
                                    <td style="vertical-align: middle;" class="">58.5</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">50.24</td>
                                    <td style="vertical-align: middle;" class="">64.01</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">137</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180184</td>
                                    <td style="vertical-align: middle;" class="p-1">FELINA NURUL REZPININGSIH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">138</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180185</td>
                                    <td style="vertical-align: middle;" class="p-1">EDGAR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.66</td>
                                    <td style="vertical-align: middle;" class="">58.3</td>
                                    <td style="vertical-align: middle;" class="">60.9</td>
                                    <td style="vertical-align: middle;" class="">53.79</td>
                                    <td style="vertical-align: middle;" class="">60.75</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="">67.46</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">139</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180186</td>
                                    <td style="vertical-align: middle;" class="p-1">RIYAN ANDIKA SETIAWAN</td>
                                    <td style="vertical-align: middle;" class="">75.94</td>
                                    <td style="vertical-align: middle;" class="">74.42</td>
                                    <td style="vertical-align: middle;" class="">69.94</td>
                                    <td style="vertical-align: middle;" class="">64.31</td>
                                    <td style="vertical-align: middle;" class="">60.21</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">52.08</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">140</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180187</td>
                                    <td style="vertical-align: middle;" class="p-1">APRIADI LESMANA</td>
                                    <td style="vertical-align: middle;" class="">72.11</td>
                                    <td style="vertical-align: middle;" class="">59.72</td>
                                    <td style="vertical-align: middle;" class="">77.16</td>
                                    <td style="vertical-align: middle;" class="">70.11</td>
                                    <td style="vertical-align: middle;" class="">72.63</td>
                                    <td style="vertical-align: middle;" class="">83</td>
                                    <td style="vertical-align: middle;" class="">78.97</td>
                                    <td style="vertical-align: middle;" class="">76.48</td>
                                    <td style="vertical-align: middle;" class="">76.51</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">141</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180188</td>
                                    <td style="vertical-align: middle;" class="p-1">KARTIKA CINDI WULANDARI</td>
                                    <td style="vertical-align: middle;" class="">81.51</td>
                                    <td style="vertical-align: middle;" class="">82.22</td>
                                    <td style="vertical-align: middle;" class="">84.88</td>
                                    <td style="vertical-align: middle;" class="">81.65</td>
                                    <td style="vertical-align: middle;" class="">81.66</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">61.2</td>
                                    <td style="vertical-align: middle;" class="">65.28</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">142</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180189</td>
                                    <td style="vertical-align: middle;" class="p-1">ALIEF PUTRA RAMADHAN</td>
                                    <td style="vertical-align: middle;" class="">76.54</td>
                                    <td style="vertical-align: middle;" class="">73.74</td>
                                    <td style="vertical-align: middle;" class="">69.16</td>
                                    <td style="vertical-align: middle;" class="">64.02</td>
                                    <td style="vertical-align: middle;" class="">68.85</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">143</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180190</td>
                                    <td style="vertical-align: middle;" class="p-1">ASSYIFA IKHWANIAR FAUZIAH</td>
                                    <td style="vertical-align: middle;" class="">80.83</td>
                                    <td style="vertical-align: middle;" class="">58.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.06</td>
                                    <td style="vertical-align: middle;" class="">53.45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.1</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">68.76</td>
                                    <td style="vertical-align: middle;" class="">56.98</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">144</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180191</td>
                                    <td style="vertical-align: middle;" class="p-1">MAULANA KUSUMA WIJAYA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5.43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">145</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180192</td>
                                    <td style="vertical-align: middle;" class="p-1">HAFIDZ DWI MEGANTORO</td>
                                    <td style="vertical-align: middle;" class="">70.92</td>
                                    <td style="vertical-align: middle;" class="">77.3</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">74.36</td>
                                    <td style="vertical-align: middle;" class="">71.44</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">54.36</td>
                                    <td style="vertical-align: middle;" class="">62.64</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">146</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180193</td>
                                    <td style="vertical-align: middle;" class="p-1">AYUNDA PUTRI WINARDI</td>
                                    <td style="vertical-align: middle;" class="">77.27</td>
                                    <td style="vertical-align: middle;" class="">82.22</td>
                                    <td style="vertical-align: middle;" class="">81.12</td>
                                    <td style="vertical-align: middle;" class="">80.68</td>
                                    <td style="vertical-align: middle;" class="">80.96</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">68.4</td>
                                    <td style="vertical-align: middle;" class="">65.52</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">147</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180194</td>
                                    <td style="vertical-align: middle;" class="p-1">ZAIBATUN FITRIYAH</td>
                                    <td style="vertical-align: middle;" class="">80.97</td>
                                    <td style="vertical-align: middle;" class="">80.32</td>
                                    <td style="vertical-align: middle;" class="">80.38</td>
                                    <td style="vertical-align: middle;" class="">79.6</td>
                                    <td style="vertical-align: middle;" class="">77.21</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">60.84</td>
                                    <td style="vertical-align: middle;" class="">65.76</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">148</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180195</td>
                                    <td style="vertical-align: middle;" class="p-1">HAWA MARFU'AH CLEAVER S</td>
                                    <td style="vertical-align: middle;" class="">70.83</td>
                                    <td style="vertical-align: middle;" class="">65.13</td>
                                    <td style="vertical-align: middle;" class="">68.61</td>
                                    <td style="vertical-align: middle;" class="">67.81</td>
                                    <td style="vertical-align: middle;" class="">66.27</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">61.56</td>
                                    <td style="vertical-align: middle;" class="">64.31</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">149</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180196</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD RASYA HADZIQ</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">26.55</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">150</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180197</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITYA DWI FIRMANSYAH</td>
                                    <td style="vertical-align: middle;" class="">65.93</td>
                                    <td style="vertical-align: middle;" class="">66.16</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="">62.49</td>
                                    <td style="vertical-align: middle;" class="">55.86</td>
                                    <td style="vertical-align: middle;" class="">59</td>
                                    <td style="vertical-align: middle;" class="">77.93</td>
                                    <td style="vertical-align: middle;" class="">57.2</td>
                                    <td style="vertical-align: middle;" class="">66.81</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">151</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180198</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD FAHLIKAL FIQHAN</td>
                                    <td style="vertical-align: middle;" class="">73.51</td>
                                    <td style="vertical-align: middle;" class="">77.39</td>
                                    <td style="vertical-align: middle;" class="">79.41</td>
                                    <td style="vertical-align: middle;" class="">77.29</td>
                                    <td style="vertical-align: middle;" class="">77.1</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">152</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180199</td>
                                    <td style="vertical-align: middle;" class="p-1">DAMAR SETIAWAN</td>
                                    <td style="vertical-align: middle;" class="">74.56</td>
                                    <td style="vertical-align: middle;" class="">84.32</td>
                                    <td style="vertical-align: middle;" class="">81.85</td>
                                    <td style="vertical-align: middle;" class="">82.48</td>
                                    <td style="vertical-align: middle;" class="">83.1</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">69.66</td>
                                    <td style="vertical-align: middle;" class="">64.68</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">153</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180200</td>
                                    <td style="vertical-align: middle;" class="p-1">SIGIT INDRA ANDRIANSYAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">154</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180202</td>
                                    <td style="vertical-align: middle;" class="p-1">VICKY HANY NURHUDAYA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9.43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45</td>
                                    <td style="vertical-align: middle;" class="">56.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">155</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180203</td>
                                    <td style="vertical-align: middle;" class="p-1">AL ZUHUDIN NOOR MUHAMMAD</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">156</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180204</td>
                                    <td style="vertical-align: middle;" class="p-1">LINAWATI NURMASARI</td>
                                    <td style="vertical-align: middle;" class="">67.57</td>
                                    <td style="vertical-align: middle;" class="">82.52</td>
                                    <td style="vertical-align: middle;" class="">82.24</td>
                                    <td style="vertical-align: middle;" class="">82.01</td>
                                    <td style="vertical-align: middle;" class="">83.76</td>
                                    <td style="vertical-align: middle;" class="">84.5</td>
                                    <td style="vertical-align: middle;" class="">76.63</td>
                                    <td style="vertical-align: middle;" class="">69.66</td>
                                    <td style="vertical-align: middle;" class="">64.41</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">157</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180205</td>
                                    <td style="vertical-align: middle;" class="p-1">FA'INNUSA NUR APRILLINA</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">77.58</td>
                                    <td style="vertical-align: middle;" class="">80.19</td>
                                    <td style="vertical-align: middle;" class="">78.29</td>
                                    <td style="vertical-align: middle;" class="">75.51</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">69.66</td>
                                    <td style="vertical-align: middle;" class="">64.44</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">158</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180206</td>
                                    <td style="vertical-align: middle;" class="p-1">DEWI KURNIA PUTRI</td>
                                    <td style="vertical-align: middle;" class="">71.87</td>
                                    <td style="vertical-align: middle;" class="">76.15</td>
                                    <td style="vertical-align: middle;" class="">78.82</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">74.05</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">72.96</td>
                                    <td style="vertical-align: middle;" class="">78.73</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">159</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180207</td>
                                    <td style="vertical-align: middle;" class="p-1">ALDONA DEWI JULITAWATI</td>
                                    <td style="vertical-align: middle;" class="">69.36</td>
                                    <td style="vertical-align: middle;" class="">77.01</td>
                                    <td style="vertical-align: middle;" class="">78.45</td>
                                    <td style="vertical-align: middle;" class="">75.73</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">78.5</td>
                                    <td style="vertical-align: middle;" class="">74.49</td>
                                    <td style="vertical-align: middle;" class="">60.84</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">160</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180208</td>
                                    <td style="vertical-align: middle;" class="p-1">HALIM ATTALA PRAYOGO</td>
                                    <td style="vertical-align: middle;" class="">67.78</td>
                                    <td style="vertical-align: middle;" class="">73.89</td>
                                    <td style="vertical-align: middle;" class="">76.91</td>
                                    <td style="vertical-align: middle;" class="">73.2</td>
                                    <td style="vertical-align: middle;" class="">70.05</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.74</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">161</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180209</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD ZIDAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13.13</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.86</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">162</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180210</td>
                                    <td style="vertical-align: middle;" class="p-1">MUSFIROH SHATUN INTAN PERTIWI</td>
                                    <td style="vertical-align: middle;" class="">77.51</td>
                                    <td style="vertical-align: middle;" class="">73.09</td>
                                    <td style="vertical-align: middle;" class="">80.62</td>
                                    <td style="vertical-align: middle;" class="">77.65</td>
                                    <td style="vertical-align: middle;" class="">73.58</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">64.37</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">163</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180211</td>
                                    <td style="vertical-align: middle;" class="p-1">MIFTAHUL HAFIDL HIDAYATULLOH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.07</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23.01</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">26.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">24.38</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">54.8</td>
                                    <td style="vertical-align: middle;" class="">68.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">164</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180212</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD IRFAN MAHFUD</td>
                                    <td style="vertical-align: middle;" class="">59.73</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.92</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.87</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">40.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.62</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">29.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">165</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180213</td>
                                    <td style="vertical-align: middle;" class="p-1">LUTHFIKA KHUFFANA</td>
                                    <td style="vertical-align: middle;" class="">76.33</td>
                                    <td style="vertical-align: middle;" class="">79.55</td>
                                    <td style="vertical-align: middle;" class="">77.03</td>
                                    <td style="vertical-align: middle;" class="">76.38</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">75.33</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">61.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">166</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180214</td>
                                    <td style="vertical-align: middle;" class="p-1">PUPUT CAHYANINGRUM</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">167</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180215</td>
                                    <td style="vertical-align: middle;" class="p-1">RAYHAN AJIB MAHENDRA</td>
                                    <td style="vertical-align: middle;" class="">67.93</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">60.48</td>
                                    <td style="vertical-align: middle;" class="">58.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.24</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">56.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">168</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180216</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD WILDAN DIWAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">169</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180217</td>
                                    <td style="vertical-align: middle;" class="p-1">ARDIANSAH WAHYU RIMBAWAN</td>
                                    <td style="vertical-align: middle;" class="">55.97</td>
                                    <td style="vertical-align: middle;" class="">60.15</td>
                                    <td style="vertical-align: middle;" class="">55.77</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.39</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.22</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.5</td>
                                    <td style="vertical-align: middle;" class="">74.49</td>
                                    <td style="vertical-align: middle;" class="">51.6</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">170</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180218</td>
                                    <td style="vertical-align: middle;" class="p-1">ELSA ESPERANZA</td>
                                    <td style="vertical-align: middle;" class="">57.01</td>
                                    <td style="vertical-align: middle;" class="">78.22</td>
                                    <td style="vertical-align: middle;" class="">72.79</td>
                                    <td style="vertical-align: middle;" class="">67.77</td>
                                    <td style="vertical-align: middle;" class="">66.67</td>
                                    <td style="vertical-align: middle;" class="">66.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.11</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">171</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180219</td>
                                    <td style="vertical-align: middle;" class="p-1">BELA HIDAYAH</td>
                                    <td style="vertical-align: middle;" class="">80.78</td>
                                    <td style="vertical-align: middle;" class="">76.82</td>
                                    <td style="vertical-align: middle;" class="">81.07</td>
                                    <td style="vertical-align: middle;" class="">77.86</td>
                                    <td style="vertical-align: middle;" class="">74.97</td>
                                    <td style="vertical-align: middle;" class="">81</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">64.44</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">172</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180220</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDY FERDIANSYAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23.82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.19</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">52.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">173</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180221</td>
                                    <td style="vertical-align: middle;" class="p-1">KEFIN SURYA MAULANA</td>
                                    <td style="vertical-align: middle;" class="">61.53</td>
                                    <td style="vertical-align: middle;" class="">62.54</td>
                                    <td style="vertical-align: middle;" class="">59.86</td>
                                    <td style="vertical-align: middle;" class="">55.18</td>
                                    <td style="vertical-align: middle;" class="">51.16</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">174</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180222</td>
                                    <td style="vertical-align: middle;" class="p-1">YUNI PUSPITASARI</td>
                                    <td style="vertical-align: middle;" class="">69.8</td>
                                    <td style="vertical-align: middle;" class="">63.32</td>
                                    <td style="vertical-align: middle;" class="">68.68</td>
                                    <td style="vertical-align: middle;" class="">66.23</td>
                                    <td style="vertical-align: middle;" class="">59.09</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">63.1</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">175</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180223</td>
                                    <td style="vertical-align: middle;" class="p-1">NIA KURNIA SANDY</td>
                                    <td style="vertical-align: middle;" class="">79.57</td>
                                    <td style="vertical-align: middle;" class="">78.48</td>
                                    <td style="vertical-align: middle;" class="">81.63</td>
                                    <td style="vertical-align: middle;" class="">79.83</td>
                                    <td style="vertical-align: middle;" class="">71.9</td>
                                    <td style="vertical-align: middle;" class="">68</td>
                                    <td style="vertical-align: middle;" class="">75.33</td>
                                    <td style="vertical-align: middle;" class="">68.04</td>
                                    <td style="vertical-align: middle;" class="">65.02</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">176</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180224</td>
                                    <td style="vertical-align: middle;" class="p-1">DHENISA GITVIANA PUTRI</td>
                                    <td style="vertical-align: middle;" class="">78.23</td>
                                    <td style="vertical-align: middle;" class="">79.86</td>
                                    <td style="vertical-align: middle;" class="">81.38</td>
                                    <td style="vertical-align: middle;" class="">80.24</td>
                                    <td style="vertical-align: middle;" class="">77.86</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="">76.63</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">65.02</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">177</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180225</td>
                                    <td style="vertical-align: middle;" class="p-1">AL FAUZI NOVIANTO</td>
                                    <td style="vertical-align: middle;" class="">73.11</td>
                                    <td style="vertical-align: middle;" class="">76.14</td>
                                    <td style="vertical-align: middle;" class="">71.19</td>
                                    <td style="vertical-align: middle;" class="">66.14</td>
                                    <td style="vertical-align: middle;" class="">69.03</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">66.03</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">178</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180226</td>
                                    <td style="vertical-align: middle;" class="p-1">CINDY FATIKA KHAIRUNISA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">179</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180227</td>
                                    <td style="vertical-align: middle;" class="p-1">SIKA PUTRI NOOR FITRIYANI</td>
                                    <td style="vertical-align: middle;" class="">74.42</td>
                                    <td style="vertical-align: middle;" class="">74.72</td>
                                    <td style="vertical-align: middle;" class="">75.54</td>
                                    <td style="vertical-align: middle;" class="">70.98</td>
                                    <td style="vertical-align: middle;" class="">70.16</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">56.7</td>
                                    <td style="vertical-align: middle;" class="">62.19</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">180</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180228</td>
                                    <td style="vertical-align: middle;" class="p-1">NURUL FATA</td>
                                    <td style="vertical-align: middle;" class="">76.14</td>
                                    <td style="vertical-align: middle;" class="">68.11</td>
                                    <td style="vertical-align: middle;" class="">65.05</td>
                                    <td style="vertical-align: middle;" class="">67.44</td>
                                    <td style="vertical-align: middle;" class="">68.7</td>
                                    <td style="vertical-align: middle;" class="">78</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">62.09</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">181</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180229</td>
                                    <td style="vertical-align: middle;" class="p-1">DHETA ELVIRHA PANGESTU</td>
                                    <td style="vertical-align: middle;" class="">71.96</td>
                                    <td style="vertical-align: middle;" class="">81.3</td>
                                    <td style="vertical-align: middle;" class="">73.1</td>
                                    <td style="vertical-align: middle;" class="">71.46</td>
                                    <td style="vertical-align: middle;" class="">71.54</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">65.4</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">182</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180230</td>
                                    <td style="vertical-align: middle;" class="p-1">YUNITA SARI</td>
                                    <td style="vertical-align: middle;" class="">73.57</td>
                                    <td style="vertical-align: middle;" class="">72.42</td>
                                    <td style="vertical-align: middle;" class="">72.77</td>
                                    <td style="vertical-align: middle;" class="">70.11</td>
                                    <td style="vertical-align: middle;" class="">72.41</td>
                                    <td style="vertical-align: middle;" class="">84.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">66.7</td>
                                    <td style="vertical-align: middle;" class="">71.84</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">183</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180231</td>
                                    <td style="vertical-align: middle;" class="p-1">AMINATUN HASANAH</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">65.21</td>
                                    <td style="vertical-align: middle;" class="">75.42</td>
                                    <td style="vertical-align: middle;" class="">74.56</td>
                                    <td style="vertical-align: middle;" class="">77.55</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">75.33</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.22</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">184</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180232</td>
                                    <td style="vertical-align: middle;" class="p-1">LATIFAH NUR INNAYAH</td>
                                    <td style="vertical-align: middle;" class="">78.18</td>
                                    <td style="vertical-align: middle;" class="">76.93</td>
                                    <td style="vertical-align: middle;" class="">78.95</td>
                                    <td style="vertical-align: middle;" class="">76.81</td>
                                    <td style="vertical-align: middle;" class="">76.3</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">76.63</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">63.79</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">185</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180233</td>
                                    <td style="vertical-align: middle;" class="p-1">WISNU ADI YUDANTO BAYU AJIE</td>
                                    <td style="vertical-align: middle;" class="">70.08</td>
                                    <td style="vertical-align: middle;" class="">75.86</td>
                                    <td style="vertical-align: middle;" class="">75.32</td>
                                    <td style="vertical-align: middle;" class="">68.18</td>
                                    <td style="vertical-align: middle;" class="">74.76</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">60.99</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">186</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180235</td>
                                    <td style="vertical-align: middle;" class="p-1">AMALIA AMATILLAH</td>
                                    <td style="vertical-align: middle;" class="">62.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">22.63</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15.47</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">21.6</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">18.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">187</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180236</td>
                                    <td style="vertical-align: middle;" class="p-1">DWI NUGROHO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">26.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8.79</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">74.49</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">188</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180237</td>
                                    <td style="vertical-align: middle;" class="p-1">SYAHLA YUMA NAFISA</td>
                                    <td style="vertical-align: middle;" class="">69.24</td>
                                    <td style="vertical-align: middle;" class="">67.19</td>
                                    <td style="vertical-align: middle;" class="">69.48</td>
                                    <td style="vertical-align: middle;" class="">66.12</td>
                                    <td style="vertical-align: middle;" class="">63.46</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.42</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">189</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180238</td>
                                    <td style="vertical-align: middle;" class="p-1">NURWANDA ADIN DEWANTARA</td>
                                    <td style="vertical-align: middle;" class="">69.57</td>
                                    <td style="vertical-align: middle;" class="">75.81</td>
                                    <td style="vertical-align: middle;" class="">63.41</td>
                                    <td style="vertical-align: middle;" class="">62.93</td>
                                    <td style="vertical-align: middle;" class="">53.41</td>
                                    <td style="vertical-align: middle;" class="">55</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">80.32</td>
                                    <td style="vertical-align: middle;" class="">77.79</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">190</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180239</td>
                                    <td style="vertical-align: middle;" class="p-1">FAUZAN ARGA PALWAKA</td>
                                    <td style="vertical-align: middle;" class="">81.31</td>
                                    <td style="vertical-align: middle;" class="">79.49</td>
                                    <td style="vertical-align: middle;" class="">80.61</td>
                                    <td style="vertical-align: middle;" class="">76.91</td>
                                    <td style="vertical-align: middle;" class="">76.05</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">76.77</td>
                                    <td style="vertical-align: middle;" class="">71.1</td>
                                    <td style="vertical-align: middle;" class="">66.03</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">191</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180240</td>
                                    <td style="vertical-align: middle;" class="p-1">WAHYU NURUL RAMADHANI</td>
                                    <td style="vertical-align: middle;" class="">74.47</td>
                                    <td style="vertical-align: middle;" class="">78.3</td>
                                    <td style="vertical-align: middle;" class="">76.91</td>
                                    <td style="vertical-align: middle;" class="">74.96</td>
                                    <td style="vertical-align: middle;" class="">70.62</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">58.5</td>
                                    <td style="vertical-align: middle;" class="">62.28</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">192</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180241</td>
                                    <td style="vertical-align: middle;" class="p-1">AGUS WAHYUDI CAHAYA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">33.33</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">193</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180242</td>
                                    <td style="vertical-align: middle;" class="p-1">NABILAH CHENDY SHINTA AMELIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">194</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180243</td>
                                    <td style="vertical-align: middle;" class="p-1">TRI YULIYANTO</td>
                                    <td style="vertical-align: middle;" class="">79.32</td>
                                    <td style="vertical-align: middle;" class="">77.38</td>
                                    <td style="vertical-align: middle;" class="">68.17</td>
                                    <td style="vertical-align: middle;" class="">73.55</td>
                                    <td style="vertical-align: middle;" class="">67.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.5</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">67.44</td>
                                    <td style="vertical-align: middle;" class="">73.15</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">195</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180244</td>
                                    <td style="vertical-align: middle;" class="p-1">LUTFI IBRAHIM ADI SAPUTRA</td>
                                    <td style="vertical-align: middle;" class="">82.36</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">76.88</td>
                                    <td style="vertical-align: middle;" class="">75.13</td>
                                    <td style="vertical-align: middle;" class="">75.38</td>
                                    <td style="vertical-align: middle;" class="">88.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="">63.2</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">196</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180245</td>
                                    <td style="vertical-align: middle;" class="p-1">R. HILMAN HARWINSYAH ZAKIR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.41</td>
                                    <td style="vertical-align: middle;" class="">55.58</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.07</td>
                                    <td style="vertical-align: middle;" class="">62.5</td>
                                    <td style="vertical-align: middle;" class="">72.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">57.98</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">197</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180246</td>
                                    <td style="vertical-align: middle;" class="p-1">RAHMAT DWI WALUYO</td>
                                    <td style="vertical-align: middle;" class="">81.2</td>
                                    <td style="vertical-align: middle;" class="">75.81</td>
                                    <td style="vertical-align: middle;" class="">71.66</td>
                                    <td style="vertical-align: middle;" class="">76.53</td>
                                    <td style="vertical-align: middle;" class="">67.76</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">63.23</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">198</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180247</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD ANWAR MUZAKI</td>
                                    <td style="vertical-align: middle;" class="">76.25</td>
                                    <td style="vertical-align: middle;" class="">75.97</td>
                                    <td style="vertical-align: middle;" class="">72.45</td>
                                    <td style="vertical-align: middle;" class="">72.58</td>
                                    <td style="vertical-align: middle;" class="">73.28</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="">72.56</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">199</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180248</td>
                                    <td style="vertical-align: middle;" class="p-1">OLIVVIA ARDANA PUTRI</td>
                                    <td style="vertical-align: middle;" class="">80.07</td>
                                    <td style="vertical-align: middle;" class="">73.09</td>
                                    <td style="vertical-align: middle;" class="">79.92</td>
                                    <td style="vertical-align: middle;" class="">77.07</td>
                                    <td style="vertical-align: middle;" class="">73.56</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">77.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.41</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">200</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180249</td>
                                    <td style="vertical-align: middle;" class="p-1">ADITYA BAGUS WICAKSONO</td>
                                    <td style="vertical-align: middle;" class="">65.64</td>
                                    <td style="vertical-align: middle;" class="">64.32</td>
                                    <td style="vertical-align: middle;" class="">72.01</td>
                                    <td style="vertical-align: middle;" class="">67.14</td>
                                    <td style="vertical-align: middle;" class="">60.82</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">77.8</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.88</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">201</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180251</td>
                                    <td style="vertical-align: middle;" class="p-1">UMI NURKHASANAH</td>
                                    <td style="vertical-align: middle;" class="">68.54</td>
                                    <td style="vertical-align: middle;" class="">75.87</td>
                                    <td style="vertical-align: middle;" class="">72.8</td>
                                    <td style="vertical-align: middle;" class="">66.55</td>
                                    <td style="vertical-align: middle;" class="">75.45</td>
                                    <td style="vertical-align: middle;" class="">74.5</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">61.62</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">202</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180252</td>
                                    <td style="vertical-align: middle;" class="p-1">ENDAH YULIANINGRUM</td>
                                    <td style="vertical-align: middle;" class="">67</td>
                                    <td style="vertical-align: middle;" class="">78.24</td>
                                    <td style="vertical-align: middle;" class="">74.12</td>
                                    <td style="vertical-align: middle;" class="">66.97</td>
                                    <td style="vertical-align: middle;" class="">68.48</td>
                                    <td style="vertical-align: middle;" class="">77</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">62.7</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">203</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180253</td>
                                    <td style="vertical-align: middle;" class="p-1">DUVAN NANDA PUTRA</td>
                                    <td style="vertical-align: middle;" class="">74.33</td>
                                    <td style="vertical-align: middle;" class="">79.61</td>
                                    <td style="vertical-align: middle;" class="">81.46</td>
                                    <td style="vertical-align: middle;" class="">66.89</td>
                                    <td style="vertical-align: middle;" class="">64.83</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">82.93</td>
                                    <td style="vertical-align: middle;" class="">65.2</td>
                                    <td style="vertical-align: middle;" class="">77.76</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">204</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180254</td>
                                    <td style="vertical-align: middle;" class="p-1">FAHRINANDA SURYANA</td>
                                    <td style="vertical-align: middle;" class="">69.26</td>
                                    <td style="vertical-align: middle;" class="">78.82</td>
                                    <td style="vertical-align: middle;" class="">81.64</td>
                                    <td style="vertical-align: middle;" class="">72.16</td>
                                    <td style="vertical-align: middle;" class="">67.45</td>
                                    <td style="vertical-align: middle;" class="">80</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">66.06</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">205</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180255</td>
                                    <td style="vertical-align: middle;" class="p-1">AVRA ALIFIA RIFDA</td>
                                    <td style="vertical-align: middle;" class="">52.97</td>
                                    <td style="vertical-align: middle;" class="">72.97</td>
                                    <td style="vertical-align: middle;" class="">56.24</td>
                                    <td style="vertical-align: middle;" class="">54.91</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.47</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.46</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">206</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180256</td>
                                    <td style="vertical-align: middle;" class="p-1">AL FATHAN QORIB</td>
                                    <td style="vertical-align: middle;" class="">65.5</td>
                                    <td style="vertical-align: middle;" class="">66.08</td>
                                    <td style="vertical-align: middle;" class="">58.34</td>
                                    <td style="vertical-align: middle;" class="">54.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">69.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">207</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180257</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD BADRUL HUDA</td>
                                    <td style="vertical-align: middle;" class="">70.11</td>
                                    <td style="vertical-align: middle;" class="">80.17</td>
                                    <td style="vertical-align: middle;" class="">81.79</td>
                                    <td style="vertical-align: middle;" class="">73.13</td>
                                    <td style="vertical-align: middle;" class="">76.89</td>
                                    <td style="vertical-align: middle;" class="">81.5</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">62.54</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">208</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180258</td>
                                    <td style="vertical-align: middle;" class="p-1">YONANDA RAMADHANI SAPUTRA</td>
                                    <td style="vertical-align: middle;" class="">61.8</td>
                                    <td style="vertical-align: middle;" class="">63.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.91</td>
                                    <td style="vertical-align: middle;" class="">50.34</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">34.49</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">73.37</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">63.48</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">209</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180259</td>
                                    <td style="vertical-align: middle;" class="p-1">ACHMAD ISWAHYUDI</td>
                                    <td style="vertical-align: middle;" class="">65.96</td>
                                    <td style="vertical-align: middle;" class="">69.15</td>
                                    <td style="vertical-align: middle;" class="">63.63</td>
                                    <td style="vertical-align: middle;" class="">67.08</td>
                                    <td style="vertical-align: middle;" class="">59.69</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">68.35</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">210</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180260</td>
                                    <td style="vertical-align: middle;" class="p-1">IRGHI ANGGRIAWAN YUNANTO</td>
                                    <td style="vertical-align: middle;" class="">55.5</td>
                                    <td style="vertical-align: middle;" class="">70.78</td>
                                    <td style="vertical-align: middle;" class="">63.5</td>
                                    <td style="vertical-align: middle;" class="">55.87</td>
                                    <td style="vertical-align: middle;" class="">52.56</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">68.23</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">55.98</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">211</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180261</td>
                                    <td style="vertical-align: middle;" class="p-1">IJAT SAHRON ROMANDHON</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.49</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">27.11</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8.99</td>
                                    <td style="vertical-align: middle;" class="">55</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">212</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180262</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDI KEMAL FAQIH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">213</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180263</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD BAGAS ALIF SYAMIL</td>
                                    <td style="vertical-align: middle;" class="">65.76</td>
                                    <td style="vertical-align: middle;" class="">75.98</td>
                                    <td style="vertical-align: middle;" class="">77.67</td>
                                    <td style="vertical-align: middle;" class="">64.9</td>
                                    <td style="vertical-align: middle;" class="">63.03</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">62.3</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">214</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180264</td>
                                    <td style="vertical-align: middle;" class="p-1">BAHARUDDIN YOGA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">15.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">215</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180265</td>
                                    <td style="vertical-align: middle;" class="p-1">ANNISA JAUZA SATRIANI</td>
                                    <td style="vertical-align: middle;" class="">77.7</td>
                                    <td style="vertical-align: middle;" class="">79.72</td>
                                    <td style="vertical-align: middle;" class="">84.81</td>
                                    <td style="vertical-align: middle;" class="">77.31</td>
                                    <td style="vertical-align: middle;" class="">82.21</td>
                                    <td style="vertical-align: middle;" class="">91</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">216</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180266</td>
                                    <td style="vertical-align: middle;" class="p-1">NILAWAN APRIANI</td>
                                    <td style="vertical-align: middle;" class="">76.03</td>
                                    <td style="vertical-align: middle;" class="">83.5</td>
                                    <td style="vertical-align: middle;" class="">85.95</td>
                                    <td style="vertical-align: middle;" class="">81.07</td>
                                    <td style="vertical-align: middle;" class="">81.03</td>
                                    <td style="vertical-align: middle;" class="">91</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">64.26</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">217</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180267</td>
                                    <td style="vertical-align: middle;" class="p-1">ROFINGATUN NUR LAILA SALMAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">218</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180268</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZAL FAUZIANTO</td>
                                    <td style="vertical-align: middle;" class="">71.29</td>
                                    <td style="vertical-align: middle;" class="">78.63</td>
                                    <td style="vertical-align: middle;" class="">75.76</td>
                                    <td style="vertical-align: middle;" class="">71.88</td>
                                    <td style="vertical-align: middle;" class="">81.11</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">61.38</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">219</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180269</td>
                                    <td style="vertical-align: middle;" class="p-1">MOCHAMMAD ADITYA NUR HIDAYATULLAH</td>
                                    <td style="vertical-align: middle;" class="">68.73</td>
                                    <td style="vertical-align: middle;" class="">77.41</td>
                                    <td style="vertical-align: middle;" class="">70.59</td>
                                    <td style="vertical-align: middle;" class="">69.39</td>
                                    <td style="vertical-align: middle;" class="">71.85</td>
                                    <td style="vertical-align: middle;" class="">79.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">61.95</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">220</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180270</td>
                                    <td style="vertical-align: middle;" class="p-1">MELLA ROSANA</td>
                                    <td style="vertical-align: middle;" class="">68.36</td>
                                    <td style="vertical-align: middle;" class="">73.51</td>
                                    <td style="vertical-align: middle;" class="">79.57</td>
                                    <td style="vertical-align: middle;" class="">71.26</td>
                                    <td style="vertical-align: middle;" class="">75.04</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">66.42</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">221</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180271</td>
                                    <td style="vertical-align: middle;" class="p-1">ATIKA MUZIZATI PUSPITA RINI</td>
                                    <td style="vertical-align: middle;" class="">71.65</td>
                                    <td style="vertical-align: middle;" class="">79.23</td>
                                    <td style="vertical-align: middle;" class="">83.17</td>
                                    <td style="vertical-align: middle;" class="">71.55</td>
                                    <td style="vertical-align: middle;" class="">71.75</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">66.96</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">222</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180272</td>
                                    <td style="vertical-align: middle;" class="p-1">CAHYO DWI PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="">55.9</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="">54.64</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">50</td>
                                    <td style="vertical-align: middle;" class="">59.87</td>
                                    <td style="vertical-align: middle;" class="">82</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="">51.6</td>
                                    <td style="vertical-align: middle;" class="">61.06</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">223</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180273</td>
                                    <td style="vertical-align: middle;" class="p-1">AQSHAL AZIZ HERLAMBANG</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.68</td>
                                    <td style="vertical-align: middle;" class="">67.01</td>
                                    <td style="vertical-align: middle;" class="">62.26</td>
                                    <td style="vertical-align: middle;" class="">56.18</td>
                                    <td style="vertical-align: middle;" class="">51.51</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.5</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">53.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">224</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180274</td>
                                    <td style="vertical-align: middle;" class="p-1">SEVIRA ANGGELIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">225</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180275</td>
                                    <td style="vertical-align: middle;" class="p-1">YUSRIFAN ACHMAD ALAMSYAH</td>
                                    <td style="vertical-align: middle;" class="">62.21</td>
                                    <td style="vertical-align: middle;" class="">76.95</td>
                                    <td style="vertical-align: middle;" class="">75.29</td>
                                    <td style="vertical-align: middle;" class="">67.27</td>
                                    <td style="vertical-align: middle;" class="">68.49</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="">60.05</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">226</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180276</td>
                                    <td style="vertical-align: middle;" class="p-1">ALMEYRA PRIMALIA ZAMRONI</td>
                                    <td style="vertical-align: middle;" class="">72.24</td>
                                    <td style="vertical-align: middle;" class="">78.94</td>
                                    <td style="vertical-align: middle;" class="">82.48</td>
                                    <td style="vertical-align: middle;" class="">74.29</td>
                                    <td style="vertical-align: middle;" class="">81.21</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">70.2</td>
                                    <td style="vertical-align: middle;" class="">65.76</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">227</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180277</td>
                                    <td style="vertical-align: middle;" class="p-1">KURNIA RAHMANINGRUM</td>
                                    <td style="vertical-align: middle;" class="">64.9</td>
                                    <td style="vertical-align: middle;" class="">80.32</td>
                                    <td style="vertical-align: middle;" class="">79.89</td>
                                    <td style="vertical-align: middle;" class="">69.97</td>
                                    <td style="vertical-align: middle;" class="">77.46</td>
                                    <td style="vertical-align: middle;" class="">86</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">63.65</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">228</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180278</td>
                                    <td style="vertical-align: middle;" class="p-1">LUTHFIANA â€˜IZZATURRAHMAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">229</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180279</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGIK WAHYU PRADIATAMA</td>
                                    <td style="vertical-align: middle;" class="">57.54</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.77</td>
                                    <td style="vertical-align: middle;" class="">54.11</td>
                                    <td style="vertical-align: middle;" class="">51.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.85</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">38.5</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.19</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">230</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180280</td>
                                    <td style="vertical-align: middle;" class="p-1">VENONIA MELYANITA</td>
                                    <td style="vertical-align: middle;" class="">63.28</td>
                                    <td style="vertical-align: middle;" class="">64</td>
                                    <td style="vertical-align: middle;" class="">70.33</td>
                                    <td style="vertical-align: middle;" class="">58.86</td>
                                    <td style="vertical-align: middle;" class="">64.18</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">60.86</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">231</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180281</td>
                                    <td style="vertical-align: middle;" class="p-1">NAFIAH YUMNA AZ-ZAHRA</td>
                                    <td style="vertical-align: middle;" class="">60.89</td>
                                    <td style="vertical-align: middle;" class="">77.16</td>
                                    <td style="vertical-align: middle;" class="">76.39</td>
                                    <td style="vertical-align: middle;" class="">70.09</td>
                                    <td style="vertical-align: middle;" class="">73.42</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">60.8</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">232</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180282</td>
                                    <td style="vertical-align: middle;" class="p-1">DHAMAR JATI SHIDIK</td>
                                    <td style="vertical-align: middle;" class="">55.9</td>
                                    <td style="vertical-align: middle;" class="">75.33</td>
                                    <td style="vertical-align: middle;" class="">67.53</td>
                                    <td style="vertical-align: middle;" class="">59.86</td>
                                    <td style="vertical-align: middle;" class="">66.28</td>
                                    <td style="vertical-align: middle;" class="">60.5</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="">61.4</td>
                                    <td style="vertical-align: middle;" class="">68.41</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">233</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180283</td>
                                    <td style="vertical-align: middle;" class="p-1">ERLANGGA PRADANA</td>
                                    <td style="vertical-align: middle;" class="">53.83</td>
                                    <td style="vertical-align: middle;" class="">53.17</td>
                                    <td style="vertical-align: middle;" class="">52.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.04</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.42</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">58.67</td>
                                    <td style="vertical-align: middle;" class="">54</td>
                                    <td style="vertical-align: middle;" class="">50.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">234</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180284</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZKY PUTRI PRAMESTY</td>
                                    <td style="vertical-align: middle;" class="">69.71</td>
                                    <td style="vertical-align: middle;" class="">78.88</td>
                                    <td style="vertical-align: middle;" class="">81.99</td>
                                    <td style="vertical-align: middle;" class="">72.93</td>
                                    <td style="vertical-align: middle;" class="">77.39</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">235</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180285</td>
                                    <td style="vertical-align: middle;" class="p-1">DAMAR TINO PRABOWO</td>
                                    <td style="vertical-align: middle;" class="">63.94</td>
                                    <td style="vertical-align: middle;" class="">61.78</td>
                                    <td style="vertical-align: middle;" class="">50.43</td>
                                    <td style="vertical-align: middle;" class="">53.95</td>
                                    <td style="vertical-align: middle;" class="">61.41</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">72.67</td>
                                    <td style="vertical-align: middle;" class="">60</td>
                                    <td style="vertical-align: middle;" class="">69.15</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">236</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180287</td>
                                    <td style="vertical-align: middle;" class="p-1">RIZEKY WIDYASTUTI</td>
                                    <td style="vertical-align: middle;" class="">70.62</td>
                                    <td style="vertical-align: middle;" class="">76.92</td>
                                    <td style="vertical-align: middle;" class="">84.01</td>
                                    <td style="vertical-align: middle;" class="">74.97</td>
                                    <td style="vertical-align: middle;" class="">81.32</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">63.89</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">237</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180288</td>
                                    <td style="vertical-align: middle;" class="p-1">BAGAS PRAMUDYA WARDANA</td>
                                    <td style="vertical-align: middle;" class="">57.63</td>
                                    <td style="vertical-align: middle;" class="">75.34</td>
                                    <td style="vertical-align: middle;" class="">67.16</td>
                                    <td style="vertical-align: middle;" class="">62.81</td>
                                    <td style="vertical-align: middle;" class="">68.14</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">60.3</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">238</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180289</td>
                                    <td style="vertical-align: middle;" class="p-1">NOVIAN NUR SETYOKO</td>
                                    <td style="vertical-align: middle;" class="">68.33</td>
                                    <td style="vertical-align: middle;" class="">79.24</td>
                                    <td style="vertical-align: middle;" class="">83.3</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">80.18</td>
                                    <td style="vertical-align: middle;" class="">82.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">64.08</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">239</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180291</td>
                                    <td style="vertical-align: middle;" class="p-1">SANIA SALWA SALSABIILA</td>
                                    <td style="vertical-align: middle;" class="">62.66</td>
                                    <td style="vertical-align: middle;" class="">78.4</td>
                                    <td style="vertical-align: middle;" class="">72.88</td>
                                    <td style="vertical-align: middle;" class="">63.71</td>
                                    <td style="vertical-align: middle;" class="">71.8</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">66.6</td>
                                    <td style="vertical-align: middle;" class="">63.21</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">240</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180292</td>
                                    <td style="vertical-align: middle;" class="p-1">ADINDA NURUL FADHILAH</td>
                                    <td style="vertical-align: middle;" class="">64.24</td>
                                    <td style="vertical-align: middle;" class="">71.17</td>
                                    <td style="vertical-align: middle;" class="">76.04</td>
                                    <td style="vertical-align: middle;" class="">64.61</td>
                                    <td style="vertical-align: middle;" class="">72.85</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.83</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">63.46</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">241</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180293</td>
                                    <td style="vertical-align: middle;" class="p-1">RAHMAN FALIH HALIDY</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">28.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.66</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9.49</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">68.23</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">242</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180294</td>
                                    <td style="vertical-align: middle;" class="p-1">SYEHLIAN AKBAR FIQRI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">243</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180295</td>
                                    <td style="vertical-align: middle;" class="p-1">DANIS NOVIANTO</td>
                                    <td style="vertical-align: middle;" class="">72.61</td>
                                    <td style="vertical-align: middle;" class="">65.75</td>
                                    <td style="vertical-align: middle;" class="">75.77</td>
                                    <td style="vertical-align: middle;" class="">69.66</td>
                                    <td style="vertical-align: middle;" class="">72.96</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">71.1</td>
                                    <td style="vertical-align: middle;" class="">63.15</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">244</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180296</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD ANDRE ZETHTIRANDA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">245</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180297</td>
                                    <td style="vertical-align: middle;" class="p-1">FARRAS ABDUR RAHIM</td>
                                    <td style="vertical-align: middle;" class="">62.85</td>
                                    <td style="vertical-align: middle;" class="">77.88</td>
                                    <td style="vertical-align: middle;" class="">68.48</td>
                                    <td style="vertical-align: middle;" class="">68.35</td>
                                    <td style="vertical-align: middle;" class="">72.64</td>
                                    <td style="vertical-align: middle;" class="">70.5</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">71.1</td>
                                    <td style="vertical-align: middle;" class="">65.16</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">246</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180298</td>
                                    <td style="vertical-align: middle;" class="p-1">ADIB AKHMAD GUMILANG</td>
                                    <td style="vertical-align: middle;" class="">59.23</td>
                                    <td style="vertical-align: middle;" class="">60.61</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.53</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">41.68</td>
                                    <td style="vertical-align: middle;" class="">86.5</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">58.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">3</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">247</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180299</td>
                                    <td style="vertical-align: middle;" class="p-1">ANGGA AMANTA MIFTAKHUL KHOIR</td>
                                    <td style="vertical-align: middle;" class="">62.59</td>
                                    <td style="vertical-align: middle;" class="">64.78</td>
                                    <td style="vertical-align: middle;" class="">75.39</td>
                                    <td style="vertical-align: middle;" class="">67.45</td>
                                    <td style="vertical-align: middle;" class="">69.91</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">73.6</td>
                                    <td style="vertical-align: middle;" class="">77.15</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">248</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180300</td>
                                    <td style="vertical-align: middle;" class="p-1">YUDHA SEPTIAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">249</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180301</td>
                                    <td style="vertical-align: middle;" class="p-1">NAREZ SYAMSUDDIN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.67</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">250</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180302</td>
                                    <td style="vertical-align: middle;" class="p-1">KARISMA</td>
                                    <td style="vertical-align: middle;" class="">73.4</td>
                                    <td style="vertical-align: middle;" class="">72.41</td>
                                    <td style="vertical-align: middle;" class="">65.26</td>
                                    <td style="vertical-align: middle;" class="">63.09</td>
                                    <td style="vertical-align: middle;" class="">57.11</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">71.1</td>
                                    <td style="vertical-align: middle;" class="">66.24</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">251</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180304</td>
                                    <td style="vertical-align: middle;" class="p-1">DIDAN SATRIA PUTRA PRATAMA</td>
                                    <td style="vertical-align: middle;" class="">58.8</td>
                                    <td style="vertical-align: middle;" class="">67.43</td>
                                    <td style="vertical-align: middle;" class="">58.46</td>
                                    <td style="vertical-align: middle;" class="">58</td>
                                    <td style="vertical-align: middle;" class="">51.7</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">68.23</td>
                                    <td style="vertical-align: middle;" class="">54.8</td>
                                    <td style="vertical-align: middle;" class="">59.86</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">252</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180306</td>
                                    <td style="vertical-align: middle;" class="p-1">ARDHIAKA RAMADHEENA SUGIANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">26.17</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11.25</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6.3</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">253</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180307</td>
                                    <td style="vertical-align: middle;" class="p-1">WIDI TRI WANDOWO</td>
                                    <td style="vertical-align: middle;" class="">60.86</td>
                                    <td style="vertical-align: middle;" class="">65.83</td>
                                    <td style="vertical-align: middle;" class="">63.83</td>
                                    <td style="vertical-align: middle;" class="">65.29</td>
                                    <td style="vertical-align: middle;" class="">61.88</td>
                                    <td style="vertical-align: middle;" class="">54.5</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="">55.8</td>
                                    <td style="vertical-align: middle;" class="">61.29</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">254</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180308</td>
                                    <td style="vertical-align: middle;" class="p-1">TRI RAHMAWAN</td>
                                    <td style="vertical-align: middle;" class="">60.72</td>
                                    <td style="vertical-align: middle;" class="">70.84</td>
                                    <td style="vertical-align: middle;" class="">61.83</td>
                                    <td style="vertical-align: middle;" class="">50.28</td>
                                    <td style="vertical-align: middle;" class="">55.17</td>
                                    <td style="vertical-align: middle;" class="">76</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="">72.64</td>
                                    <td style="vertical-align: middle;" class="">77.82</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">255</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180309</td>
                                    <td style="vertical-align: middle;" class="p-1">AFIFAH NUR RAMADANI</td>
                                    <td style="vertical-align: middle;" class="">63.91</td>
                                    <td style="vertical-align: middle;" class="">62.6</td>
                                    <td style="vertical-align: middle;" class="">68.9</td>
                                    <td style="vertical-align: middle;" class="">61.6</td>
                                    <td style="vertical-align: middle;" class="">67.96</td>
                                    <td style="vertical-align: middle;" class="">79</td>
                                    <td style="vertical-align: middle;" class="">68.23</td>
                                    <td style="vertical-align: middle;" class="">61.92</td>
                                    <td style="vertical-align: middle;" class="">72.96</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">256</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180310</td>
                                    <td style="vertical-align: middle;" class="p-1">RECALLASTA PETRICA</td>
                                    <td style="vertical-align: middle;" class="">68.36</td>
                                    <td style="vertical-align: middle;" class="">66.57</td>
                                    <td style="vertical-align: middle;" class="">63.4</td>
                                    <td style="vertical-align: middle;" class="">60.55</td>
                                    <td style="vertical-align: middle;" class="">52.76</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">60.12</td>
                                    <td style="vertical-align: middle;" class="">52.74</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">257</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180311</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD JABAL</td>
                                    <td style="vertical-align: middle;" class="">72.82</td>
                                    <td style="vertical-align: middle;" class="">75.4</td>
                                    <td style="vertical-align: middle;" class="">69.49</td>
                                    <td style="vertical-align: middle;" class="">63.72</td>
                                    <td style="vertical-align: middle;" class="">69.84</td>
                                    <td style="vertical-align: middle;" class="">75.5</td>
                                    <td style="vertical-align: middle;" class="">76.17</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">60.24</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">258</td>
                                    <td style="vertical-align: middle;" class="p-1">E100180312</td>
                                    <td style="vertical-align: middle;" class="p-1">HENDRA WAHYUDI</td>
                                    <td style="vertical-align: middle;" class="">69.05</td>
                                    <td style="vertical-align: middle;" class="">75.88</td>
                                    <td style="vertical-align: middle;" class="">80.25</td>
                                    <td style="vertical-align: middle;" class="">72.57</td>
                                    <td style="vertical-align: middle;" class="">76.13</td>
                                    <td style="vertical-align: middle;" class="">72.5</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">62.25</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">259</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181002</td>
                                    <td style="vertical-align: middle;" class="p-1">SYEFIRA FAUZIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">260</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181004</td>
                                    <td style="vertical-align: middle;" class="p-1">BANGKIT DWI NURHADI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">261</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181011</td>
                                    <td style="vertical-align: middle;" class="p-1">HERNING SARI HANDAYANI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">262</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181012</td>
                                    <td style="vertical-align: middle;" class="p-1">RATNA WIGATI TRIHARJANTI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">263</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181013</td>
                                    <td style="vertical-align: middle;" class="p-1">FIRSTIANI FORTUNE SIWI SUNARYA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">264</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181014</td>
                                    <td style="vertical-align: middle;" class="p-1">ATHIF FATHUL HADI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">265</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181015</td>
                                    <td style="vertical-align: middle;" class="p-1">ADIL YUSUF FADILLAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">266</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181016</td>
                                    <td style="vertical-align: middle;" class="p-1">DWIEKA PANDU PATRIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">267</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181017</td>
                                    <td style="vertical-align: middle;" class="p-1">KINANTI PITASARI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">268</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181018</td>
                                    <td style="vertical-align: middle;" class="p-1">FANI IRAWATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">269</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181019</td>
                                    <td style="vertical-align: middle;" class="p-1">NAUFAL SYAUQI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">270</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181021</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD RIZKI DWI AFRIANSYAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">271</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181022</td>
                                    <td style="vertical-align: middle;" class="p-1">SYAHRI RAMADHAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">272</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181023</td>
                                    <td style="vertical-align: middle;" class="p-1">MUH. PUTRA ABDUL AZIZ</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">273</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181024</td>
                                    <td style="vertical-align: middle;" class="p-1">LINGGAR ESTY HARDINI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">274</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181025</td>
                                    <td style="vertical-align: middle;" class="p-1">OKTAVIANA SAWITRI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">275</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181027</td>
                                    <td style="vertical-align: middle;" class="p-1">DWI HERYANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">276</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181028</td>
                                    <td style="vertical-align: middle;" class="p-1">ARIF SUSANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">277</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181029</td>
                                    <td style="vertical-align: middle;" class="p-1">FAJAR DHIAN ARTHA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">278</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181030</td>
                                    <td style="vertical-align: middle;" class="p-1">IMANUEL YOGA CIPTO KRISTIANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">279</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181032</td>
                                    <td style="vertical-align: middle;" class="p-1">GALIH SATRIO NUGROHO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">280</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181034</td>
                                    <td style="vertical-align: middle;" class="p-1">EKO PRAYOGO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">281</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181035</td>
                                    <td style="vertical-align: middle;" class="p-1">ANNISA RIZKI AMALIA DEWI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17.42</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">32.82</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14.43</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13.17</td>
                                    <td style="vertical-align: middle;" class="">85.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">282</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181036</td>
                                    <td style="vertical-align: middle;" class="p-1">TYA SARASWATI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">35.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23.56</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.22</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">21.38</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.61</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">283</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181037</td>
                                    <td style="vertical-align: middle;" class="p-1">SEPTIAN JOHAN FIRMANSYAH</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">284</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181038</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMAD ABIDIN ABROR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">285</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181039</td>
                                    <td style="vertical-align: middle;" class="p-1">JOHAN ALI ASHAR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">286</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181041</td>
                                    <td style="vertical-align: middle;" class="p-1">HIMAWAN SUTANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">287</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181042</td>
                                    <td style="vertical-align: middle;" class="p-1">ABDUL AZIS MUSTOFA LUTFI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">288</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181044</td>
                                    <td style="vertical-align: middle;" class="p-1">IRFAN SEPTIAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">289</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181045</td>
                                    <td style="vertical-align: middle;" class="p-1">TUBAGUS FAISAL HIKMAT</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">290</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181046</td>
                                    <td style="vertical-align: middle;" class="p-1">YUNITA NURAINI HAYUNINGTYAS</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">291</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181047</td>
                                    <td style="vertical-align: middle;" class="p-1">DIMAS GEVIRCA HP</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">292</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181048</td>
                                    <td style="vertical-align: middle;" class="p-1">MAHATHIR MUHAMMAD</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">293</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181049</td>
                                    <td style="vertical-align: middle;" class="p-1">RINDHANG BIMA YUDHA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">294</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181050</td>
                                    <td style="vertical-align: middle;" class="p-1">YULI ADHI KUNCORO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">295</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181051</td>
                                    <td style="vertical-align: middle;" class="p-1">IRFA ARIFIANA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">296</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181053</td>
                                    <td style="vertical-align: middle;" class="p-1">IWAN FATUROHMAN</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">297</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181054</td>
                                    <td style="vertical-align: middle;" class="p-1">KRISNA AMANDA PUTRI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">298</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181058</td>
                                    <td style="vertical-align: middle;" class="p-1">FITA ANGGRAINI YULIANA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">299</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181061</td>
                                    <td style="vertical-align: middle;" class="p-1">NOFID YULIANTO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">300</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181065</td>
                                    <td style="vertical-align: middle;" class="p-1">SABBAHA MUNANDAR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.08</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">10.31</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">19.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">23.06</td>
                                    <td style="vertical-align: middle;" class="">70.9</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">301</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181151</td>
                                    <td style="vertical-align: middle;" class="p-1">ANDRIAS HUDI SANTOSA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">302</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181286</td>
                                    <td style="vertical-align: middle;" class="p-1">AGIL RIZKI TIDAR</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">303</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181315</td>
                                    <td style="vertical-align: middle;" class="p-1">NANDA SEPTIAN NUGROHO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">304</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181316</td>
                                    <td style="vertical-align: middle;" class="p-1">ARDHANESWARI ARUM KUSUMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">305</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181320</td>
                                    <td style="vertical-align: middle;" class="p-1">ZIDNI ILMA AMALIA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">306</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181321</td>
                                    <td style="vertical-align: middle;" class="p-1">IIN NURAINI WIDYANINGRUM</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">307</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181322</td>
                                    <td style="vertical-align: middle;" class="p-1">ALMIRA RAHMA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">308</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181323</td>
                                    <td style="vertical-align: middle;" class="p-1">ULFI MUNGIZA</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">49.54</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9.68</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">21.28</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">11</td>
                                    <td style="vertical-align: middle;" class="">71.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">309</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181324</td>
                                    <td style="vertical-align: middle;" class="p-1">CIKITA HEMAPUTRI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">17.42</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.96</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9.57</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20.2</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">13.4</td>
                                    <td style="vertical-align: middle;" class="">87.1</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">310</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181325</td>
                                    <td style="vertical-align: middle;" class="p-1">RISANG PAMUNGKAS</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">311</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181326</td>
                                    <td style="vertical-align: middle;" class="p-1">AZHARA SATRIADI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">312</td>
                                    <td style="vertical-align: middle;" class="p-1">E100181327</td>
                                    <td style="vertical-align: middle;" class="p-1">TATAR DWI NUGROHO</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">9</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">313</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182059</td>
                                    <td style="vertical-align: middle;" class="p-1">HASNI RAHIM</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">45.05</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">20.73</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.81</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">30.19</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">5.46</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">47.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">8</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">314</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182106</td>
                                    <td style="vertical-align: middle;" class="p-1">RIFQI HADI FIRDAUS</td>
                                    <td style="vertical-align: middle;" class="">66.49</td>
                                    <td style="vertical-align: middle;" class="">76.45</td>
                                    <td style="vertical-align: middle;" class="">78.37</td>
                                    <td style="vertical-align: middle;" class="">67.29</td>
                                    <td style="vertical-align: middle;" class="">69.54</td>
                                    <td style="vertical-align: middle;" class="">69.5</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">65.2</td>
                                    <td style="vertical-align: middle;" class="">77.61</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">315</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182107</td>
                                    <td style="vertical-align: middle;" class="p-1">FAUZAN ZIDAN</td>
                                    <td style="vertical-align: middle;" class="">70.55</td>
                                    <td style="vertical-align: middle;" class="">66.88</td>
                                    <td style="vertical-align: middle;" class="">59.19</td>
                                    <td style="vertical-align: middle;" class="">58.52</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.71</td>
                                    <td style="vertical-align: middle;" class="">71</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.41</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">316</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182167</td>
                                    <td style="vertical-align: middle;" class="p-1">SHAFA RIFDA SYAFIRA PURNOMO</td>
                                    <td style="vertical-align: middle;" class="">67.21</td>
                                    <td style="vertical-align: middle;" class="">75.33</td>
                                    <td style="vertical-align: middle;" class="">78.94</td>
                                    <td style="vertical-align: middle;" class="">71.29</td>
                                    <td style="vertical-align: middle;" class="">64.74</td>
                                    <td style="vertical-align: middle;" class="">55</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">63.45</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">317</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182201</td>
                                    <td style="vertical-align: middle;" class="p-1">CHIKA AYUKO WULANDARI</td>
                                    <td style="vertical-align: middle;" class="">67.19</td>
                                    <td style="vertical-align: middle;" class="">71.7</td>
                                    <td style="vertical-align: middle;" class="">77.52</td>
                                    <td style="vertical-align: middle;" class="">64.75</td>
                                    <td style="vertical-align: middle;" class="">53.23</td>
                                    <td style="vertical-align: middle;" class="">66</td>
                                    <td style="vertical-align: middle;" class="">75</td>
                                    <td style="vertical-align: middle;" class="">71.1</td>
                                    <td style="vertical-align: middle;" class="">68.16</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">318</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182234</td>
                                    <td style="vertical-align: middle;" class="p-1">MUHAMMAD RIDHO NUGRAHA</td>
                                    <td style="vertical-align: middle;" class="">58.78</td>
                                    <td style="vertical-align: middle;" class="">51.04</td>
                                    <td style="vertical-align: middle;" class="">51.38</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">43.59</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">44.33</td>
                                    <td style="vertical-align: middle;" class="">69</td>
                                    <td style="vertical-align: middle;" class="">67.07</td>
                                    <td style="vertical-align: middle;" class="">54</td>
                                    <td style="vertical-align: middle;" class="">50.4</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">319</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182250</td>
                                    <td style="vertical-align: middle;" class="p-1">FAUZIA RAHMAN HAMID</td>
                                    <td style="vertical-align: middle;" class="">69.46</td>
                                    <td style="vertical-align: middle;" class="">73.15</td>
                                    <td style="vertical-align: middle;" class="">78.77</td>
                                    <td style="vertical-align: middle;" class="">75.52</td>
                                    <td style="vertical-align: middle;" class="">80.54</td>
                                    <td style="vertical-align: middle;" class="">90</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">71.1</td>
                                    <td style="vertical-align: middle;" class="">70.05</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">320</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182290</td>
                                    <td style="vertical-align: middle;" class="p-1">FARAH SALSABILA</td>
                                    <td style="vertical-align: middle;" class="">70.22</td>
                                    <td style="vertical-align: middle;" class="">81.38</td>
                                    <td style="vertical-align: middle;" class="">81.29</td>
                                    <td style="vertical-align: middle;" class="">75.04</td>
                                    <td style="vertical-align: middle;" class="">73.91</td>
                                    <td style="vertical-align: middle;" class="">72</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="">67.5</td>
                                    <td style="vertical-align: middle;" class="">65.64</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">321</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182303</td>
                                    <td style="vertical-align: middle;" class="p-1">MADINDA PUSPITASARI</td>
                                    <td style="vertical-align: middle;" class="">67.18</td>
                                    <td style="vertical-align: middle;" class="">69.17</td>
                                    <td style="vertical-align: middle;" class="">68.59</td>
                                    <td style="vertical-align: middle;" class="">66.69</td>
                                    <td style="vertical-align: middle;" class="">61.52</td>
                                    <td style="vertical-align: middle;" class="">73</td>
                                    <td style="vertical-align: middle;" class="">69.87</td>
                                    <td style="vertical-align: middle;" class="">63.9</td>
                                    <td style="vertical-align: middle;" class="">64.8</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">322</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182305</td>
                                    <td style="vertical-align: middle;" class="p-1">AHMAD SYAUQI ÃZZUL ISLAMI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.78</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">25.36</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">28.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.23</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">37.77</td>
                                    <td style="vertical-align: middle;" class="">70</td>
                                    <td style="vertical-align: middle;" class="">64.59</td>
                                    <td style="vertical-align: middle;" class="">65.88</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">46.58</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">323</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182313</td>
                                    <td style="vertical-align: middle;" class="p-1">MOCHAMMAD SYIFA</td>
                                    <td style="vertical-align: middle;" class="">64.3</td>
                                    <td style="vertical-align: middle;" class="">74.14</td>
                                    <td style="vertical-align: middle;" class="">61.58</td>
                                    <td style="vertical-align: middle;" class="">61.9</td>
                                    <td style="vertical-align: middle;" class="">59.62</td>
                                    <td style="vertical-align: middle;" class="">61.5</td>
                                    <td style="vertical-align: middle;" class="">72.2</td>
                                    <td style="vertical-align: middle;" class="">62</td>
                                    <td style="vertical-align: middle;" class="">75.28</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">324</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182314</td>
                                    <td style="vertical-align: middle;" class="p-1">RISKI GUSNALENDRA</td>
                                    <td style="vertical-align: middle;" class="">61.22</td>
                                    <td style="vertical-align: middle;" class="">57.03</td>
                                    <td style="vertical-align: middle;" class="">58.74</td>
                                    <td style="vertical-align: middle;" class="">51.95</td>
                                    <td style="vertical-align: middle;" class="">63.43</td>
                                    <td style="vertical-align: middle;" class="">65</td>
                                    <td style="vertical-align: middle;" class="">71.03</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">48.32</td>
                                    <td style="vertical-align: middle;" class="">65.72</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">325</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182317</td>
                                    <td style="vertical-align: middle;" class="p-1">FADILLAH DEA RINDIYANI</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">31.24</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">6.5</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">12.94</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">14.39</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">2.11</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">0</td>
                                    <td style="vertical-align: middle;" class="">68.23</td>
                                    <td style="vertical-align: middle;" class="">57.6</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">16.32</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">7</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">326</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182318</td>
                                    <td style="vertical-align: middle;" class="p-1">SATRIA IVANA DEWAYANTO</td>
                                    <td style="vertical-align: middle;" class="">61.32</td>
                                    <td style="vertical-align: middle;" class="">61.02</td>
                                    <td style="vertical-align: middle;" class="">59.4</td>
                                    <td style="vertical-align: middle;" class="">58.4</td>
                                    <td style="vertical-align: middle;" class="">54.18</td>
                                    <td style="vertical-align: middle;" class="">73.5</td>
                                    <td style="vertical-align: middle;" class="">68.23</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">42.56</td>
                                    <td style="vertical-align: middle;" class="">72.65</td>
                                    <td style="vertical-align: middle;" class="bg-danger text-white">1</td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">327</td>
                                    <td style="vertical-align: middle;" class="p-1">E100182319</td>
                                    <td style="vertical-align: middle;" class="p-1">YUNI FITRIANI</td>
                                    <td style="vertical-align: middle;" class="">70.38</td>
                                    <td style="vertical-align: middle;" class="">77.66</td>
                                    <td style="vertical-align: middle;" class="">80.34</td>
                                    <td style="vertical-align: middle;" class="">75.1</td>
                                    <td style="vertical-align: middle;" class="">77.78</td>
                                    <td style="vertical-align: middle;" class="">84</td>
                                    <td style="vertical-align: middle;" class="">73.83</td>
                                    <td style="vertical-align: middle;" class="">63</td>
                                    <td style="vertical-align: middle;" class="">64.19</td>
                                    <td style="vertical-align: middle;" class="bg-success text-white">0</td>
                                </tr>
                                <tr class="bg-info">
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;" colspan="3" class="p-1">Jumlah CPL tidak terpenuhi</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">108</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">114</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">118</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">120</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">134</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">114</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">88</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">110</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">114</td>
                                    <td class="text-white" style="vertical-align: middle; font-weight:bold;">0</td>
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