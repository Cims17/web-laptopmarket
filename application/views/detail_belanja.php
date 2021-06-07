<div class="container-fluid">
	<h4>Detail Belanja</h4>

	<table class="table table-bordered table-hover table-striped">
		
		<tr>
			<th>NO</th>
			<th>NAMA PRODUK</th>
			<th>JUMLAH PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>SUB-TOTAL</th>
		</tr>

		<?php  
		$total = 0;
		$no=1;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		 ?>

		 <tr>
		 	<td><?php echo $no++ ?></td> 
		 	<td><?php echo $psn->nama_laptop ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td><?php echo number_format($psn->harga,0,',','.') ?></td>
		 	<td><?php echo number_format($subtotal,0,',','.') ?></td>
		 </tr>

		<?php endforeach ?>

		<tr>
			<td colspan="4" align="right">Total</td>
			<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
		</tr>
 
	</table>

	<a href="<?php echo base_url('lanjutan/riwayat_belanja') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>

</div>