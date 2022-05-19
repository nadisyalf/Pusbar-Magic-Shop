<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Harian</h3>
            <div class="card-tools">
                
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php echo form_open('laporan/lap_harian',) ?>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tanggal</label>
                            <select name="tanggal" class="form-control">
                            <?php
                            $mulai =1;
                            for ($i=$mulai; $i <$mulai + 31; $i++) { 
                                //$sel = $i == date('Y') ? 'selected="selected"' : '';
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }

                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Bulan</label>
                            <select name="bulan" class="form-control">
                            <?php
                            $mulai =1;
                            for ($i=$mulai; $i <$mulai + 12; $i++) { 
                                //$sel = $i == date('Y') ? 'selected="selected"' : '';
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }

                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tahun</label>
                            <select name="tahun" class="form-control">
                            <?php
                            $mulai =date('Y') - 1;
                            for ($i=$mulai; $i <$mulai + 5; $i++) { 
                                //$sel = $i == date('Y') ? 'selected="selected"' : '';
                                echo '<option value="'.$i.'">'.$i.'</option>';
                            }

                            ?>
                            </select>
                        </div>
                    </div>

                <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                        <button type="submit" target="-_blank" class="btn btn-primary btn-block"> <i class="fa fa-print"> Cetak Loporan </i></button>
                    </div>
                </div>
                <?php echo form_close() ?>
                
            </div>
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
</div>

<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Laporan Bulanan</h3>
            <div class="card-tools">
                
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
</div>

<div class="col-md-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Lapuran Tahunan</h3>
            <div class="card-tools">
                
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            
        </div>
            <!-- /.card-body -->
    </div>
        <!-- /.card -->
</div>