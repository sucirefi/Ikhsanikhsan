<div class="panel panel-default" style="border-radius: 0px;">
    <div class="panel-heading">
        <h4 style="padding: 0px;margin:0px;"><strong>tambah pesanan</strong></h4>
    </div>
    <div class="panel-body">
        <!-- <a href="<?php echo base_url('transaksi/tambah');?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah pesanan</a> --> 
        <br>
        <br>
       <form action="<?php echo base_url('Tambah/proses'); ?>" method="post">
        <table class="table table-bordered table-striped" style="font-size: 12px;">
           <thead>
                <tr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>nama pemesan   :</label>
                                <input type="text" class="form-control" placeholder="" value="" name="nm_pemesan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>jumlah barang  :</label>
                                <input type="text" class="form-control" placeholder="" value="" name="jml_barang">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal  :</label>
                                <input type="date" class="form-control" readonly="" value="<?=date('Y-m-d')?>" name="tanggal">
                            </div>
                        </div>
                    </div>
    </div>
                    <input type="submit" name="submit" class="btn btn-info">
            </thead>
        </table>
        </form>
    </div>
</div>