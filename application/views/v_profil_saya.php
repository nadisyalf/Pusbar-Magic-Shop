<!--  -->
<div class="card card-solid">
    <div class="card-body pb-0"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">TENTANG SAYA 🪄</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach ($pelanggan as $key => $value) { ?>
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>:</th>
                                <td><?= $value-> nama_pelanggan ?></td>
                            </tr>
                            <tr>
                                <th>Alamat Pelanggan</th>
                                <th>:</th>
                                <td><?= $value-> alamat ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <th>:</th>
                                <td><?= $value-> no_telp ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th>:</th>
                                <td><?= $value-> email ?></td>
                            </tr>
                            <tr>
                                <th>Password</th>
                                <th>:</th>
                                <td><?= $value-> password?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
</div> 
                        </div>
<!-- /.card -->


<!-- Div Footer -->
</div>