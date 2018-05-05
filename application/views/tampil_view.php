<div class="panel panel-default">
	<div class="Panel-heading">
		<div class="container">
			<h3>Data Pemesan</h3>
		</div>
	</div>
	<div class="panel-body">
	<a href="<?php echo base_url('transaksi/tambah'); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Data</a><br><br>
		<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<th style="text-align: center">No</th>
			<th style="text-align: center">nama pemesan</th>
			<th style="text-align: center">jumlah pesanan</th>
			<th style="text-align: center">tanggal</th>
			<th style="text-align: center">Aksi</th>
		</thead>
		<tbody>
		<?php 
		$rows=$this->db->get('mugtabel');
		if($rows->num_rows()>0){
			$no=1;
			foreach ($rows->result() as $row) {
				?>
				<tr <p style="text-align: center">
					<td><?=$no?></td>
					<td><?=$row->nama_pemesan?></td>
					<td><?=$row->jumlah?></td>
					<td><?=$row->tanggal?></td>
					<td>
						<a href="<?php echo base_url('tambah/edit/'.$row->pemesan_id); ?>" class="btn btn-warning">Edit</a>
						<a href="<?php echo base_url('tambah/hapus/'.$row->pemesan_id); ?>" class="btn btn-danger">Hapus</a>
					</td>
				</tr>

				<?php
				$no++;
			}
		}
		
		?>
		</tbody>
	</table>
</div>		
	</div>
</div>