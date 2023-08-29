<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top: 2.5rem;" class="mx-5">

    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/asyla/profile_jemaah">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Berkas</li>
            </ol>
        </nav>
        <form action="/asyla/update_berkas/<?= $profile['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="card px-3 py-2">
                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="" class="">Foto KTP</label>
                        <input type="file" name="ktp" class="form-control" placeholder="" aria-label="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="">Kartu Keluarga</label>
                        <input type="file" name="kartu_keluarga" class="form-control" placeholder="" aria-label="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="">Paspor</label>
                        <input type="file" name="paspor" class="form-control" placeholder="" aria-label="">
                    </div>
                </div>
                <div class="row mt-1">
                    <?php if (!empty($profile['ktp'])) : ?>
                    <div class="form-group col-md-4">
                        <div class="show-image d-inline-block" id="show-image" style="width: 150px; height: auto;">
                            <img src='<?= base_url('uploads/' . $profile['ktp']) ?>' class="img-fluid img-thumbnail" />
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($profile['kartu_keluarga'])) : ?>
                    <div class="form-group col-md-4">
                        <div class="show-image d-inline-block" id="show-image" style="width: 150px; height: auto;">
                            <img src='<?= base_url('uploads/' . $profile['kartu_keluarga']) ?>'
                                class="img-fluid img-thumbnail" />
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($profile['paspor'])) : ?>
                    <div class="form-group col-md-4">
                        <div class="show-image d-inline-block" id="show-image" style="width: 150px; height: auto;">
                            <img src='<?= base_url('uploads/' . $profile['paspor']) ?>'
                                class="img-fluid img-thumbnail" />
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="row mt-2">
                    <div class="col-md-4">
                        <label for="" class="">Akta Kelahiran</label>
                        <input type="file" name="akta_kelahiran" class="form-control" placeholder="" aria-label="">
                    </div>
                    <div class="col-md-4">
                        <label for="" class="">Buku Nikah</label>
                        <input type="file" name="buku_nikah" class="form-control" placeholder="" aria-label="">
                    </div>
                </div>
                <div class="row mt-1">
                    <?php if (!empty($profile['akta_kelahiran'])) : ?>
                    <div class="form-group col-md-4">
                        <div class="show-image d-inline-block" id="show-image" style="width: 150px; height: auto;">
                            <img src='<?= base_url('uploads/' . $profile['akta_kelahiran']) ?>'
                                class="img-fluid img-thumbnail" />
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($profile['buku_nikah'])) : ?>
                    <div class="form-group col-md-4">
                        <div class="show-image d-inline-block" id="show-image" style="width: 150px; height: auto;">
                            <img src='<?= base_url('uploads/' . $profile['buku_nikah']) ?>'
                                class="img-fluid img-thumbnail" />
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="text-right my-3">
                    <button class="btn btn-sm btn-primary " type="submit">Update Berkas</button>
                </div>
            </div>

    </div>

    </form>
    </div>
</section>

<?= $this->endSection(); ?>