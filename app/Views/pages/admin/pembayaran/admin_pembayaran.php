<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
    </div>

    <input type="search" name="search" id="" placeholder="Masukan Nama Jemaah">
    <a class="mb-2 mt-2 btn btn-sm btn-success" href="#"><i class="fas fa-plus"></i>Cari Data</a>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Tanggal Pembayaran</th>
            <th class="text-center">Nama Pembayaran</th>
            <th class="text-center">Jumlah Dibayar</th>
            <th class="text-center">Sisa Bayar</th>
            <th class="text-center">Bukti Transfer</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
        </tr>
        <tr>
            <?php $no = 1; ?>
            <?php foreach ($bayar as $p) : ?>
                <td><?= $no++ ?></td>
                <td><?php echo date('d F Y', strtotime($p->created_at)); ?></td>
                <td class="text-capitalize"><?= $p->nama_jemaah; ?></td>
                <td>Rp. <?= number_format($p->jml_bayar, 0, ',', '.'); ?></td>
                <td> <?php echo ($p->sisa_bayar == 0) ? "Rp. 0" : "Rp. " . number_format($p->sisa_bayar, 0, ',', '.'); ?>
                </td>
                <td>
                    <center>
                        <div class="show-image d-inline-block" id="show-image" style="width: 80px; height: auto;">
                            <img src='<?= base_url('uploads/' . $p->bukti_bayar) ?>' class="img-fluid img-thumbnail" />
                        </div>
                    </center>
                </td>
                <td>
                    <?php echo ($p->sisa_bayar != 0) ? "Belum Lunas" : "Pembayaran Lunas"; ?>
                </td>

                <td>
                    <center>
                        <!-- <a class="btn btn-sm btn-success" href="/admin/pembayaran/update/<?= $p->id ?>"><i
                            class="fas fa-edit"></i>Verifikasi</a> -->
                        <?php if ($p->sisa_bayar == "0") : ?>
                            <form action="/admin/pembayaran/update/<?= $p->id ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <button class="btn btn-sm <?php echo ($p->status_bayar == 0) ? "btn-warning" : "btn-primary"; ?>" type="submit"><?php echo ($p->status_bayar == 0) ? "Verifikasi" : "Terverifikasi"; ?></button>
                            </form>
                        <?php else : ?>
                            <div>
                            </div>
                        <?php endif; ?>

                        <form action="/admin/pembayaran/<?= $p->id ?>" method="post" class="d-inline">
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