<!--  --> 
<div class="row">
    <div class="col-sm-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">PUSBAR MAGIC SHOP 🪄</h3>
            </div>
            <div class="card-body">
                <p class="text-bold text-center" > Jumlah Yang Dibayarkan </p>
                <h3 class= "text-bold text-center text-danger"> | Rp. <?= number_format($pesanan->total_bayar, 0) ?> ,- | </h3>
                <br>
                <p class= "text-info">Pembayaran Dilanjutkan Dengan Transfer Ke Rekening Dibawah ini : </p>
                <table class="table">
                    <tr>
                        <th>Nama Bank</th>
                        <th>Nomor Rekening</th>
                        <th>Nama Pemilik</th>
                    </tr>
                    <?php foreach ($rekening as $key => $value) { ?>
                        <tr>
                            <td>💳<?= $value-> nama_bank ?></td>
                            <td><?= $value-> no_rek ?></td>
                            <td><?= $value-> atas_nama ?> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> 💸 Upload Bukti Pembayaran</h3>
            </div>
            <!-- form start -->
            <?php 
                echo form_open_multipart('pesanan_saya/bayar/' . $pesanan->id_transaksi);
            ?>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Pembayar</label>
                        <input name="atas_nama" class="form-control"  placeholder="Nama Pembayar" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input name="nama_bank" class="form-control"  placeholder="Nama Bank" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input name="no_rek" class="form-control"  placeholder="Nomor Rekning" required>
                    </div>
                    <div class="form-group">
                        <label ">Bukti Pembayaran</label>
                        <input type="file" name="bukti_bayar" class="form-control" required>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('pesanan_saya') ?>" class="btn btn-warning">Back</a>
                </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div> 
<!-- /.card -->


<!-- Div Footer -->
</div>