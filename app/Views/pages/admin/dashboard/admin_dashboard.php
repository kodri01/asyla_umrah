<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Paket Umrah</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 40px;">
                                <?= $paket; ?>

                            </div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Jemaah Sudah Bayar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 40px;">
                                <?= $pembayaran; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Jemaah Pertahun
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-size: 40px;">
                                <?= $jemaah; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?php echo $judul ?></h1>
            </div>
            <div class="" style="margin-right: 5rem;">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="fw-bold ">Jemaah</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">


                            <table class="table table-bordered" id="dataTable" cellspacing="1">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Jemaah</th>
                                        <th class="text-center">Tipe Paket</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Tanggal Bayar</th>
                                        <th class="text-center">Telepon</th>
                                        <th class="text-center">Status Pembayaran</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($status as $p) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td class="text-capitalize"><?= $p->nama ?></td>
                                            <td><?= $p->tipe ?></td>
                                            <td>Rp. <?= number_format($p->harga, 0, ',', '.'); ?></td>
                                            <td><?php echo date('d F Y', strtotime($p->tanggal_pesan)); ?></td>
                                            <td><?php echo date('d F Y', strtotime($p->tanggal_bayar)); ?></td>
                                            <td><?= $p->hp_jemaah ?></td>
                                            <td>
                                                <?php echo ($p->status == 0) ? "Belum Lunas" : "Pembayaran Lunas"; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>