<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="<?= base_url()?>" class="navbar-brand">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
            </svg>
            <span class="brand-text font-weight-light"><b> PUSBAR CAKE SHOP</b></span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url()?>" class="nav-link">Home</a>
                </li>
                <?php $kategori = $this->m_home->get_all_data_kategori(); ?>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <?php foreach ($kategori as $key => $value) { ?>
                            <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>" class="dropdown-item"><?= $value->nama_kategori?> </a></li>
                        <?php } ?>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>
                        </ul>
                </li>
            </ul>
        </div>

<!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item">
                <?php if ($this->session->userdata('email') == "") { ?>
                    <a class="nav-link" href="<?= base_url('pelanggan/login')?>"
                        <span class="brand-text font-weight-light">Login/Register</span>
                        <img src="<?= base_url() ?>template/dist/img/user1-128x128.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-1"
                        style="opacity: .8">
                    </a>
                <?php }else{ ?>
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <span class="brand-text font-weight-light"><?= $this->session->userdata('nama_pelanggan') ?></span>
                        <img src="<?= base_url('assets/userpict/' . $this->session->userdata('foto')) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-1"
                        style="opacity: .8">
                    </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <div class="dropdown-divider"></div>
                        <a href="<?= base_url('pelanggan/profil')?>" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Profil Saya
                            
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-shopping-bag mr-2"></i> Pesanan Saya
                           
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="<?= base_url('pelanggan/logout')?>" class="dropdown-item dropdown-footer">Log Out</a>
                </div> 
                <?php } ?>
            </li>      
            <?php 
            $keranjang = $this->cart->contents(); 
            $jml_item = 0;
            foreach ($keranjang as $key => $value) {
                    $jml_item = $jml_item + $value['qty'];
            }
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge badge-danger navbar-badge"><?= $jml_item?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <?php if (empty($keranjang)) { ?>
                        <a href="#" class="dropdown-item">
                            <p> Keranjang Belanja Kosong</p>
                        </a>  
                
                    <?php }else{
                            foreach ($keranjang as $key => $value) { 
                            $menu = $this->m_home ->detail_menu($value['id']);   
                        ?>
                    <!-- Add cart End --> 
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?= base_url('assets/uploads/' . $menu->gambar) ?>" alt="User Avatar" class="img-size-50 mr-3 ">
                                <div class="media-body">
            
                                    <h3 class="dropdown-item-title">
                                        <?= $value['name']?>
                                    </h3>
                                    <p class="text-sm"> <?= $value['qty']?> x Rp. <?= number_format($value['price'],0)?></p>
                                    <p class="text-sm text-muted"><i class="fa fa-calculator "> Rp. <?= $this->cart->format_number($value['subtotal']); ?></i> </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <?php } ?>
                            <a href="#" class="dropdown-item">
                                <div class="media">
                                    <div class="media-body">
                                        <tr>
                                            <td colspan="2"> </td>
                                            <td class="right"><strong> Total : </strong></td>
                                            <td class="right"> Rp. <?= $this->cart->format_number($this->cart->total()); ?></td>
                                        </tr>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('belanja')?>" class="dropdown-item dropdown-footer">View Cart</a>
                            <a href="#" class="dropdown-item dropdown-footer">Check Out</a>
                    <?php }?>
                <!-- Add cart End -->
                        </a>               
                </div>
            </li>
        <!-- Notifications Dropdown Menu -->
        </ul>
    </div>
</nav>
<!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> <?= $title ?> </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">PUSBAR CAKE SHOP</a></li>
                <li class="breadcrumb-item"><a href="#"> <?= $title ?> </a></li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container">