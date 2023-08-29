<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="card" style="width:70%; margin-bottom: 100px">

        <div class="card-body">
            <form method="POST" action="/admin/save_paket" enctype="multipart/from-data">
                <?= csrf_field(); ?>
                <div class="mb-3 row">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe Paket</label>
                    <div class="col-sm-10">
                        <input type="text" name="tipe" id="tipe" class="form-control" value="<?php echo old('tipe'); ?>" placeholder="Masukan tipe paket">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'tipe') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Paket</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama" class="form-control " placeholder="Masukan nama paket">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'nama') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="maskapai" class="col-sm-2 col-form-label">Maskapai</label>
                    <div class="col-sm-10">
                        <input type="text" name="maskapai" id="maskapai" class="form-control " placeholder="Masukan nama maskapai pesawat">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'maskapai') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mekkah" class="col-sm-2 col-form-label">Penginapan Mekkah</label>
                    <div class="col-sm-10">
                        <input type="text" name="mekkah" id="mekkah" class="form-control" placeholder="Masukan tempat penginapan mekkah">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'mekkah') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="madinah" class="col-sm-2 col-form-label">Penginapan Madinah</label>
                    <div class="col-sm-10">
                        <input type="text" name="madinah" id="madinah" class="form-control " placeholder="Masukan tempat penginapan madinah">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'madinah') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Paket</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga" id="harga" class="form-control " placeholder="Masukan harga paket">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'harga') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="itenerary" class="col-sm-2 col-form-label">Itenerary</label>
                    <div class="col-sm-10">
                        <textarea name="itenerary" id="itenerary" cols="83" rows="3"></textarea>
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'itenerary') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="itenerary" class="col-sm-2 col-form-label">Tanggal Berangkat</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_berangkat" class="form-control">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'tgl_berangkat') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="itenerary" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl_kembali" class="form-control">
                        <?php if (session()->has('errors')) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?php if (strpos($error, 'tgl_kembali') !== false) : ?>
                                    <div style="color: red;"><?php echo $error; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?php echo base_url('/admin/paket_umrah') ?>" class="btn btn-danger">Batal</a>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>