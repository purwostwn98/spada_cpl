<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content" style="min-height: 504px;">
    <section class="section">
        <div class="section-header">
            <h1>Smber Penilaian</h1>

        </div>

        <div class="section-body">
            <h4 class="section-title">Pilihan Sumber Penilaian</h4>
            <p class="section-lead">
                Sumber penilaian <b class="text-warning">Quiz</b> dan <b class="text-warning">Tugas</b> akan diambil secara langsung nilai dari LMS, sedangkan <b class="text-warning">Manual</b> digunakan untuk mengisi nilai secara manual melalui form yang telah disediakan
            </p>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary mb-0">CPMK 1 (60%) </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla quos sapiente aliquam consectetur, alias, porro quisquam autem earum mollitia, nam minus quibusdam iste repudiandae ad incidunt dolorum placeat. Cumque.</span>
                            <ul class="list-group mt-3">
                                <li class="list-group-item">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-cpmk 1</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz</option>
                                                        <option value="Tugas">Tugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Partisipasi | Bobot: 30%</span> <br>
                                    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, totam. Facere praesentium nobis commodi sed optio suscipit cum veritatis cumque! Magnam minima quae atque adipisci itaque sunt unde maxime reprehenderit!</span>
                                </li>
                                <li class="list-group-item">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-cpmk 2</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz</option>
                                                        <option value="Tugas">Tugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Unjuk Kerja | Bobot: 40%</span> <br>
                                    <span>Deskripsi: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, totam. Facere praesentium nobis commodi sed optio suscipit cum veritatis cumque! Magnam minima quae atque adipisci itaque sunt unde maxime reprehenderit!</span>
                                </li>
                                <li class="list-group-item">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-cpmk 3</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz</option>
                                                        <option value="Tugas">Tugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Tes Tertulis | Bobot: 30%</span> <br>
                                    <span>Deskripsi: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, totam. Facere praesentium nobis commodi sed optio suscipit cum veritatis cumque! Magnam minima quae atque adipisci itaque sunt unde maxime reprehenderit!</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-primary mb-0">CPMK 2 (40%) </h5>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nulla quos sapiente aliquam consectetur, alias, porro quisquam autem earum mollitia, nam minus quibusdam iste repudiandae ad incidunt dolorum placeat. Cumque.</span>
                            <ul class="list-group mt-3">
                                <li class="list-group-item">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-cpmk 1</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz</option>
                                                        <option value="Tugas">Tugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Tes Tertulis | Bobot: 30%</span> <br>
                                    <span>Deskripsi: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, totam. Facere praesentium nobis commodi sed optio suscipit cum veritatis cumque! Magnam minima quae atque adipisci itaque sunt unde maxime reprehenderit!</span>
                                </li>
                                <li class="list-group-item">
                                    <div class="row d-flex justify-content-between ">
                                        <div class="col-4">
                                            <span class="badge badge-dark">Sub-cpmk 2 (Tes Tertulis)</span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-4 col-form-label">Pilih sumber nilai: </label>
                                                <div class="col-sm-8">
                                                    <select style="font-size: 13px;" class="form-control form-sm bg-primary text-white filter-prd" id="filter_smbr" name="filter_prd" onchange="loadMhs()">
                                                        <option value="Manual" selected>Manual</option>
                                                        <option value="Quiz">Quiz</option>
                                                        <option value="Tugas">Tugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-warning text-primary" type="button"><i class="fa fa-save"></i> |Simpan</button>
                                        </div>
                                    </div>
                                    <span class="badge badge-info">Teknik Penilaian: Observasi | Bobot: 70%</span> <br>
                                    <span>Deskripsi: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, totam. Facere praesentium nobis commodi sed optio suscipit cum veritatis cumque! Magnam minima quae atque adipisci itaque sunt unde maxime reprehenderit!</span>
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