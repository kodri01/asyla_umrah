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

    <input type="search" name="search" id="" placeholder="Masukan Nama Jemaah">
    <a class="mb-2 mt-2 btn btn-sm btn-success" href="#"><i class="fas fa-plus"></i>Cari Data</a>

    <table class="table table-striped table-bordered">
        <tr>
            <th class="text-center ">No</th>
            <th class="text-center ">Nama Jemaah</th>
            <th class="text-center ">Tanggal Daftar</th>
            <th class="text-center ">Tipe Paket</th>
            <th class="text-center ">Kelengkapan Berkas</th>
            <th class="text-center">Action</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($jemaah as $item) : ?>
            <td><?= $no++ ?></td>
            <td><?php echo $item->nama; ?></td>
            <td><?php echo date('d F Y', strtotime($item->created_at)); ?></td>
            <td><?php echo $item->tipe; ?></td>
            <td>
                <?php echo ($item->status == 0) ? "Belum Verifikasi" : "Berkas sudah Lengkap"; ?>
            </td>
            <td>
                <center>
                    <form action="/admin/jemaah/update/<?= $item->id ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <button class="btn btn-sm btn-success" type="submit">Verifikasi</button>
                    </form>
                    <a class="btn btn-sm btn-primary" href="">Details</a>
                    <form action="/admin/jemaah/<?= $item->id ?>" method="post" class="d-inline">
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