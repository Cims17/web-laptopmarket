<div class="container-fluid">
	<h4>Riwayat Belanja</h4>

	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>NO</th>
			<th>Nama Pemesan</th>
			<th>Alamat Pengiriman</th>
			<th>No. Telp</th>
			<th>Jasa Kirim</th>
			<th>Tanggal Pemesanan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach ($riwayat as $inv): ?>
		<tr>
			<td><?php echo $no++ ?></td> 
			<td><?php echo $inv->nama ?></td>
			<td><?php echo $inv->alamat ?></td>
			<td><?php echo $inv->tlp ?></td>
			<td><?php echo $inv->jasa ?></td>
			<td><?php echo $inv->tgl_pesan ?></td>
			<td><?php echo $inv->batas_bayar ?></td>
			<td><?php echo anchor('lanjutan/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
		</tr>

	<?php endforeach; ?>	

	</table>
</div>