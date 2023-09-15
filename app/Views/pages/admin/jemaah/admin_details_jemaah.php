<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data_jemaah">Data Jemaah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Details Jemaah</li>
        </ol>
    </nav>

    <div class="d-sm-flex align-items-center justify-content-center my-4">
        <h1 class="h3 mb-0 text-gray-800 text-uppercase"><b><?php echo $judul ?></b></h1>
    </div>

    <center>
        <?php if (!empty($profile->foto)) : ?>
        <div class="form-group ">
            <div class="show-image d-inline-block" id="show-image">
                <img src='<?= base_url('uploads/' . $profile->foto) ?>' class="img-fluid img-thumbnail"
                    style="width: 200px; height: 200px;" />
            </div>
        </div>
        <?php endif; ?>
    </center>

    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->nama ?>">
                <label for="floatingInputGrid">Nama Lengkap</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->tempat_lahir ?>">
                <label for="floatingInputGrid">Tempat Lahir</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="date" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->tgl_lahir ?>">
                <label for="floatingInputGrid">Tanggal Lahir</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->jns_kelamin ?>">
                <label for="floatingInputGrid">Jenis Kelamin</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->usia ?>">
                <label for="floatingInputGrid">Usia</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->pekerjaan ?>">
                <label for="floatingInputGrid">Pekerjaan</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->email_jemaah ?>">
                <label for="floatingInputGrid">Email</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->hp_jemaah ?>">
                <label for="floatingInputGrid">Nomor Handpone</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->telp_jemaah ?>">
                <label for="floatingInputGrid">Nomor Telpon</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->alamat ?>">
                <label for="floatingInputGrid">Alamat</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->desa ?>">
                <label for="floatingInputGrid">Desa</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->kecamatan ?>">
                <label for="floatingInputGrid">Kecamatan</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->kabupaten ?>">
                <label for="floatingInputGrid">Kabupaten</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->provinsi ?>">
                <label for="floatingInputGrid">Provinsi</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->kewarganegaraan ?>">
                <label for="floatingInputGrid">Kewarganegaraan</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->kode_pos ?>">
                <label for="floatingInputGrid">Kode Pos</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->nama_ayah ?>">
                <label for="floatingInputGrid">Nama Ayah</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->pendidikan ?>">
                <label for="floatingInputGrid">Pendidikan</label>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-center my-4">
        <h1 class="h3 text-gray-800 text-uppercase"><b>Pilihan Paket</b></h1>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->tipe ?>">
                <label for="floatingInputGrid">Tipe Paket</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->nama_paket ?>">
                <label for="floatingInputGrid">Nama Paket</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="Rp. <?= number_format($profile->harga, 0, ',', '.')  ?>">
                <label for="floatingInputGrid">Harga Paket</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->maskapai ?>">
                <label for="floatingInputGrid">Maskapai</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->mekkah ?>">
                <label for="floatingInputGrid">Hotel Mekkah</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->madinah ?>">
                <label for="floatingInputGrid">Hotel Madinah</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="date" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->tgl_berangkat ?>">
                <label for="floatingInputGrid">Keberangkatan</label>
            </div>
        </div>
        <div class="col-md">
            <div class="form-floating">
                <input type="date" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->tgl_kembali ?>">
                <label for="floatingInputGrid">Kepulangan</label>
            </div>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md">
            <div class="form-floating">
                <input type="text" class="form-control text-bold text-capitalize" id="floatingInputGrid" disabled
                    value="<?= $profile->itenerary ?>">
                <label for="floatingInputGrid">Itenerary</label>
            </div>
        </div>
    </div>


    <div class="d-sm-flex align-items-center justify-content-center my-4">
        <h1 class="h3 mb-0 text-uppercase text-gray-800"><b>Kelengkapan Berkas</b></h1>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md-4">
            <label for="" class="">Foto KTP</label>
            <?php if (!empty($profile->ktp)) : ?>
            <div class="form-group ">
                <div class="show-image d-inline-block" id="show-image">
                    <img src='<?= base_url('uploads/' . $profile->ktp) ?>' class="img-fluid img-thumbnail"
                        style="width: 300px; height: 300px;" />
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <label for="" class="">Kartu Keluarga</label>
            <?php if (!empty($profile->kartu_keluarga)) : ?>
            <div class="form-group ">
                <div class="show-image d-inline-block" id="show-image">
                    <img src='<?= base_url('uploads/' . $profile->kartu_keluarga) ?>' class="img-fluid img-thumbnail"
                        style="width: 300px; height: 300px;" />
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <label for="" class="">Akte Kelahiran</label>
            <?php if (!empty($profile->akta_kelahiran)) : ?>
            <div class="form-group ">
                <div class="show-image d-inline-block" id="show-image">
                    <img src='<?= base_url('uploads/' . $profile->akta_kelahiran) ?>' class="img-fluid img-thumbnail"
                        style="width: 300px; height: 300px;" />
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row g-2 mb-2">
        <div class="col-md-4">
            <label for="" class="">Pasport</label>
            <?php if (!empty($profile->paspor)) : ?>
            <div class="form-group ">
                <div class="show-image d-inline-block" id="show-image">
                    <img src='<?= base_url('uploads/' . $profile->paspor) ?>' class="img-fluid img-thumbnail"
                        style="width: 300px; height: 300px;" />
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <label for="" class="">Buku Nikah</label>
            <?php if (!empty($profile->buku_nikah)) : ?>
            <div class="form-group ">
                <div class="show-image d-inline-block" id="show-image">
                    <img src='<?= base_url('uploads/' . $profile->buku_nikah) ?>' class="img-fluid img-thumbnail"
                        style="width: 300px; height: 300px;" />
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

</div>


<?= $this->endSection(); ?>