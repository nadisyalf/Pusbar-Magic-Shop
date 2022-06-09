    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?=  base_url('admin') ?>" class="brand-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg>
            <span class="brand-text font-weight-light"><center>ADMIN</center></span>
            <span class="brand-text font-weight-light"><center>Pusbar Cake Shop</center></span>
            <small><center><?= $this->session->userdata('nama_user')?></center></small>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
       

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

            <li class="nav-item">
            <a href="<?= base_url('admin')?>" class="nav-link <?php if($this->uri->segment(1) =='admin' and $this->uri->segment(1) == '') {echo "active";
                }?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('kategori')?>" class="nav-link <?php if($this->uri->segment(1) =='kategori') {echo "active";
                }?>">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Kategori</p>
                </a>
            </li>
            
            </li>
            <li class="nav-item">
                <a href="<?= base_url('menu')?>" class="nav-link <?php if($this->uri->segment(1) =='menu') {echo "active";
                }?>">
                    <i class="nav-icon fas fa-cubes"></i>
                    <p>Barang</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('gambarMenu')?>" class="nav-link <?php if($this->uri->segment(1) =='gambarMenu') {echo "active";
                }?>">
                    <i class="nav-icon fas fa-image"></i>
                    <p>Gambar Barang</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('admin/pesanan_masuk')?>" class="nav-link <?php if($this->uri->segment(2) =='pesanan_masuk' and $this->uri->segment(1) == 'admin') {echo "active";
                }?>">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                    <p>Pesanan Masuk</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('laporan')?>" class="nav-link <?php if($this->uri->segment(1) =='laporan') {echo "active";
                }?>">
                    <i class="nav-icon fas fa-file"></i>
                    <p>Laporan</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('admin/setting')?>" class="nav-link <?php if($this->uri->segment(2) =='setting') {echo "active";
                }?>">
                <i class="nav-icon fa fa-asterisk"></i>
                <p>Setting</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=base_url('user') ?>" class="nav-link <?php if($this->uri->segment(1) =='user') {echo "active";
                }?>">
                <i class="nav-icon fas fa-key"></i>
                <p>Admin</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=base_url('pelanggan') ?>" class="nav-link <?php if($this->uri->segment(1) =='pelanggan') {echo "active";
                }?>">
                <i class="nav-icon fas fa-users"></i>
                <p>Pelanggan</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= base_url('auth/logout_user')?>" class="nav-link">
                <i class="nav-icon fas fa-sign"></i>
                <p>Log Out</p>
                </a>
            </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?= $title ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
 