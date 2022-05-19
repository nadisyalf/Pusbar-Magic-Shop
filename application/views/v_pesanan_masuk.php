
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
                            <?php foreach ($pesanan_masuk as $key => $value) { ?>
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
                                        <?php if ($value->status_bayar== 0) { ?>
                                            <span class="badge badge-warning"> Belum Bayar</span>
                                            <?php }  else { ?>
                                            <span class="badge badge-info"> Sudah Bayar</span><br>
                                            <span class="badge badge-mute"> Menunggu Verifikasi...</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php if ($value->status_bayar == 1) { ?>
                                            <button class="btn btn-sm btn-flat btn-warning fas fa-save" 
                                            data-toggle="modal" data-target="#cek<?=$value->id_transaksi ?>"> Bukti Pembayaran</button>
                                            <a href="<?=base_url('admin/proses/' . $value->id_transaksi) ?>" 
                                            class="btn btn-sm btn-flat btn-info"><i class="fas fa-rocket"> Process </i></a>
                                        <?php } ?>
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    <table class="table">
                            <tr>
                                <th> No Order</th>
                                <th> Tanggal Order</th>
                                <th> Nama Penerima</th>
                                <th> Ekspedisi</th>
                                <th> Total Bayar</th>
                                <th> Action</th>
                            </tr>
                            <?php foreach ($pesanan_proses as $key => $value) { ?>
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
                                        
                                            <span class="badge badge-primary"> Diproses/Dikemas</span>
                                    </td>
                                    <td>
                                        <?php if ($value->status_bayar == 1) { ?>

                                            <button class="btn btn-sm btn-flat btn-info fa fa-paper-plane" 
                                            data-toggle="modal" data-target="#kirim<?=$value->id_transaksi?>"> Kirim </button>

                                        <?php } ?>
                                        
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
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
                            <?php foreach ($pesanan_dikirim as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><b><?= $value->ekspedisi ?></b><br>  
                                            Paket : <?= $value->paket ?><br>
                                            Ongkir : <?= $value->ongkir ?>
                                    </td>
                                    <td>
                                        Rp. <?= number_format($value->total_bayar, 0) ?>
                                    </td>
                                    <td>
                                        <span class="badge badge-warning fa fa-car"> Sedang Dikirim </span> <br>
                                        <h4> <?= $value->no_resi ?> </h4>
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
                            </tr>
                            <?php foreach ($pesanan_diterima as $key => $value) { ?>
                                <tr>
                                    <td><?= $value->no_order ?></td>
                                    <td><?= $value->tgl_order ?></td>
                                    <td><?= $value->nama_penerima ?></td>
                                    <td><b><?= $value->ekspedisi ?></b><br>  
                                            Paket : <?= $value->paket ?><br>
                                            Ongkir : <?= $value->ongkir ?>
                                    </td>
                                    <td>
                                        Rp. <?= number_format($value->total_bayar, 0) ?>
                                    </td>
                                    <td>
                                        <h4> <?= $value->no_resi ?> </h4>
                                        <span class="badge badge-success fa fa-check"> Pesanan Diterima </span> <br>
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


<!-- footer -->
    </div>

<?php foreach ($pesanan_masuk as $key => $value) { ?>
    <!-- Modal Check Bukti Pembayaran -->
    <div class="modal fade" id="cek<?= $value->id_transaksi ?>">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> No. Order : <?= $value->no_order ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th> Nama Pemilik</th>
                            <th>:</th>
                            <td> <?=$value->atas_nama?> </td>
                        </tr>
                        <tr>
                        <th> Nama Bank</th>
                            <th>:</th>
                            <td> <?=$value->nama_bank?> </td>
                        </tr>
                        <tr>
                        <th> No. Rekening</th>
                            <th>:</th>
                            <td> <?=$value->no_rek?> </td>
                        </tr>
                        <tr>
                        <th> Total Bayar</th>
                            <th>:</th>
                            <td> Rp. <?= number_format($value->total_bayar, 0) ?> </td>
                        </tr>
                        <tr>
                        <th> Bukti Bayar</th>
                            <th>:</th>
                            <td><img class="img-fluid pad" src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar)?>" alt="photo" width="200px" height="200px"> </td>
                        </tr>
                    </table>
                    
                </div>
                <div class="modal-footer justify-content-between">
                    
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
<?php } ?>

<?php foreach ($pesanan_proses as $key => $value) { ?>
    <!-- Modal Check Nomor Resi -->
    <div class="modal fade" id="kirim<?=$value->id_transaksi?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">No. Order : <?= $value->no_order ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('admin/kirim/' . $value->id_transaksi) ?>
                    <table class="table">
                        <tr>
                            <th> Ekspedisi </th>
                            <th>:</th>
                            <td> <?=$value->ekspedisi?> </td>
                        </tr>
                        <tr>
                            <th> Paket </th>
                            <th>:</th>
                            <td> <?=$value->paket?> </td>
                        </tr>
                        <tr>
                            <th> Ongkir </th>
                            <th>:</th>
                            <td> Rp. <?=number_format($value->ongkir, 0) ?> </td>
                        </tr>
                        <tr>
                            <th> No. Resi </th>
                            <th>:</th>
                            <td> <input name="no_resi" class="form-control" placeholder="Nomor Resi" required> </td>
                        </tr>
                    </table>
                </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    <?php echo form_close() ?>
            </div>
        <!-- /.modal-content -->
        </div>
    <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
<?php } ?>


