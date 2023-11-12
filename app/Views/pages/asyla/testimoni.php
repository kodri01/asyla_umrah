<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<section style="margin-top: 3rem;" class="mx-5">
    <h2 class="text-center mb-3 text-uppercase">Testimoni Jemaah</h2>

    <div class="row justify-content-center">
        <?php foreach ($testimoni as $p) : ?>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem; height:480px;">
                    <img src='<?= base_url('uploads/' . $p->foto) ?>' class="img-fluid" style="height:250px;" />
                    <h4 class="text-center text-capitalize my-2"><?= $p->nama_suami; ?></h4>
                    <i class='bx bxs-quote-single-left ml-3' style="font-size: x-large;  color:gray"></i>
                    <div class="card-body">
                        <p class="card-text text-center mx-2 text-capitalize"><?= $p->isi; ?></p>
                        <i class='bx bxs-quote-single-right' style="font-size: x-large; margin-left:14rem; color:gray"></i>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<?= $this->endSection(); ?>