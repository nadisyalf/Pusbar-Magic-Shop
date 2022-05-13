<!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h4>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                    </svg>
                    </i> Pusbar Cake Shop
                    <small class="float-right"> Tanggal : <?= date('d-m-y') ?></small>
                </h4>
            </div>
                <!-- /.col -->
        </div>
        <!-- info row -->
        
        <!-- /.row -->
            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Qty</th>
                                <th  width="150px" style="text-align:center">Harga </th>
                                <th style="text-align:left">Nama Menu</th>
                                <th style="text-align:center">Total Harga</th>
                                <th style="text-align:center">Berat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                $total_berat=0; 
                                    foreach ($this->cart->contents() as $items) { 
                                        $menu = $this->m_home ->detail_menu($items['id']); 
                                        $berat= $items['qty'] * $menu->berat;

                                        $total_berat = $total_berat + $berat;
                                    ?>
                                <tr>
                                    <td><?php echo $items['qty']; ?></td>
                                    <td style="text-align:center"> Rp. <?php echo number_format($items['price'], 0); ?></td>
                                    <td><?php echo $items['name']; ?></td>
                                    <td style="text-align:center"> Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
                                    <td style="text-align:center"> <?= $berat ?> Gram </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <?php

            echo form_open('belanja/proses_checkout');
            //random string bersifat unique
            $no_order = date('ymd').strtoupper(random_string('alnum',8));
            //echo $no_order;
            
            ?>
            <div class="row">
                <!-- accepted payments column -->
                <div class="col-sm-8 invoice-col">
                    Tujuan
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Nama Penerima</label>
                                <input  name="nama_penerima" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input  name="no_tlp" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Alamat Penerima</label>
                                <input " name="alamat" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Provinsi</label>
                                <select name="provinsi" class="form-control">

                                </select>
                            </div> 
                        </div>
                        <div class="col-sm-4">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Kota/Kabupaten</label>
                                <select name="kota" class="form-control">

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input  name="kode_pos" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Ekspedisi</label>
                                <select name="ekspedisi" class="form-control">

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- Nama Menu -->
                            <div class="form-group">
                                <label>Paket</label>
                                <select name="paket" class="form-control">

                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Grand Total : </th>
                                <td><label>Rp. <?php echo number_format($this->cart->total(), 0); ?></label></td>
                            </tr>
                            <tr>
                                <th>Berat : </th>
                                <td><label><?= $total_berat ?> Gram </label></td>
                            </tr>
                            <tr>
                                <th>Ongkir : </th>
                                <td> <label id="ongkir"></label></td>
                            </tr>
                            <tr>
                                <th>Total Bayar : </th>
                                <td><label id="totalbayar"></label></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Simpan Transaksi -->
            <input name="no_order" value="<?= $no_order ?>">
            <input name="estimasi">
            <input name="ongkir" >
            <input name="no_order" value="<?= $total_berat ?>"><br>
            <input name="grand_total" value="<?= $this->cart->total() ?>">
            <input name="total_bayar">

            <!-- Simpan Transaksi -->
            <div class="row no-print">
                <div class="col-12">

                    <button type="submit" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Check Out Process
                    </button>
                    <a href ="<?=base_url('belanja')?>" type="button" class="btn btn-warning float-right" style="margin-right: 5px;">
                        <i class="fas fa-shopping-cart "></i> Back To Shopping Cart
                                    </a>
                </div>
            </div>
            <?php echo form_close() ?>
            
        </div>
    </div>
<!-- /.invoice -->


<!-- java Script -->
<script>
    $(document).ready(function(){
        //masukan data select provinsi
        $.ajax({
            type: "POST",
            url: "<?= base_url('rajaongkir/provinsi') ?>",
            success: function(hasil_provinsi){
                //console.log(hasil_provinsi);
                $("select[name=provinsi]").html(hasil_provinsi);
            }
        });

        //masukan data select kota
        $("select[name=provinsi]").on("change", function(){
            var id_provinsi_terpilih =$("option:selected",this).attr("id_provinsi");
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/kota') ?>",
                data: 'id_provinsi=' + id_provinsi_terpilih,
                success: function(hasil_kota){
                    $("select[name=kota]").html(hasil_kota);
                }
            });
        });

        $("select[name=kota]").on("change", function(){
            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/ekspedisi') ?>",
                success: function(hasil_ekspedisi){
                    $("select[name=ekspedisi]").html(hasil_ekspedisi);
                }
            });
        });

        $("select[name=ekspedisi]").on("change", function(){

            //mendapatkan ekspedisi terpilih
            var ekspedisi_terpilih = $("select[name=ekspedisi]").val()

            //mendapatkan id kota tujuan terpilih
            var id_kota_tujuan_terpilih = $("option:selected","select[name=kota]").attr('id_kota')

            //mendapatkan data ongkos kirim
            var ongkir_berat = <?= $total_berat ?>;

            //alert untuk memanggil variabel
            //alert(ongkir_berat);

            // script ekspedisi

            $.ajax({
                type: "POST",
                url: "<?= base_url('rajaongkir/paket') ?>",
                data :'ekspedisi=' + ekspedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + ongkir_berat,
                success: function(hasil_paket){
                    $("select[name=paket]").html(hasil_paket);
                }
            });
        });

        //
        $("select[name=paket]").on("change", function(){
            //menampilkan ongkir
            var dataongkir = $("option:selected", this).attr('ongkir');
                var reverse = dataongkir.toString().split('').reverse().join(''),
                    dataongkir = reverse.match(/\d{1,3}/g);
                    dataongkir = dataongkir.join(',').split('').reverse().join('');
                $("#ongkir").html("Rp. " + dataongkir)
            //alert(dataongkir)
            //menghitung total bayar
            //var ongkir = $("option:selected", this).attr('ongkir');
            var totalbayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
                var reverse2 = totalbayar.toString().split('').reverse().join(''),
                    totalbayar = reverse2.match(/\d{1,3}/g);
                    totalbayar = totalbayar.join(',').split('').reverse().join('');
            $("#totalbayar").html("Rp. " + totalbayar)

            //estimasi & ongkir input
            var estimasi = $("option:selected", this).attr('estimasi');
            
        });  
    });
</script>