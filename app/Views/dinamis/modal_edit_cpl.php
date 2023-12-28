<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <hr>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header m-0">
                                <h4>CPL <?= $cpl['nomor_cpl']; ?></h4>
                            </div>
                            <div class="card-body mt-0">
                                <p><?= $cpl['deskripsi_cpl']; ?></p>
                                <form>
                                    <div class="form-group row">
                                        <label for="batas" class="col-sm-2 col-form-label">Batas</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="batas" placeholder="batas cpl">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Target</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputPassword" placeholder="target cpl">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary"><i class="fa fa-save"></i> | Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>