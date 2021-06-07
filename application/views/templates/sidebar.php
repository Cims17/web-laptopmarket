<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?php echo base_url('assets/img/logo.png') ?>" width=65px height="65px" class="img-responsive">
                    <!-- <i class="fas fa-store"></i> -->
                </div>
                <div class="sidebar-brand-text mx-3" >Laptop Market</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Merk
            </div>

           
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('merk/ASUS') ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>ASUS</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('merk/Samsung') ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Samsung</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('merk/HP') ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>HP</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('merk/ACER') ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>ACER</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('merk/Lenovo') ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Lenovo</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Riwayat
            </div>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('lanjutan/riwayat_belanja') ?>">
                    <i class="fas fa-history"></i>
                    <span>Riwayat Belanja</span></a>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

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
                    <form
                        action="<?php echo base_url('dashboard/search') ?>" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-3 small" placeholder="Cari..."
                                aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php 
                                    $bukti = '<i class="fas fa-fw fa-file-invoice"></i>Upload Bukti Pembayaran '?>

                                    <?php echo anchor('dashboard/bukti_bayar', $bukti)  ?>
                                </li>
                            </ul>


                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php 
                                    $keranjangs = 'Keranjang Belanja: '.$this->cart->total_items(). ' items' ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjangs)  ?>
                                </li>
                            </ul>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="na navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) { ?>
                                <li><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                <li class="ml-2"><?php echo anchor('auth/logout','Logout') ?></li>
                            <?php } else { ?>
                                <li><?php echo anchor('auth/login', 'Login'); ?></li>

                            <?php } ?>
                            
                        </ul>
                        </div>



                        

                    </ul>

                </nav>
                <!-- End of Topbar -->