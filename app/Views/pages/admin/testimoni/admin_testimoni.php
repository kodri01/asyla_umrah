<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <table class="table table-striped table-bordered">
        <tr>
            <th class=text-center>No</th>
            <th class=text-center>Tanggal Postingan</th>
            <th class=text-center>Nama Pengirim</th>
            <th class=text-center>Isi Testimoni</th>
            <th class=text-center>Action</th>
        </tr>
        <tr>
            <?php $no = 1; ?>
            <?php foreach ($testimoni as $testi) : ?>
                <td><?= $no++ ?></td>
                <td><?php echo date('d F Y', strtotime($testi->created_at)); ?></td>
                <td><?= $testi->nama ?></td>
                <td><?= $testi->isi ?></td>
                <td>
                    <center>
                        <form action="/admin/testi/<?= $testi->id ?>" method="post" class="d-inline">
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