<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>
    <a class="mb-2 mt-2 btn btn-sm btn-success" href="<?php echo base_url('/admin/tambah_galeri') ?>"><i class="fas fa-plus"></i>Tambah Galeri</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-striped table-bordered">
        <tr>
            <th class=text-center width=5%>No</th>
            <th class=text-center width=35%>Keterangan</th>
            <th class=text-center width=35%>Gambar</th>
            <th class=text-center>Action</th>
        </tr>
        <tr>
            <?php $no = 1; ?>
            <?php foreach ($galeri as $p) : ?>
                <td><?= $no++ ?></td>
                <td><?= $p['keterangan'] ?></td>
                <td>
                    <center>
                        <div class="show-image d-inline-block" id="show-image" style="width: 80px; height: auto;">
                            <img src='<?= base_url('uploads/' . $p['gambar']) ?>' class="img-fluid img-thumbnail" />
                        </div>
                    </center>
                </td>
                <td>
                    <center>
                        <a class="btn btn-sm btn-primary" href="/admin/edit_galeri/<?= $p['id'] ?>">Edit</a>
                        <form action="/admin/galeri/<?= $p['id'] ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" type="submit">Delete</button>
                        </form>

                    </center>
                </td>

        </tr>
    <?php endforeach ?>

    </table>
</div>

<?= $this->endSection(); ?>