<!-- Div Footer -->
<div class="row">
    <div class="col-12 col-sm-12">
        <?php
            if ($this->session->flashdata('pesan')) {
                echo ' <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
                echo $this->session->flashdata('pesan');
                echo '</h5></div>';
            }                  
        ?>
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Pesanan Di Proses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Pesanan Di Kirim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Selesai</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    
                    <!-- Pesanan Order -->
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <table class="table">
                            <tr>
                                <th> No Order</th>
                                <th> Tanggal Order</th>
                                <th> Nama Penerima</th>
                                <th> Ekspedisi</th>
                                <th> Total Bayar</th>
                                <th> Action</th>
                            </tr>
                            <?php foreach ($belum_bayar as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><b><?= $value->ekspedisi ?></b><br>  
                                            Paket : <?= $value->paket ?><br>
                                            Ongkir : <?= $value->ongkir ?>
                                    </td>
                                    <td>
                                        Rp. <?= number_format($value->total_bayar, 0) ?><br>
                                        <?php if ($value->status_bayar==0) { ?>
                                            <span class="badge badge-warning"> Belum Bayar</span>
                                            <?php }  else { ?>
                                            <span class="badge badge-info"> Sudah Bayar</span><br>
                                            <span class="badge badge-mute"> Menunggu Verifikasi...</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($value->status_bayar == 0) { ?>
                                            <a href="<?=base_url('pesanan_saya/bayar/' . $value->id_transaksi) ?>" 
                                            class="btn btn-sm btn-flat btn-info"><i class="far fa-credit-card"> Payment </i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>

                    <!-- Pesanan Diproses -->
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <table class="table">
                            <tr>
                                <th> No Order</th>
                                <th> Tanggal Order</th>
                                <th> Nama Penerima</th>
                                <th> Ekspedisi</th>
                                <th> Total Bayar</th>
                            </tr>
                            <?php foreach ($diproses as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><b><?= $value->ekspedisi ?></b><br>  
                                            Paket : <?= $value->paket ?><br>
                                            Ongkir : <?= $value->ongkir ?>
                                    </td>
                                    <td>
                                        Rp. <?= number_format($value->total_bayar, 0) ?><br>
                                            <span class="badge badge-warning"> Terverifikasi</span><br>
                                            <span class="badge badge-primary"> Diproses/Dikemas</span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- Pesanan Dikirim -->
                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                        <table class="table">
                            <tr>
                                <th> No Order</th>
                                <th> Tanggal Order</th>
                                <th> Nama Penerima</th>
                                <th> Ekspedisi</th>
                                <th> Total Bayar</th>
                                <th> No Resi</th>
                                
                            </tr>
                            <?php foreach ($dikirim as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><b><?= $value->ekspedisi ?></b><br>  
                                            Paket : <?= $value->paket ?><br>
                                            Ongkir : <?= $value->ongkir ?>
                                    </td>
                                    <td>
                                        Rp. <?= number_format($value->total_bayar, 0) ?><br>
                                        <span class="badge badge-warning"> Sedang Dalam Perjalanan...</span>
                                    </td>
                                    <td>
                                        
                                        <h4><?= $value->no_resi ?></h4>
                                        <button class="btn btn-xs btn-flat btn-success"
                                        data-toggle="modal" data-target="#terima<?=$value->id_transaksi?>">📍 Diterima </button> 
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                        <table class="table">
                            <tr>
                                <th> No Order</th>
                                <th> Tanggal Order</th>
                                <th> Nama Penerima</th>
                                <th> Ekspedisi</th>
                                <th> Total Bayar</th>
                                <th> No Resi</th>
                                <th> Keterangan</th>
                                
                            </tr>
                            <?php foreach ($diterima as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><b><?= $value->ekspedisi ?></b><br>  
                                            Paket : <?= $value->paket ?><br>
                                            Ongkir : <?= $value->ongkir ?>
                                    </td>
                                    <td>
                                        Rp. <?= number_format($value->total_bayar, 0) ?><br>
                                    </td>
                                    <td>
                                    <span class="badge badge-info"> Pesanan Diterima</span>
                                        <h4><?= $value->no_resi ?></h4>
                                    </td>
                                    <td>
                                        <span class="badge badge-success"> Selesai </span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
</div>

<!-- footer -->
    </div>

<?php foreach ($dikirim as $key => $value) { ?>

    <!-- Modal Check Bukti Pembayaran -->
    <div class="modal fade" id="terima<?= $value->id_transaksi ?>">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> No. Resi : <?= $value->no_resi ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><center><b>Apakah Anda Yakin Pesanan Sudah Diterima...?</b></center></p>
                    <table class="table">
                        <tr>
                            <th> No. Order</th>
                            <th>:</th>
                            <td> <?=$value->no_order?> </td>
                        </tr>
                        <tr>
                            <th> Tanggal Order</th>
                            <th>:</th>
                            <td> <?=$value->tgl_order?> </td>
                        </tr>
                        <tr>
                        <th> Nama Penerima</th>
                            <th>:</th>
                            <td> <?=$value->nama_penerima?> </td>
                        </tr>
                    </table>
                    
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('pesanan_saya/diterima/' . $value->id_transaksi) ?>" class="btn btn-primary">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
<?php } ?>