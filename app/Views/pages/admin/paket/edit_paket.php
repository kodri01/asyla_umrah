<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card" style="width:70%; margin-bottom: 100px">

        <div class="card-body">
            <form method="POST" action="/admin/update_paket/<?= $paket['id']; ?>" enctype="multipart/from-data">
                <?= csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe Paket</label>
                    <div class="col-sm-10">
                        <input type="text" name="tipe" value="<?= $paket['tipe']; ?>" id="tipe"
                            class="form-control <?php echo ($validation->hasError('tipe')) ? 'is-invalid' : ''; ?>"
                            placeholder="Masukan tipe paket">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('tipe'); ?>
                        </div>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Paket</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" value="<?= $paket['nama']; ?>" id="nama"
                            class="form-control <?php echo ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                            placeholder="Masukan nama paket">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="maskapai" class="col-sm-2 col-form-label">Maskapai</label>
                    <div class="col-sm-10">
                        <input type="text" name="maskapai" value="<?= $paket['maskapai']; ?>" id="maskapai"
                            class="form-control <?php echo ($validation->hasError('maskapai')) ? 'is-invalid' : ''; ?>"
                            placeholder="Masukan nama maskapai pesawat">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('maskapai'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mekkah" class="col-sm-2 col-form-label">Penginapan Mekkah</label>
                    <div class="col-sm-10">
                        <input type="text" name="mekkah" id="mekkah" value="<?= $paket['mekkah']; ?>"
                            class="form-control <?php echo ($validation->hasError('mekkah')) ? 'is-invalid' : ''; ?>"
                            placeholder="Masukan tempat penginapan mekkah">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('mekkah'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="madinah" class="col-sm-2 col-form-label">Penginapan Madinah</label>
                    <div class="col-sm-10">
                        <input type="text" name="madinah" id="madinah" value="<?= $paket['madinah']; ?>"
                            class="form-control <?php echo ($validation->hasError('madinah')) ? 'is-invalid' : ''; ?>"
                            placeholder="Masukan tempat penginapan madinah">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('madinah'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Paket</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga" id="harga" value="<?= $paket['harga']; ?>"
                            class="form-control <?php echo ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>"
                            placeholder="Masukan harga paket">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('harga'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="itenerary" class="col-sm-2 col-form-label">Itenerary</label>
                    <div class="col-sm-10">
                        <input type="text" name="itenerary"
                            class="form-control <?php echo ($validation->hasError('itenerary')) ? 'is-invalid' : ''; ?>"
                            value="<?= $paket['itenerary']; ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('itenerary'); ?>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="itenerary" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_berangkat" value="<?= $paket['tgl_berangkat']; ?>"
                            class="form-control <?php echo ($validation->hasError('tgl_berangkat')) ? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('tgl_berangkat'); ?>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="itenerary" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_kembali" value="<?= $paket['tgl_kembali']; ?>"
                            class="form-control <?php echo ($validation->hasError('tgl_kembali')) ? 'is-invalid' : ''; ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('tgl_kembali'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="<?php echo base_url('/admin/paket_umrah') ?>" class="btn btn-danger">Batal</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>