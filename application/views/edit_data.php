<div class="panel panel-default" style="border-radius: 0px;">
    <div class="panel-heading">
        <h4 style="padding: 0px;margin:0px;"><strong>Edit Data pesanan</strong></h4>
    </div>
    <div class="panel-body">
        <form action="<?php echo base_url('tambah/update'); ?>" method="post">
        <table class="table table-bordered table-striped" style="font-size: 12px;">
           <thead>
                <tr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $query->pemesan_id; ?>">
                                <label>nama pemesan   :</label>
                                <input type="text" class="form-control" placeholder="" name="nm_pemesan" value="<?php echo $query->nama_pemesan; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>jumlah barang  :</label>
                                <input type="text" class="form-control" placeholder="" name="jml_barang" value="<?php echo $query->jumlah; ?>">
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>tanggal :</label>
                            <input class="form-control" type="date" name="tanggal" value="<?php echo date('Y-m-d'); ?>" readonly>
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