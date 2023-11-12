<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" style="width: 50rem;"
            id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-text mx-2">PT. Asyla Fatimah Wisata</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <?php if (in_groups('admin')) : ?>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if ($title == 'Admin Dashboard') echo 'active'; ?>">
                <a class="nav-link" href="/">
                    <i class=""></i>
                    <span>DASHBOARD</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if ($title == 'Admin Data Jemaah') echo 'active'; ?>">
                <a class="nav-link collapsed" href="/admin/data_jemaah" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=""></i>
                    <span>DATA JEMAAH UMRAH</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

                </div>
            </li>
            <li class="nav-item <?php if ($title == 'Admin Paket Umrah') echo 'active'; ?>">
                <a class="nav-link collapsed" href="/admin/paket_umrah" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=""></i>
                    <span>DATA PAKET UMRAH</span>
                </a>
            </li>

            <li class="nav-item <?php if ($title == 'Admin Pembayaran') echo 'active'; ?>">
                <a class="nav-link collapsed " href="/admin/pembayaran" data-toggle="collapsetwo" aria-expanded="true"
                    aria-controls="collapsetwo">
                    <i class=""></i>
                    <span>PEMBAYARAN</span>
                </a>
            </li>

            <li class="nav-item <?php if ($title == 'Admin Galeri') echo 'active'; ?>">
                <a class="nav-link collapsed" href="/admin/galeri" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=""></i>
                    <span>GALERI</span>
                </a>
            </li>
            <li class="nav-item <?php if ($title == 'Admin Testimoni') echo 'active'; ?>">
                <a class="nav-link collapsed" href="/admin/testimoni" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=""></i>
                    <span>TESTIMONI</span>
                </a>
            </li>
            <li
                class="nav-item <?php if ($title == 'Admin Laporan Pembayaran' || $title == 'Admin Laporan Bulanan' || $title == 'Admin Laporan Tahunan') echo 'active'; ?>">
                <a class="nav-link collapsed " href="" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>LAPORAN</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/admin/laporan_pembayaran">Pembayaran
                            Jemaah</a>
                        <a class="collapse-item" href="/admin/laporan_bulanan">Pendaftaran
                            Perbulan</a>
                        <a class="collapse-item" href="/admin/laporan_tahunan">Pendaftaran
                            Pertahun</a>
                    </div>
                </div>

            </li>
            <?php else : ?>
            <li
                class="nav-item <?php if ($title == 'Admin Data Jemaah' || $title == 'Direktur Data Jemaah') echo 'active'; ?>">
                <a class="nav-link collapsed" href="/admin/data_jemaah" data-toggle="" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class=""></i>
                    <span>DATA JEMAAH UMRAH</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

                </div>
            </li>
            <li
                class="nav-item <?php if ($title == 'Admin Laporan Pembayaran' || $title == 'Admin Laporan Bulanan' || $title == 'Admin Laporan Tahunan' || $title == 'Direktur Laporan Pembayaran' || $title == 'Direktur Laporan Bulanan' || $title == 'Direktur Laporan Tahunan') echo 'active'; ?>">
                <a class="nav-link collapsed " href="" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>LAPORAN</span>
                </a>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/admin/laporan_pembayaran">Pembayaran
                            Jemaah</a>
                        <a class="collapse-item" href="/admin/laporan_bulanan">Pendaftaran
                            Perbulan</a>
                        <a class="collapse-item" href="/admin/laporan_tahunan">Pendaftaran
                            Pertahun</a>
                    </div>
                </div>

            </li>
            <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded"></div>
            </div>
            </li> -->

            <?php endif; ?>
            <li class="nav-item ">
                <a class="nav-link" href="/logout">
                    <i class=""></i>
                    <span>LOGOUT</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar)
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h4 class="font-weight-bold text-capitalize">selamat datang <?= user()->username ?></h4>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    </ul>

                </nav>
                <!-- End of Topbar -->