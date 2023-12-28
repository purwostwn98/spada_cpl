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
                                <h4>2016 - Program Studi Akuntansi</h4>
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
                        <table style="font-size: 11px;" class="table table-responsive">
                            <tr class="bg-dark text-white">
                                <th>#</th>
                                <th class="text-center">NIM</th>
                                <th class="">Nama Mahasiswa</th>
                                <th class="text-center">CPL 1</th>
                                <th class="text-center">CPL 2</th>
                                <th class="text-center">CPL 3</th>
                                <th class="text-center">CPL 4</th>
                                <th class="text-center">CPL 5</th>
                                <th class="text-center">CPL 6</th>
                                <th class="text-center">CPL 7</th>
                                <th class="text-center">CPL 8</th>
                                <th class="text-center">CPL 9</th>
                                <th class="text-center">CPL 10</th>
                            </tr>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>D600160125</td>
                                    <td>Danang Darto</td>
                                    <td>69</td>
                                    <td>70</td>
                                    <td>80</td>
                                    <td class="bg-danger text-white">45</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>D600160789</td>
                                    <td>Putu Sekawan Abadi</td>
                                    <td>69</td>
                                    <td>70</td>
                                    <td>80</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
                                    <td>76</td>
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