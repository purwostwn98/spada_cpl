<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content" style="min-height: 504px;">
    <section class="section">
        <div class="section-header">
            <h1>Sumber Penilaian</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">ECE3231256 - Analisis Sistem Tenaga Listrik</div>
            </div>
        </div>

        <div class="section-body">
            <h4 class="section-title">Pilihan Sumber Penilaian</h4>
            <p class="section-lead">
                Sumber penilaian <b class="text-primary">manual</b> digunakan untuk mengisi nilai secara manual melalui formulir yang telah disediakan. Sedangankan sumber lain diambil dari nilai yang ada di LMS.
                <!-- Sumber penilaian <b class="text-warning">Quiz</b> dan <b class="text-warning">Tugas</b> akan diambil secara langsung nilai dari LMS, sedangkan <b class="text-warning">Manual</b> digunakan untuk mengisi nilai secara manual melalui form yang telah disediakan -->
            </p>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary mb-0">CPMK 1 (20%) </h5>
                            <span>Mampu menganalisis daya komplex baik satu fase maupun 3 fase setimbang, diagram segaris sistem daya, dan diagram impedansi serta reaktansi sistem daya</span>
                            <ul class="list-group mt-3">
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 1</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Partisipasi | Bobot: 30%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu menjelaskan tentang segitiga daya dan menghitung daya komplex baik satu fase maupun 3 fase setimbang</span>
                                </li>
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 2</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Unjuk Kerja | Bobot: 40%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu membuat diagram segaris sistem daya dan membuat diagram impedansi dan reaktansi sistem daya</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary mb-0">CPMK 2 (20%) </h5>
                            <span>Mampu menghitung besaran satuan volt, amper, ohm dan lainnya dalam bentuk per unit sistem</span>
                            <ul class="list-group mt-3">
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 1</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Tes Tertulis | Bobot: 30%</span> <br>
                                    <span>Deskripsi: Mahasiswa diharapkan dapat menghubah besaran satuan volt, amper, ohm dan lainnya dalam bentuk per unit sistem</span>
                                </li>
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 2</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Observasi | Bobot: 70%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu mengubah dasar besaran per satuan yang baru</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary mb-0">CPMK 3 (35%) </h5>
                            <span>Mampu menghitung arus, tegangan, jatuh tegangan dan daya pada sistem aliran beban.</span>
                            <ul class="list-group mt-3">
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 1</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Tes Tertulis | Bobot: 30%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu menghitung arus, tegangan, dan daya pada tiap saluran/bus dengan menggunakan metode Gauss Seidel</span>
                                </li>
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 2</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Observasi | Bobot: 70%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu menghitung arus, tegangan, dan daya pada tiap saluran/bus dengan menggunakan metode Newton Raphson</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary mb-0">CPMK 4 (25%) </h5>
                            <span>Mampu menggunakan program Etap untuk perhitungan Aliran Beban</span>
                            <ul class="list-group mt-3">
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 1</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Tes Tertulis | Bobot: 30%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu menggambar diagram segaris pada bidang kerja ETAP</span>
                                </li>
                                <li class="list-group-item bg-secondary">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-CPMK 2</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz segitiga daya</option>
                                                        <option value="Tugas">Tugas membuat diagram</option>
                                                        <option value="Quiz">Tugas mengubah dasar besaran</option>
                                                        <option value="Quiz">Quiz Gauss Seidel</option>
                                                        <option value="Quiz">Quiz Newton Raphson</option>
                                                        <option value="Quiz">Menggambar diagram segaris</option>
                                                        <option value="Quiz">Memasukan data program Etap</option>
                                                        <option value="UTS">UTS</option>
                                                        <option value="UAS">UAS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Observasi | Bobot: 70%</span> <br>
                                    <span>Deskripsi: Mahasiswa mampu memasukan data dan menjalankan aliran beban metode gauus seidel atau Newton Rapshon dengan program Etap</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>