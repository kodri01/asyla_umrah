<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #C7E8CA;">
    <img src="/assets/img/logo.png" width="100px" height="80px" />
    <h1><a class="navbar-brand" href="<?php echo base_url('/') ?>" style="font-family: 'Arial Narrow Bold'type= button;">&nbsp;&nbsp;
            PT.ASYLA FATIMAH WISATA</a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="margin-right: 5rem;">
        <ul class="navbar-nav">

            <?php if (in_groups('user')) : ?>

                <li class="nav-item w-50 ">
                    <a class="nav-link <?php if ($title == 'Beranda Jemaah') echo 'active'; ?>" href="<?php echo base_url('/') ?>" style="font-size: 18px;">BERANDA
                    </a>
                </li>
                <li class="nav-item w-50 ">
                    <a class="nav-link <?php if ($title == 'Profile Jemaah' || $title == 'Tambah Testimoni') echo 'active'; ?>" href="<?php echo base_url('/asyla/profile_jemaah') ?>" style="font-size: 18px;">PROFILE</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if ($title == 'Pembayaran') echo 'active'; ?>" href="<?php echo base_url('/asyla/pembayaran') ?>" style="font-size: 18px;">PEMBAYARAN</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link <?php if ($title == 'Paket') echo 'active';
                                        if ($title == 'Form Daftar Jemaah') echo 'active'; ?>" href="<?php echo base_url('/asyla/paket') ?>" style="font-size: 18px;">PAKET</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout" style="font-size: 18px;">LOGOUT</a>
                </li>
            <?php else : ?>
                <li class="nav-item ">
                    <a class="nav-link <?php if ($title == 'Beranda') echo 'active'; ?>" href="<?php echo base_url('/') ?>" style="font-size: 18px;">BERANDA</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if ($title == 'Profil') echo 'active'; ?>" href="<?php echo base_url('/asyla/profil') ?>" style="font-size: 18px;">PROFIL</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if ($title == 'Kontak') echo 'active'; ?>" href="<?php echo base_url('/asyla/kontak') ?>" style="font-size: 18px;">KONTAK</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link <?php if ($title == 'Galeri') echo 'active'; ?>" href="<?php echo base_url('/asyla/galeri') ?>" style="font-size: 18px;">GALERI</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link <?php if ($title == 'Testimoni') echo 'active'; ?>" href="<?php echo base_url('/asyla/testimoni') ?>" style="font-size: 18px;">TESTIMONI</a>
                </li>
                <li class="nav-item  ">
                    <a class="nav-link <?php if ($title == 'Paket') echo 'active';
                                        if ($title == 'Form Daftar Jemaah') echo 'active'; ?>" href="<?php echo base_url('/asyla/paket') ?>" style="font-size: 18px;">PAKET</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login" style="font-size: 18px;">LOGIN</a>
                </li>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>