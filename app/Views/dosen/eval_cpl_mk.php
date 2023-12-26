<?= $this->extend("/layout/back_template.php"); ?>
<?= $this->section("konten"); ?>
<div class="main-content" style="min-height: 504px;">
    <section class="section">
        <div class="section-header bg-warning">
            <h1>Evaluasi CPL MK</h1>
        </div>

        <div class="section-body">
            <h4 class="section-title">Distribusi Nilai</h4>
            <p class="section-lead">
                <img src="<?= base_url(); ?>/gambar_demo/distribusi_nilai.png" alt="">
            </p>
            <hr>
            <h4 class="section-title">Ketercapaian CPMK</h4>
            <p class="section-lead">
                <img src="<?= base_url(); ?>/gambar_demo/ketercapaian_cpmk.png" alt="">
            </p>
            <hr>
            <h4 class="section-title">Ketercapaian CPL</h4>
            <p class="section-lead">
                <img src="<?= base_url(); ?>/gambar_demo/ketercapaian_cpl.png" alt="">
            </p>


        </div>
    </section>
</div>
<?= $this->endSection(); ?>