<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top: 2.5rem;" class="mx-5">

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/asyla/profile_jemaah') ?>">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
            </ol>
        </nav>
        <form action="/asyla/update_jemaah/<?= $profile['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="card px-3 py-2">

                <div class="">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="">Nama Lengkap</label>

                            <input type="text" name="nama" class="form-control" value="<?= $profile['nama'] ?>" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Nama Ayah Kandung</label>
                            <input type="text" name="nama_ayah" class="form-control" value="<?= $profile['nama_ayah'] ?>" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="<?= $profile['tempat_lahir'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="<?= $profile['tgl_lahir'] ?>" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="" class="">Pendidikan</label>
                            <input type="text" name="pendidikan" class="form-control" value="<?= $profile['pendidikan'] ?>" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="<?= $profile['pekerjaan'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="" class="">Alamat</label>
                            <input type="text" name="alamat" value="<?= $profile['alamat'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Desa</label>
                            <input type="text" name="desa" value="<?= $profile['desa'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="" class="">Kecamatan</label>
                            <input type="text" name="kecamatan" value="<?= $profile['kecamatan'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Kabupaten</label>
                            <input type="text" name="kabupaten" value="<?= $profile['kabupaten'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="" class="">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" value="<?= $profile['provinsi'] ?>" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Kode Pos</label>
                            <input type="text" name="kode_pos" value="<?= $profile['kode_pos'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="" class="">Handphone Jemaah</label>
                            <input type="text" name="hp_jemaah" value="<?= $profile['hp_jemaah'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Telepon Jemaah</label>
                            <input type="text" name="telp_jemaah" value="<?= $profile['telp_jemaah'] ?>" class="form-control" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="" class="">Usia</label>
                            <input type="text" name="usia" class="form-control" value="<?= $profile['usia'] ?>" placeholder="" aria-label="">
                        </div>
                    </div>
                    <div class="text-right my-3">
                        <button class="btn btn-sm btn-primary " type="submit">Update Profile</button>
                    </div>
                </div>

            </div>

        </form>
    </div>
</section>

<?= $this->endSection(); ?>