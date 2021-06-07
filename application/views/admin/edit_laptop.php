<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA LAPTOP</h3>

	<?php foreach ($laptop as $lpt)	: ?>

		<form method="post" action="<?php echo base_url().'admin/data_laptop/update' ?>">
			
			<div class="for-group">
				<label>Nama Laptop</label>
				<input type="text" name="nama_laptop" class="form-control" value="<?php echo $lpt->nama_laptop ?>">
			</div>

			<div class="for-group">
				<label>Spesifikasi</label>
				<input type="hidden" name="id_laptop" class="form-control" value="<?php echo $lpt->id_laptop ?>">
				<input type="text" name="spesifikasi" class="form-control" value="<?php echo $lpt->spesifikasi ?>">
			</div>

			<div class="for-group">
				<label>Merk</label>
				<input type="text" name="merk" class="form-control" value="<?php echo $lpt->merk ?>">
			</div>

			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $lpt->harga ?>">
			</div>

			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $lpt->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>
	<?php endforeach; ?>
		
	
</div>