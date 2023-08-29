<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>


    <a class="mb-2 mt-2 btn btn-sm btn-success" href="/admin/tambah_paket"><i class="fas fa-plus"></i>Tambah Paket</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <table class="table table-striped table-bordered">


        <tr>
            <th>No</th>
            <th>Tipe Paket</th>
            <th>Nama Paket</th>
            <th>Harga</th>
            <th>Maskapai</th>
            <th>Penginapan Mekkah</th>
            <th>Penginapan Madinah</th>
            <th>Itenerary</th>
            <th>Action</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($paket as $p) : ?>
        <td><?= $no++ ?></td>
        <td><?= $p['tipe'] ?></td>
        <td><?= $p['nama'] ?></td>
        <td>Rp. <?= $p['harga'] ?></td>
        <td><?= $p['maskapai'] ?></td>
        <td><?= $p['mekkah'] ?></td>
        <td><?= $p['madinah'] ?></td>
        <td><?= $p['itenerary'] ?></td>
        <td>
            <center>
                <a class="btn btn-sm btn-primary" href="/admin/edit_paket/<?= $p['id'] ?>">Edit</a>
                <form action="/admin/paket/<?= $p['id'] ?>" method="post" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-sm btn-danger"
                        onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" type="submit">Delete</button>
                </form>

            </center>
        </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<?= $this->endSection(); ?>