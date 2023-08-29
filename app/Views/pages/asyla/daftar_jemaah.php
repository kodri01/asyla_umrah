<?php

use Myth\Auth\Config\Auth;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section style="margin-top: 4rem;" class="mx-5">
    <form method="POST" action="/asyla/save_jemaah/<?= $paket['id']; ?>" enctype="multipart/form-data">
        <div class="container-fluid text-center">
            <h2 class="text-uppercase">form Pendaftaran jemaah</h2>
        </div>
        <div class="mb-3">
            <h5>Data Diri Jemaah</h5>
        </div>
        <div>
            <input type="hidden" name="id_paket" value="<?= $paket['id']; ?>">
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="">Nama Lengkap</label>
                <input type="text" class="form-control <?php echo ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" value="<?= old('nama') ?>" placeholder="Masukan Nama Lengkap" />
                <div class="invalid-feedback">
                    <?php echo $validation->getError('nama'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Nama Ayah Kandung</label>
                <input type="text" name="nama_ayah" class="form-control <?php echo ($validation->hasError('nama_ayah')) ? 'is-invalid' : ''; ?>" aria-label="" value="<?= old('nama_ayah') ?>" placeholder="Masukan Nama Ayah">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('nama_ayah'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" value="<?= old('tempat_lahir'); ?>" class="form-control <?php echo ($validation->hasError('tempat_lahir')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Tempat Lahir" aria-label="">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('tempat_lahir'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control <?php echo ($validation->hasError('tgl_lahir')) ? 'is-invalid' : ''; ?>" placeholder="" aria-label="">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('tgl_lahir'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <fieldset class="col-md-6 mb-2">
                <label class="ml-1 pt-0">Jenis Kelamin</label>

                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_kelamin" id="option1" value="laki-laki" checked>
                            <label class="form-check-label" for="option1">
                                Laki-Laki
                            </label>
                        </div>
                    </div>
                    <div class="col mr-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk_kelamin" id="option2" value="perempuan" checked>
                            <label class="form-check-label" for="option2">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset class="col-md-6 mb-2">
                <label class="ml-1 pt-0">Kewarganegaraan</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kewarganegaraan" id="option3" value="indonesia" checked>
                            <label class="form-check-label" for="option3">Indonesia</label>
                        </div>
                    </div>
                    <div class="col mr-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="kewarganegaraan" id="option4" value="asing" checked>
                            <label class="form-check-label" for="option4">Asing</label>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control <?php echo ($validation->hasError('pendidikan')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Pendidikan Terakhir Anda" aria-label="" value="<?= old('pendidikan'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('pendidikan'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Usia</label>
                <input type="text" name="usia" class="form-control <?php echo ($validation->hasError('usia')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Usia Anda" aria-label="" value="<?= old('usia'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('usia'); ?>
                </div>
            </div>

        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Alamat</label>
                <input type="text" name="alamat" class="form-control <?php echo ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Alamat Lengkap Anda" aria-label="" value="<?= old('alamat'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('alamat'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Desa</label>
                <input type="text" name="desa" class="form-control <?php echo ($validation->hasError('desa')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Desa Anda" aria-label="" value="<?= old('desa'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('desa'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control <?php echo ($validation->hasError('kecamatan')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Kecamatan Anda" aria-label="" value="<?= old('kecamatan'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('kecamatan'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control <?php echo ($validation->hasError('kabupaten')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Kabupaten Anda" aria-label="" value="<?= old('kabupaten'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('kabupaten'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Provinsi</label>
                <input type="text" name="provinsi" class="form-control <?php echo ($validation->hasError('provinsi')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Nama Provinsi Anda" aria-label="" value="<?= old('provinsi'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('provinsi'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control <?php echo ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Pekerjaan Anda" aria-label="" value="<?= old('pekerjaan'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('pekerjaan'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Handphone Jemaah</label>
                <input type="text" name="hp_jemaah" class="form-control <?php echo ($validation->hasError('hp_jemaah')) ? 'is-invalid' : ''; ?>" placeholder="+628123+++++" aria-label="" value="<?= old('hp_jemaah'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('hp_jemaah'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Telepon Jemaah</label>
                <input type="text" name="telp_jemaah" class="form-control <?php echo ($validation->hasError('telp_jemaah')) ? 'is-invalid' : ''; ?>" placeholder="02123456" aria-label="" value="<?= old('telp_jemaah'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('telp_jemaah'); ?>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Email Jemaah</label>
                <input type="text" name="email_jemaah" class="form-control <?php echo ($validation->hasError('email_jemaah')) ? 'is-invalid' : ''; ?>" placeholder="" aria-label="" value="<?= user()->email ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('email_jemaah'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="" class="">Kode Pos</label>
                <input type="text" name="kode_pos" class="form-control <?php echo ($validation->hasError('kode_pos')) ? 'is-invalid' : ''; ?>" placeholder="Masukan Kode Pos Anda" aria-label="" value="<?= old('kode_pos'); ?>">
                <div class="invalid-feedback">
                    <?php echo $validation->getError('kode_pos'); ?>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <h5>Lengkapi Berkas </h5>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Foto</label>
                <input type="file" name="foto" class="form-control " placeholder="" aria-label="">

            </div>
            <div class="col-md-6">
                <label for="" class="">Foto KTP</label>
                <input type="file" name="ktp" class="form-control " placeholder="" aria-label="">

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Kartu Keluarga</label>
                <input type="file" name="kartu_keluarga" class="form-control" placeholder="" aria-label="">

            </div>
            <div class="col-md-6">
                <label for="" class="">Paspor</label>
                <input type="file" name="paspor" class="form-control " placeholder="" aria-label="">

            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-6">
                <label for="" class="">Akta Kelahiran</label>
                <input type="file" name="akta_kelahiran" class="form-control " placeholder="" aria-label="">

            </div>
            <div class="col-md-6">
                <label for="" class="">Buku Nikah</label>
                <input type="file" name="buku_nikah" class="form-control " placeholder="" aria-label="">

            </div>
        </div>

        </fieldset>
        <div class="gap-4 mt-4">
            <button class="btn btn-success " type="submit">Daftar</button>
            <a class="btn btn-danger" href="/asyla/daftar">Batal</a>
        </div>
    </form>
</section>


<?= $this->endSection(); ?>