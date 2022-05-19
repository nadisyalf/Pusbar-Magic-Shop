<div class="col-md-12">
    <!-- general form elements disabled -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Add Menu</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php
                //notif form kosong
                echo validation_errors('<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-info"></i>', '</h5></div>');

                //notif gagal upload
                if (isset($error_upload)) {
                    echo '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>'.$error_upload.'</h5></div>';
                }
                echo form_open_multipart('menu/add')?>
            <div class="form-group">
                <label>Nama Menu</label>
                    <input name="nama_menu" class="form-control" placeholder="Nama Menu" value="<?= set_value('nama_menu') ?>">
            </div>
            <div class="row">
                <div class="col-sm-4">
                <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            <option value="">--Pilih Kategori--</option>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div> 
                </div>
                <div class="col-sm-4">
                    <!-- Nama Menu -->
                    <div class="form-group">
                        <label>Harga</label>
                        <input name="harga" class="form-control" placeholder="Harga" value="<?= set_value('harga') ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- Nama Menu -->
                    <div class="form-group">
                        <label>Berat</label>
                        <input type="number" name="berat" min="0" class="form-control" placeholder="/gram" value="<?= set_value('berat') ?>">
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="5"><?= set_value('keterangan') ?></textarea>
                </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Gambar Menu</label>
                    <input type="file" name="gambar" class="form-control" placeholder="Gambar" id="preview_gambar" required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <img src="<?= base_url('assets/uploads/art.png')?>" id="gambar_load" width="400px">
                </div>
            </div>
        </div>
            <div class="form-group">
                <button type="submit" class=" btn btn-primary btn-sm">Save</button>
                <a href="<?= base_url('menu') ?>"class=" btn btn-success btn-sm">Kembali</a>
            </div>
            <?php echo form_close()?>
            </div>
        </div>
</div>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function(){
        bacaGambar(this);
    });
</script>