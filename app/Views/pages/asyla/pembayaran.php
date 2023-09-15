<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top: 4rem;" class="mx-5">
    <?php if ($profile == null) : ?>
    <center>
        <div class="card text-center w-50">
            <div class="card-body">
                <h5 class="card-title text-uppercase">Pembayaran Tidak Tersedia</h5>
                <p class="card-text">Segera Lengkapi Data Diri Anda</p>
                <a href="/asyla/paket" class="btn btn-primary">Lengkapi</a>
            </div>
        </div>
    </center>
    <?php else : ?>
    <?php if ($profile->sisa_bayar == '0') : ?>
    <center>
        <div class="card text-white bg-warning my-3 w-75">
            <div class="card-header text-center">
                <h2>Selamat !!</h2>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Status Pembayaran</h5>
                <p class="card-text">Pembayaran Anda Telah Lunas, untuk sementara tunggu
                    Verifikasi oleh Admin
                </p>
            </div>
        </div>
    </center>
    <?php else : ?>
    <?php if ($profile->harga_paket != $profile->jml_bayar) : ?>
    <form method="POST" action="/asyla/update_pembayaran/<?= $pelunasan['id'] ?>" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Transfer Ke Bank</label>
            <div class="col-sm-10">
                <input type="text" disabled value="BSI - 7106103048 a.n PT ASYLA FATIMAH WISATA" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Sisa yang harus dibayar</label>
            <div class="col-sm-10">
                <input type="text" disabled value="Rp. <?= number_format($pelunasan['sisa_bayar'], 0, ',', '.')  ?>"
                    class="form-control">
                <input type="hidden" value="<?= $pelunasan['sisa_bayar'] ?>" name="sisa_bayar" class="form-control">
                <input type="hidden" value="<?= $pelunasan['harga_paket'] ?>" name="harga_paket" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah yang dibayarkan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jml_bayar" placeholder="Masukan nomimal pembayaran">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="bukti_bayar">
            </div>
        </div>
        <div class="gap-4 mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <?php else : ?>
    <form method="POST" action="/asyla/save_pembayaran" enctype="multipart/form-data">
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Transfer Ke Bank</label>
            <div class="col-sm-10">
                <input type="text" disabled value="BSI - 7106103048 a.n PT ASYLA FATIMAH WISATA" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga yang harus dibayar</label>
            <div class="col-sm-10">
                <input type="text" disabled value="Rp. <?= number_format($profile->harga, 0, ',', '.') ?>"
                    class="form-control">
                <input type="hidden" value="<?= $profile->harga ?>" name="harga_paket" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah yang dibayarkan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jml_bayar" placeholder="Masukan nomimal pembayaran">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="bukti_bayar">
            </div>
        </div>
        <div class="gap-4 mt-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-danger">Batal</button>
    </form>
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>

</section>

<?= $this->endSection(); ?>