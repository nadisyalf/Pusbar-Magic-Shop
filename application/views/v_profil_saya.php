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
<div class="card-footer">
    <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value->id_pelanggan ?>"><i class="fa fa-edit"> Edit Profil</i></button>


 <!-- modal edit -->
 <?php foreach ($pelanggan as $key => $value) { ?> 
    <div class="modal fade" id="edit<?= $value->id_pelanggan ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit Profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">

                <?php
                echo form_open('pelanggan/edit/' . $value->id_pelanggan);
                ?>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" value="<?= $value->nama_pelanggan ?>" class="form-control"  placeholder="Nama Pelanggan" required>
                </div>

                <div class="form-group">
                    <label>Alamat Pelanggan</label>
                    <input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control"  placeholder="Alamat Pelanggan" required>
                </div>

                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" value="<?= $value->no_telp ?>" class="form-control"  placeholder="Nomor Telepon" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?= $value->email ?>" class="form-control"  placeholder="Email" disabled="disabbled" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" value="<?= $value->password ?>" class="form-control"  placeholder="Password" disabled="disabbled" required>
                </div>


                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>

                </div>
                    <?php
                    echo form_close();
                    ?>
                    </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
    </div>
        <!-- /.modal -->
<?php }?>

<!-- End modal edit -->

<!-- Div Footer -->
</div>