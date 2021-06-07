<div class="container-fluid">
	<div class="alert alert-success">
		<p class="text-center align-middle"> Untuk memproses pesanan anda, silahkan mengupload bukti transfer pada menu Upload Bukti Pembayaran!</p>
                                   <p class="text-center align-middle">  <?php 
                                    $bukti = '<i class="fas fa-fw fa-file-invoice"></i>Upload Bukti Pembayaran '?>

                                    <?php echo anchor('dashboard/bukti_bayar', $bukti)  ?> </p>
                               
	</div>
</div>