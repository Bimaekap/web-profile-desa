<?php

?>

<body>
    <div id="app">
        <div class="main-wrapper">
            <!-- Bagian Navbar -->
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <!--  ! Dropdown log out -->
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            Halo <b></b> Anda adalah <b></b></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="dropdown-divider"></div> -->
                            <a href="../logout.php" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a>SIMPAMAS</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a>MN</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li>
                            <a href="dashboard.php" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Data</li>
                        <li><a class="nav-link" href="menu-transaksi.php"><i class="fas fa-database"></i> <span>Jumlah Penduduk</span></a></li>

                        <!-- Hanya dapat dilakukan oleh admin -->
                        <li><a class="nav-link" href="menu-register.php"><i class="fas fa-user"></i> <span>Jumlah Pegawai</span></a></li>
                        <!-- Layanan -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Layanan</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-link"><a href="">Pengaduan</a></li>
                                <li class="nav-link"><a href="">Berita</a></li>
                            </ul>
                        </li>
                        <!-- Profil Desa -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Profil Desa</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-link"><a href="profil-desa.php">Setting</a></li>
                            </ul>
                        </li>

                        <!-- Profil Desa -->
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Stuktur Desa</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-link"><a href="struktur-organisasi.php">Struktur Organisasi</a></li>
                                <li class="nav-link"><a href="#">Perangkat Desa</a></li>
                            </ul>
                        </li>

                </aside>
            </div>
            </section>
        </div>

    </div>
    </div>

</body>