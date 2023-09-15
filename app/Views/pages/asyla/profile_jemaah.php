<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top: 4rem;" class="mx-5">

    <div class="container bootstrap snippet">
        <?php if ($profile == null) : ?>
        <center>
            <div class="card text-center w-50">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">Tidak Ada Profile</h5>
                    <p class="card-text">Segera Lengkapi Data Diri Anda</p>
                    <a href="/asyla/paket" class="btn btn-primary">Lengkapi</a>
                </div>
            </div>
        </center>
        <?php else : ?>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->

                <div class="mt-3">
                    <h3 class="mb-2 text-capitalize"><?= user()->username; ?></h3>
                    <?php if (!empty($profile['foto'])) : ?>
                    <img src='<?= base_url('uploads/' . $profile['foto']) ?>' class="avatar img-circle img-thumbnail"
                        style="width: 200px; height: 200px;" />

                    <?php else : ?>
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail"
                        alt="avatar">
                    <?php endif; ?>
                    <h6>Upload a different photo...</h6>
                    <form action="/asyla/upload_foto/<?= $profile['id'] ?>" method="post" enctype="multipart/form-data">
                        <input type="file" class="text-center center-block file-upload" name="foto">
                        <button type="submit" class="my-2 btn btn-sm btn-info">Upload Foto</button>
                    </form>
                </div>
                </hr><br>
            </div>
            <!--/col-3-->
            <div class="col-sm-9">
                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-8">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" aria-current="page" href="#data">Data
                                    Diri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#berkas">Berkas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#status">Status Anda</a>

                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div class="row justify-content-between">
                            <a href="/asyla/edit_jemaah/<?= $profile['id'] ?>" class="btn btn-sm btn-warning col-4">Edit
                                Data</a>
                            <a href="/asyla/testimoni_jemaah/<?= user()->id; ?>"
                                class="btn btn-sm btn-success col-7">Add Testimoni</a>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="data">
                        <hr>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h6>Nama Lengkap</h6>
                                </label>
                                <input type="text" class="form-control text-capitalize" disabled name="nama"
                                    id="first_name" value="<?= $profile['nama']; ?>"
                                    title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h6>Tempat Lahir</h6>
                                </label>
                                <input type="text" class="form-control" name="tempat_lahir" disabled id="first_name"
                                    value="<?= $profile['tempat_lahir']; ?>" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h6>Tanggal Lahir</h6>
                                </label>
                                <input type="date" class="form-control " name="tgl_lahir" disabled id="first_name"
                                    value="<?= $profile['tgl_lahir']; ?>" title="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h6>Jenis Kelamin</h6>
                                </label>
                                <input type="text" disabled class="form-control text-capitalize" name="jns_kelamin"
                                    id="first_name" value="<?= $profile['jns_kelamin']; ?>"
                                    title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h6>Usia</h6>
                                </label>
                                <input type="text" class="form-control text-capitalize" disabled name="usia"
                                    id="first_name" value="<?= $profile['usia'] . ' Tahun' ?>"
                                    title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h6>Alamat</h6>
                                </label>
                                <input type="text" class="form-control" name="alamat" disabled id="first_name"
                                    value="<?= $profile['alamat']; ?>" title="enter your first name if any.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone">
                                    <h6>Phone</h6>
                                </label>
                                <input type="text" class="form-control" name="hp_jemaah" disabled id="phone"
                                    placeholder="enter phone" value="<?= $profile['hp_jemaah']; ?>"
                                    title="enter your phone number if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h6>Email</h6>
                                </label>
                                <input type="email" class="form-control" name="email" disabled
                                    value="<?= user()->email ?>" id="email">
                            </div>
                        </div>
                        <hr>

                    </div>
                    <!--/tab-pane-->
                    <div class="tab-pane" id="berkas">

                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="" class="">Foto KTP</label>
                                <?php if (!empty($profile['ktp'])) : ?>
                                <div class="form-group ">
                                    <div class="show-image d-inline-block" id="show-image">
                                        <img src='<?= base_url('uploads/' . $profile['ktp']) ?>'
                                            class="img-fluid img-thumbnail" style="width: 200px; height: 200px;" />
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="">Kartu Keluarga</label>
                                <?php if (!empty($profile['kartu_keluarga'])) : ?>
                                <div class="form-group">
                                    <div class="show-image d-inline-block" id="show-image">
                                        <img src='<?= base_url('uploads/' . $profile['kartu_keluarga']) ?>'
                                            class="img-fluid img-thumbnail" style="width: 200px; height: 200px;" />
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="">Paspor</label>
                                <?php if (!empty($profile['paspor'])) : ?>
                                <div class="form-group">
                                    <div class="show-image d-inline-block" id="show-image">
                                        <img src='<?= base_url('uploads/' . $profile['paspor']) ?>'
                                            class="img-fluid img-thumbnail" style="width: 200px; height: 200px;" />
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-md-4">
                                <label for="" class="">Akta Kelahiran</label>
                                <?php if (!empty($profile['akta_kelahiran'])) : ?>
                                <div class="form-group ">
                                    <div class="show-image d-inline-block" id="show-image">
                                        <img src='<?= base_url('uploads/' . $profile['akta_kelahiran']) ?>'
                                            class="img-fluid img-thumbnail" style="width: 200px; height: 200px;" />
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="">Buku Nikah</label>
                                <?php if (!empty($profile['buku_nikah'])) : ?>
                                <div class="form-group">
                                    <div class="show-image d-inline-block" id="show-image">
                                        <img src='<?= base_url('uploads/' . $profile['buku_nikah']) ?>'
                                            class="img-fluid img-thumbnail" style="width: 200px; height: 200px;" />
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                    <!--/tab-pane-->
                    <div class="tab-pane" id="status">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <?php if ($profile['status'] == 0) : ?>
                                <div class="card text-white bg-warning my-3">
                                    <div class="card-header text-center">Warning</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Kelengkapan Berkas</h5>
                                        <p class="card-text">Berkas yang anda ajukan tidak lengkap, segera lengkapi
                                            berkas anda
                                        </p>
                                        <a href="/asyla/edit_berkas/<?= $profile['id'] ?>"
                                            class="btn btn-info">Lengkapi</a>
                                    </div>
                                </div>
                                <?php else : ?>
                                <div class="card text-white bg-success my-3">
                                    <div class="card-header text-center">Selamat !!</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Kelengkapan Berkas</h5>
                                        <p class="card-text">Berkas anda sudah terverifikasi oleh Admin
                                        </p>
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                            <?php if ($bayar != null) : ?>
                            <div class="col-6">
                                <?php if ($bayar['status'] == 0 && $bayar['sisa_bayar'] != 0) : ?>
                                <div class="card text-white bg-danger my-3">
                                    <div class="card-header text-center">Peringatan</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Status Pembayaran</h5>
                                        <p class="card-text">Pembayaran anda belum lunas, segera lunasin pembayaran Anda
                                            sebesar <?= "Rp. " . number_format($bayar['sisa_bayar'], 0, ',', '.'); ?>
                                        </p>
                                        <a href="/asyla/pelunasan" class="btn btn-info">Pelunasan</a>
                                    </div>
                                </div>
                                <?php elseif ($bayar['status'] == 0 && $bayar['sisa_bayar'] == 0) : ?>
                                <div class="card text-white bg-warning my-3">
                                    <div class="card-header text-center">Selamat !!</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Status Pembayaran</h5>
                                        <p class="card-text">Pembayaran Anda Telah Lunas, untuk sementara tunggu
                                            Verifikasi oleh Admin
                                        </p>
                                    </div>
                                </div>
                                <?php elseif ($bayar['status'] == 1 && $bayar['sisa_bayar'] == 0) : ?>
                                <div class="card text-white bg-success my-3">
                                    <div class="card-header text-center">Selamat !!</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Status Pembayaran</h5>
                                        <p class="card-text">Pembayaran Anda telah terverifikasi oleh Admin
                                        </p>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php else : ?>
                            <div class="col-6">
                                <div class="card text-white bg-danger my-3">
                                    <div class="card-header text-center">Pemberitahuan!!!</div>
                                    <div class="card-body">
                                        <h5 class="card-title">Pembayaran</h5>
                                        <p class="card-text">Anda Belum Melakukan Pembayaran
                                        </p>
                                        <a href="/asyla/pembayaran" class="btn btn-primary">Bayar
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>

                </div>

            </div>


        </div>
        <?php endif; ?>
        <!--/col-9-->
    </div>
    <!--/row-->
</section>
<script>
$(document).ready(function() {


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function() {
        readURL(this);
    });
});
</script>

<?= $this->endSection(); ?>