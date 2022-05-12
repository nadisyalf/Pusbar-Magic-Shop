<div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Data Gambar</h3>

                    <div class="card-tools">
                    </div>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php
                    if ($this->session->flashdata('pesan')) {
                        echo ' <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i>';
                        echo $this->session->flashdata('pesan');
                        echo '</h5></div>';
                    }
                    
                    ?>
                    <table class="table table-bordered" id="example1">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Menu</th>
                                <th>Cover</th>
                                <th>Jumlah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                            foreach ($gambarmenu as $key => $value) { ?>
                            <tr>
                                <td class="text-center"><?= $no++; ?></td>
                                <td class="text-center"><?= $value->nama_menu ?></td>
                                <td class="text-center"><img src="<?= base_url('assets/uploads/' . $value->gambar)?>" width="50px" alt=""></td>
                                <td class="text-center"><span class="badge bg-primary"><?= $value->total_gambar ?></span></td>
                                <td class="text-center">
                                <a href="<?= base_url('gambarmenu/add/' .$value->id_menu) ?>" class="btn btn-success btn-sm" ><i class="fa fa-plus"></i> Add Gambar </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
