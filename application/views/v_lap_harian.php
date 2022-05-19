<div class="col-12">
    <!-- Main content -->
    <div class="invoice p-3 mb-3">
        <!-- title row -->
            <div class="row">
                <div class="col-12">
                    <h3>
                        Daily Report
                        <small class="float-right">Tanggal : <?= $tanggal?>/<?= $bulan?>/<?= $tahun ?></small>
                    </h3>
                </div>
                <!-- /.col -->
            </div>

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Order</th>
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no =1;
                            $grand_total = 0;
                            foreach ($laporan as $key => $value) { 
                                $total_harga= $value->qty * $value->harga;
                                $grand_total = $grand_total + $total_harga;
                                ?>
                                
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td> <?= $value->no_order ?> </td>
                                    <td><?= $value->nama_menu ?></td>
                                    <td> Rp. <?= number_format($value->harga,0) ?></td>
                                    <td><?= $value->qty ?></td>
                                    <td> Rp. <?= number_format( $total_harga,0) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    Grand Total : Rp. <?= number_format( $grand_total,0) ?>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        <!-- accepted payments column -->
    

            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-12">
                    <button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
            <!-- /.invoice -->
    </div><!-- /.col -->
<!-- div footer-->
</div>