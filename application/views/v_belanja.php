<!-- Default box -->
<div class="card card-solid">
    <div class="card-body pb-0">
        <div class="row">
            <div class="col-sm-12">
                    <?php echo form_open('belanja/update'); ?>

                        <table class="table" cellpadding="6" cellspacing="1" style="width:100%" b>

                                    <tr>
                                        <th width="85 px">QTY</th>
                                        <th>Nama Menu</th>
                                        <th style="text-align:right">Harga</th>
                                        <th style="text-align:right">Sub-Total</th>
                                        <th style="text-align:center">Berat(Gr)</th>
                                        <th class="text-center">Action</th>
                                    </tr>

                            <?php $i = 1; ?>

                                <?php
                                $total_berat=0; 
                                foreach ($this->cart->contents() as $items){ 
                                    $menu = $this->m_home ->detail_menu($items['id']); 
                                    $berat= $items['qty'] * $menu->berat;
                                    $total_berat = $total_berat + $berat;
                                    ?>

                                        <tr>
                                            <td>
                                                <?php 
                                                    echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 
                                                    'maxlength' => '3', 
                                                    'min' => '1',
                                                    'size' => '5', 
                                                    'type'=>'number', 
                                                    'class'=>'form-control'
                                                    )); 
                                                ?>
                                            </td>
                                            <td><?php echo $items['name']; ?></td>
                                            <td style="text-align:right"> Rp. <?php echo number_format($items['price'], 0); ?></td>
                                            <td style="text-align:right"> Rp. <?php echo number_format($items['subtotal'], 0); ?></td>
                                            <td style="text-align:center"> <?= $berat ?> Gram </td>
                                            <td class="text-center">
                                                <a href=" <?= base_url('belanja/delete/' . $items['rowid'])?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                            <?php $i++; ?>
                                <?php } ?>

                                        <tr>
                                                <td colspan="2"> </td>
                                                <td class="right"><strong>Total</strong></td>
                                                <td class="right"> <strong> Rp. <?php echo number_format($this->cart->total(), 0); ?></strong></td>
                                                
                                        </tr>
                                        <tr>
                                                <td colspan="2"> </td>
                                                <td class="right"><strong>Total Berat</strong></td>
                                                <td class="right"> <strong> <?= $total_berat ?> Gr </strong></td>
                                                
                                        </tr>

                        </table>
                    <!-- Button Update & Check Out -->
                        <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> <b>  Update Cart </b></button>
                        <a href="<?= base_url('belanja/clear') ?>" class="btn btn-warning btn-flat"><i class="fa fa-recycle"></i> <b> Clear All Cart </b></a>
                        <a href="<?= base_url('belanja/checkout') ?>" class="btn btn-info btn-flat"><i class="fa fa-check"></i> <b> Check Out </b> </a>
                    <!-- Button Update & Check Out -->
                    <?php echo form_close(); ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
