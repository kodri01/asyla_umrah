<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<Section style="margin-top: 3rem;" class="mx-5">
    <h2 class="text-center mb-3 text-uppercase">Galeri Jemaah</h2>
    <div class="row justify-content-center">
        <?php foreach ($galeri as $p) : ?>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card" style="width: 18rem;">
                    <img src='<?= base_url('uploads/' . $p['gambar']) ?>' class="img-fluid img-thumbnail" style="height:250px;" />
                    <div class="card-body">
                        <p class="card-text"><?= $p['keterangan'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>



<?= $this->endSection(); ?>