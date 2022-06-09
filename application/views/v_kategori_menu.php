<h1>Halaman Utama</h1>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item">
                <img class="d-block w-100" src="<?=base_url('assets/slider/3.jPG')?>"  width="500px" height="290px alt="Second slide">
        </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?=base_url('assets/slider/1.jpg')?>"  width="500px" height="290px alt="First slide">
            </div>
        <div class="carousel-item">
                <img class="d-block w-100" src="<?=base_url('assets/slider/1.jfif')?>"  width="500px" height="290px alt="Second slide">
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
                <?php
                echo form_open('belanja/add');
                echo form_hidden('id', $value->id_menu);
                echo form_hidden('qty', 1);
                echo form_hidden('price', $value->harga);
                echo form_hidden('name', $value->nama_menu);
                echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                ?>
                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">
                        <h2 class="lead"><b><?= $value?->nama_menu?></b></h2>
                        <p class="text-muted text-sm"><b> Kategori : </b> <?= $value?->nama_kategori?> </p>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="<?= base_url('assets/uploads/' . $value->gambar) ?>" width="300px" height="300px">
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
                                    <button type="submit" class="btn btn-sm btn-primary swalDefaultSuccess">
                                        <i class="fas fa-cart-plus"></i> Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo form_close();?>
            </div>
                <?php } ?>
        </div>
    </div>
</div>

<!-- SweetAlert2 -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
        Toast.fire({
            icon: 'success',
            title: 'Berhasil Ditambahkan Ke Keranjang !!!'
        })
    });
});
</script>