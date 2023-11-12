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
    <?php if ($profile->status_jemaah == '0') : ?>
    <center>
        <div class="card text-white bg-warning my-3 w-75">
            <div class="card-header text-center">
                <h2>Pemberitahuan !!</h2>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Kelengkapan Berkas</h5>
                <p class="card-text text-center">Untuk melanjutkan proses pembayaran, tunggu Admin melakukan
                    verifikasi dalam waktu 1x24 jam. Silakan kembali lagi untuk
                    melanjutkan proses
                </p>
            </div>
        </div>
    </center>
    <?php elseif ($profile->sisa_bayar == '0' && $profile->status == '0') : ?>
    <center>
        <div class="card text-white bg-warning my-3 w-75">
            <div class="card-header text-center">
                <h2>Pemberitahuan !!</h2>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Status Pembayaran</h5>
                <p class="card-text">Pembayaran Anda Telah Lunas, untuk sementara tunggu
                    Verifikasi oleh Admin
                </p>
            </div>
        </div>
    </center>
    <?php elseif ($profile->sisa_bayar == '0' && $profile->status == '1') : ?>
    <center>
        <div class="card text-white bg-success my-3 w-75">
            <div class="card-header text-center">
                <h2>Selamat !!</h2>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Status Pembayaran</h5>
                <p class="card-text">Pembayaran Anda telah terverifikasi oleh Admin
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
                <input type="text" autocomplete="off" class="form-control" name="jml_bayar"
                    placeholder="Masukan nomimal pembayaran">
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
            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga Paket</label>
            <div class="col-sm-10">
                <input type="text" disabled value="Rp. <?= number_format($profile->harga, 0, ',', '.') ?>"
                    class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Harga yang harus dibayar</label>
            <div class="col-sm-10">
                <input type="text" id="total_harga" name="total_harga" disabled value="total harga"
                    class="form-control">
                <input type="hidden" id="total_harga_paket" name="total_harga_paket" value="total harga"
                    class="form-control">
                <span class="badge text-bg-info text-white">Harga Paket @ <?= $profile->jml_rombongan  + 1 ?>
                    anggota</span>
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

<script>
const hargaPerRombongan = <?= $profile->harga ?>;
const jumlahRombongan = <?= $profile->jml_rombongan ?>;

// Menghitung total harga
const totalHarga = hargaPerRombongan * (jumlahRombongan + 1);
const totalHargaPaket = hargaPerRombongan * (jumlahRombongan + 1);

// Memformat total harga sebagai mata uang
const formattedTotalHarga = new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR'
}).format(totalHarga);

// Menampilkan total harga pada input dengan id "total_harga"
document.getElementById('total_harga').value = formattedTotalHarga;
document.getElementById('total_harga_paket').value = totalHargaPaket;
</script>


<?= $this->endSection(); ?>