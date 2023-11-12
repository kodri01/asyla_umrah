<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>


    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Tanggal Lahir</th>
                <th class="text-center">No Hp</th>
                <th class="text-center">Tipe Paket</th>
                <th class="text-center">Jumlah Biaya</th>
                <th class="text-center">Sudah Dibayar</th>
                <th class="text-center">Sisa Bayar</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($status as $p) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td class="text-capitalize"><?= $p->nama_jemaah ?><br>
                        <?php foreach ($rombongan as $rom) : ?>
                            <?php if ($rom->id_jemaah == $p->id_user) : ?>
                                <?= $rom->nama_anggota; ?><br>
                            <?php else : ?>
                                <p></p>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </td>
                    <td class="text-capitalize"><?= $p->jk_jemaah ?></td>
                    <td class="text-capitalize"><?= $p->tempat_lahir ?></td>
                    <td><?php echo date('d F Y', strtotime($p->tanggal_lahir)); ?></td>
                    <td class="text-capitalize"><?= $p->hp_jemaah ?></td>
                    <td><?= $p->tipe ?></td>
                    <td>Rp. <?= number_format($p->harga_paket, 0, ',', '.'); ?></td>
                    <td>Rp. <?= number_format($p->jml_bayar, 0, ',', '.'); ?></td>
                    <td> <?php echo ($p->sisa_bayar == 0) ? "Rp. 0" : "Rp. " . number_format($p->sisa_bayar, 0, ',', '.'); ?>
                    <td>
                        <?php echo ($p->status == 0) ? "Belum Lunas" : "Pembayaran Lunas"; ?>
                    </td>
                    <td>
                        <center>
                            <a class="btn btn-sm btn-primary" href="/admin/cetak_pembayaran/<?= $p->id ?>"><i class="fas fa-edit"></i>Cetak</a>
                        </center>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>

</div>


<?= $this->endSection(); ?>