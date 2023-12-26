<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<?php
$tahun_now = date('Y');
$tahun_min = $tahun_now - 8;
?>
<div class="main-content">
    <section class="section">
        <div class="section-header bg-warning">
            <h1 class="text-primary">Master Course MBZ</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Course</a></div>
                <div class="breadcrumb-item">Master MBZ</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <span>Halaman ini berisi hasil backup file MBZ</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        Unggah File .mbz
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-sm table-bordered" id="">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">file_mbz</th>
                                                <th class="text-center">Fakultas</th>
                                                <th class="text-center">Download File</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Pemrograman Komputer</td>
                                                <td>Fakultas Teknik</td>
                                                <td><button class="btn btn-sm btn-primary">download</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Kemuhammadiyahan</td>
                                                <td>Umum</td>
                                                <td><button class="btn btn-sm btn-primary">download</button></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title bg-primary text-white" id="exampleModalLabel">Unggah File MBZ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label>File .mbz</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fakultas</label>
                            <select class="form-control select2">
                                <option>Umum</option>
                                <option>Fakultas Agama Islam</option>
                                <option>Fakultas Teknik</option>
                                <option>Fakultas Psikologi</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>



<?= $this->endSection(); ?>