<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card" style="width:60%; margin-bottom: 100px">
        <div class="card-body">
            <form method="POST" action="/admin/update_galeri/<?= $galeri['id']; ?>" enctype="multipart/form-data">

                <div class="from-group">
                    <label>Keterangan Foto</label>
                    <input type="text" name="keterangan" value="<?= $galeri['keterangan']; ?>" class="form-control">
                </div>
                <div class="from-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                    <?php if (!empty($galeri['gambar'])) : ?>
                        <div class="form-group mt-2">
                            <div class="show-image d-inline-block" id="show-image" style="width: 150px; height: auto;">
                                <img src='<?= base_url('uploads/' . $galeri['gambar']) ?>' class="img-fluid img-thumbnail" />
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo base_url('/admin/galeri') ?>" class="btn btn-danger">Batal</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>