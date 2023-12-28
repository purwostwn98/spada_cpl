<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">CPL Mahasiswa</h1>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label>Angkatan</label>
                    <input type="number" class="form-control filter-thn" value="" onchange="loadMhs()">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Program Studi</label>
                    <select class="form-control select2" id="prodi" name="filter_prd" onchange="loadMhs()">
                        <option value="" disabled selected></option>
                        <?php foreach ($lembaga as $key => $val) { ?>
                            <option value="<?= $val['kode_prodi']; ?>"><?= $val['nama_prodi']; ?></option>
                        <?php  } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Mahasiswa</label>
                    <select class="form-control select2" id="mahasiswa" name="filter_mhs" onchange="loadMhs()">
                        <option value="" disabled selected></option>
                        <option value="D600160125">D600160125 - Purwo Setiawan</option>
                        <option value="D600126778">D600126778 - Mamang</option>
                        <option value="D600228666">D600228666 - Sanda Permana</option>
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
                                <h4>D600160125 - Purwo Setiawan</h4>
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
                        <table class="table">
                            <tr class="bg-primary text-white">
                                <th>CPL</th>
                                <th>Deskripsi</th>
                                <th>Nilai</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mampu menerapkan pengetahuan dalam bidang ilmu matematika, sains dasar, teknologi informasi, dan bidang ilmu pelengkap yang menjadi dasar pengetahuan pada bidang ilmu teknik elektro, dengan kinerja bermutu dan terukur.</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Mampu merancang sistem bidang ketenagalistrikan, elektronika dan komputer dalam batasan-batasan faktor-faktor ekonomi, keselamatan kerja dan lingkungan untuk memanfaatkan potensi sumber daya lokal dan nasional.</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mampu mendesain dan melaksanakan eksperimen di laboratorium dan/atau lapangan, menganalisis data, menarik kesimpulan, serta menuangkan dalam bentuk laporan sebagai bagian dari penyelesaian permasalahan engineering yang kompleks.</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mampu mengidentifikasi, memformulasikan, menganalisis, dan menyelesaikan permasalahan dalam bidang sistem tenaga listrik, elektronika dan komputer.</td>
                                    <td>90</td>
                                </tr>
                                <tr class="bg-warning">
                                    <td>5</td>
                                    <td>Mampu menerapkan metode, dan teknologi terkini dengan terampil dalam melaksanakan pekerjaan yang berhubungan dengan sistem tenaga listrik, elektronika dan komputer baik secara mandiri atau dalam tim.</td>
                                    <td>30</td>
                                </tr>
                                <tr class="bg-warning">
                                    <td>6</td>
                                    <td>Mampu melakukan komunikasi secara efektif baik tulisan maupun lisan menggunakan teknik komunikasi dan teknologi terbaru dalam rangka menyelesaikan permasalahan yang dihadapi.</td>
                                    <td>30</td>
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
<script>
    function loadMhs() {
        // alert($("#mahasiswa").val());
        // var prodi = $(".filter-prd").val();
        // var angkatan = $(".filter-thn").val();

        // dataTabel(prodi, angkatan);
    }
</script>
<?= $this->endSection(); ?>