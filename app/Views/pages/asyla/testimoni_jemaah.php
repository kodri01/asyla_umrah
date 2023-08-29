<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section style="margin-top: 3rem;" class="mx-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('/asyla/profile_jemaah') ?>">Profil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Testimoni</li>
        </ol>
    </nav>
    <form method="POST" action="/asyla/save_testimoni/<?= user()->id; ?>" enctype="multipart/form-data">
        <div class="row mb-5">
            <h2 for="inputEmail3" class="col-sm-4 col-form-label">Isi Testimoni</h2>
            <div class="col-sm-10">
                <textarea name="isi" id="" cols="75" rows="10"></textarea>
            </div>
        </div>
        <div class="gap-4 ">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="submit" class="btn btn-danger">Batal</button>
    </form>
</section>

<?= $this->endSection(); ?>