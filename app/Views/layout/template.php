<!DOCTYPE html>
<base href="<?= base_url(); ?>">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style-css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->


    <title>
        <?= $title; ?>
    </title>
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content'); ?>


    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <img src="assets/img/logo.png">
                    <p class="">PT. Asyla Fatimah Wisata Perusahaan Jasa Travel Paket Umrah Yang Aman, Nyaman,
                        Dan Menyenangkan</p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();"><i class=''></i><b>Useful Links</b></a></li>
                        <li><a href="<?php echo base_url('/') ?>"><i class='bx bx-chevron-right'></i>Beranda</a></li>
                        <li><a href="<?php echo base_url('/asyla/profil') ?>"><i
                                    class='bx bx-chevron-right'></i>Profil</a></li>
                        <li><a href="<?php echo base_url('/asyla/kontak') ?>"><i
                                    class='bx bx-chevron-right'></i>Kontak</a></li>
                        <li><a href="<?php echo base_url('/asyla/galeri') ?>"><i
                                    class='bx bx-chevron-right'></i>Galeri</a></li>
                        <li><a href="<?php echo base_url('/asyla/testimoni') ?>"><i
                                    class='bx bx-chevron-right'></i>Testimoni</a></li>
                        <li><a href="<?php echo base_url('/asyla/daftar') ?>"><i
                                    class='bx bx-chevron-right'></i>Paket</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <p class=""><b>Kerjasama Bank</b></p>
                    <img src="assets/img/bsi.png" style="width: 200px; height: 200px; margin-top:-3rem">
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-black">
                    <p class="h5">2023 All Rights Reserved by PT ASYLA FATIMAH WISATA.</p>
                </div>
                </hr>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>


</body>

</html>