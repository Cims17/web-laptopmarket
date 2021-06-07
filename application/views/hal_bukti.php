<div class="container-fluid">
	<h4>Upload Bukti Pembayaran Laptop</h4>

	<button class="btn btn-primary mb-3"data-toggle="modal" data-target="#bayar"><i class="fas fa-plus fa-sm"></i> Upload Bukti</button>

	<table class="table table-bordered table-hover table-striped">
		<tr>
      <th>NO</th> 
			<th>Nama User</th>
			<th>Gambar</th>
			<th>Aksi</th>
		</tr>

		<?php 
    $no=1;
    foreach ($bayaran as $byr): ?> 
		<tr>
      <td><?php echo $no++ ?></td>
			<td><?php echo $byr->nama ?></td>
      <td>
        <img src="<?php echo base_url().'/uploads/'.$byr->gambar ?>" style="width: 100px; height:auto" class="product-image" alt="Product Image"
        onclick="document.getElementById('<?php echo base_url().'/uploads/'.$byr->gambar ?>').style.display='block'">
        <div id="<?php echo base_url().'/uploads/'.$byr->gambar ?>" class="w3-modal" onclick="this.style.display='none'">
            <div class="w3-modal-content w3-animate-zoom">
              <img src="<?php echo base_url().'/uploads/'.$byr->gambar ?>" style="width: 450px; height:auto">
            </div>
        </div>
      </td>
	    <td>
        <?php echo anchor('dashboard/hapus/' .$byr->id_gb, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
      </td>


	<?php endforeach; ?>	

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="bayar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Upload Bukti Pembayaran</h5>
   
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'dashboard/tambah_gb'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>MASUKKAN NAMA USER(*Harus sesuai User akun anda)</label>
            <input type="text" name="nama" class="form-control">
            
          </div>

          <div class="form-group">
            <label>BUKTI PEMBAYARAN</label><br>
            <input type="file" name="gambar" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('dashboard/bukti_bayar',
          '<div class="btn  btn-success">Close</div>') ?>
      </div>

      </form>

    </div>
  </div>
</div>