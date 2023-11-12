<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card" style="width:60%; margin-bottom: 100px">
        <div class="card-body">
            <form method="POST" action="/admin/save_galeri" enctype="multipart/form-data">

                <div class="from-group">
                    <label>Keterangan Foto</label>
                    <input type="text" autocomplete="off" name="keterangan" class="form-control">
                    <?php if (session()->has('errors')) : ?>
                        <?php foreach (session('errors') as $error) : ?>
                            <?php if (strpos($error, 'keterangan') !== false) : ?>

                                <div style="color: red;"><?php echo $error; ?></div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="from-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?php echo base_url('/admin/galeri') ?>" class="btn btn-danger">Batal</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>