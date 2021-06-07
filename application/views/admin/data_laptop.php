<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_laptop"><i class="fas fa-plus fa-sm"></i>Tambah Laptop</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA LAPTOP</th>
			<th>SPESIFIKASI</th>
			<th>MERK</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php
		$no=1;
		 foreach ($laptop as $lpt) : ?>

		 <tr>
		 	<td><?php echo $no++ ?></td>
		 	<td><?php echo $lpt->nama_laptop ?></td>
		 	<td><?php echo $lpt->spesifikasi ?></td>
		 	<td><?php echo $lpt->merk ?></td>
		 	<td><?php echo $lpt->harga ?></td>
		 	<td><?php echo $lpt->stok ?></td>
		 	<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
		 	<td><?php echo anchor('admin/data_laptop/edit/' .$lpt->id_laptop, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
		 	<td><?php echo anchor('admin/data_laptop/hapus/' .$lpt->id_laptop, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		 </tr>


		 <?php endforeach ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_laptop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="fas fa-times" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_laptop/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Laptop</label>
        		<input type="text" name="nama_laptop" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Spesifikasi</label>
        		<input type="text" name="spesifikasi" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Merk</label>
            <select class="form-control" name="merk">
              <option>ASUS</option>
              <option>Samsung</option>
              <option>HP</option>
              <option>ACER</option>
              <option>Lenovo</option>
            </select>
        	</div>

        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>

        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
      
    </div>
  </div>
</div>