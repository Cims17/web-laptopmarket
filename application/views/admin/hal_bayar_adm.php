<div class="container-fluid">
	<h4>Bukti Pembayaran Laptop</h4>

	<table class="table table-bordered  table-striped">
		<tr>
			<th>Id User</th>
			<th>Nama User</th>
			<th>Gambar</th> 
			<th>Aksi</th>
		</tr>

		<?php foreach ($bayar as $byr): ?>
		<tr>
			<td><?php echo $byr->id_gb ?></td>
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
	        	<?php echo anchor('admin/dashboard_admin/hapus/' .$byr->id_gb, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
       		</td>


	<?php endforeach; ?>	

	</table>
</div>