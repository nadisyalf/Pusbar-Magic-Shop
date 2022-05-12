<h1>Halaman Utama</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> 
    </ol>
    <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap" alt="First slide">
            </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap" alt="Second slide">
        </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="Third slide">
        </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="https://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap" alt="fourth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
    </a>
</div>



<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row ">

<?php foreach ($menu as $key => $value) { ?>

            <div class=" col-sm-4">
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">
                        <h2 class="lead"><b><?= $value?->nama_menu?></b></h2>
                        <p class="text-muted text-sm"><b> Kategori : </b> <?= $value?->nama_kategori?> </p>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="<?= base_url('assets/uploads/' . $value->gambar) ?>" width="300px" height="250px">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-left">
                                    <i class="fas fa-lg fa-file-invoice-dollar"></i> <span class="badge bg-info"> Rp. <?= number_format($value?->harga, 0) ?> </span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-right">
                                    <a href="<?= base_url('home/detail_menu/' . $value->id_menu) ?>" class="btn btn-sm btn-success">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="fas fa-cart-plus"></i> Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Button Details & Add -->
                </div>
            </div>
                <?php } ?>
        </div>
    </div>
</div>
</div>