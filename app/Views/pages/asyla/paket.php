<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section style="margin-top: 3rem;" class="mx-5">
    <h2 class="text-center"><?php echo $judul ?></h2>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success text-center w-25" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>
    <div class="row justify-content-between mx-3 mb-5">

        <?php foreach ($paket as $p) : ?>
        <div class="card text-center w-25 col-sm-6 col-mb-4 col-lg-3">
            <div class="card-header text-uppercase">
                <?= $p['nama']; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title text-uppercase"><?= $p['tipe']; ?></h5>
                <p class="card-text">
                    <?= $p['harga']; ?>
                </p>
            </div>
            <div class="card-footer text-body-secondary">
                <a href="/asyla/daftar_jemaah/<?= $p['id']; ?>" class="btn btn-primary">Daftar Sekarang</a>

            </div>
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample<?= $p['id']; ?>" aria-expanded="false"
                    aria-controls="collapseExample<?= $p['id']; ?>">
                    Lihat Detail Paket
                </button>
            </p>
            <div class="collapse" id="collapseExample<?= $p['id']; ?>">
                <div class="card card-body">
                    <h5 class="card-title text-uppercase"></h5>
                    <?= $p['maskapai']; ?> dengan penginapan di kota Mekkah
                    <? $p['mekkah']; ?> dan penginapan di Madinah <?= $p['madinah']; ?> termasuk Wisata Religi ke
                    <?= $p['itenerary']; ?>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <div class="my-5">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-left: 15rem;">Harga Sudah Termasuk </h5>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Tiket Pesawat PP Ekonomi By Garuda Airlines</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Akomodasi / Hotel Sesuai Program</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p> Transportasi & Driver Selama Di Arab Saudi</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Transportasi & Driver Selama Di Arab Saudi</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Makan Dan Minum 3X Sehari FullBoard Hotel</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Tour Leader</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Visa & Asuransi Perjalanan Umrah</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Manasik Umrah</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Air Zam-Zam 5 Liter</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Landing Indonesia & Arab Saudi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-left: 15rem;">Harga Tidak Termasuk </h5>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Pembuatan Paspor</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Vaksin Meningitis</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Tes PCR (Jika Di Perlukan)</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Kelebihan Bagasi Sesuai Peraturan Maskapai</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Pengeluaran Pribadi Diluar Paket</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Jasa Sewa Kursi Roda Selama Di Arab Saudi</p>
                            </div>
                            <div class="d-flex">
                                <i class='bx bxs-circle mr-2 mt-2'></i>
                                <p>Biaya Tambahan (Apabila Ada) Yang Dikeluarkan Oleh Pemerintah Arab Saudi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>