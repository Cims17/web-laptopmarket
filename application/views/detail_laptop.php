<div class="container-fluid">
	
	<div class="card">
  		<h5 class="card-header">Detail Laptop</h5>
  		<div class="card-body">
  			<?php foreach($laptop as $lpt) : ?>
   			<div class="row">
   				<div class="col-md-4">
   					<img src="<?php echo base_url().'/uploads/'.$lpt->gambar ?>" class="card-img-top">
   				</div>
   				<div class="col-md-8"></div>
   					<table class="table">
   						<tr>
   							<td>Nama Laptop</td>
   							<td><strong><?php echo $lpt->nama_laptop ?></strong></td>
   						</tr>

   						<tr>
   							<td>Spesifikasi</td>
   							<td><strong><?php echo $lpt->spesifikasi ?></strong></td>
   						</tr>

   						<tr>
   							<td>Merk</td>
   							<td><strong><?php echo $lpt->merk ?></strong></td>
   						</tr>	

   						<tr>
   							<td>Stok</td>
   							<td><strong><?php echo $lpt->stok ?></strong></td>
   						</tr>

   						<tr>
   							<td>Harga</td>
   							<td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($lpt->harga, 0,',','.' )?></div></strong></td>
   						</tr>
   					</table>

   					<?php echo anchor('dashboard/tambah_ke_keranjang/'.$lpt->id_laptop, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>

   					<?php echo anchor('welcome', '<div class="btn btn-sm btn-danger ml-3">Kembali</div>') ?>	
   			</div>
   			<?php endforeach; ?>
   		
  </div>
</div>
</div>