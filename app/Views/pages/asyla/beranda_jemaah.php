<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top: 8rem;" class="mx-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 mb-3 mb-sm-0 w-50">
                <?php if ($beranda == null) : ?>
                    <h2>Terima Kasih Sudah Mendaftar</h1>
                        <h4>Selamat Datang Di Website PT. ASYLA WISATA FATIMAH</h4>
                    <?php else : ?>

                        <h2>HALLO, <label for="" class="text-capitalize"><?= $beranda['nama_jemaah'] ?></label></h1>
                            <h4>Selamat Datang Kembali Di Website PT. ASYLA WISATA FATIMAH</h4>
                        <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 mb-3 mb-sm-0"><img src="assets/img/foto1.png" style="width: 700px;" alt=""></div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>