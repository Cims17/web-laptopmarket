<?php
class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
			redirect('auth/login');
		}
	}

	public function tambah_ke_keranjang($id)
	{
		$laptop = $this->model_laptop->find($id);

		$data = array(
	        'id'      => $laptop->id_laptop,
	        'qty'     => 1,
	        'price'   => $laptop->harga,
	        'name'    => $laptop->nama_laptop
	);

	$this->cart->insert($data);
	redirect('welcome');
	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar'); 
		$this->load->view('keranjang');
		$this->load->view('templates/footer'); 
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar'); 
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar'); 
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		} else {
			echo "Maaf, Pesanan Anda Gagal diproses!";
		}	
	}

	public function detail($id_laptop)
	{
		$data['laptop'] = $this->model_laptop->detail_laptop($id_laptop);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar'); 
		$this->load->view('detail_laptop',$data);
		$this->load->view('templates/footer');
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['laptop'] = $this->model_laptop->get_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}

	public function bukti_bayar()
	{
		$data['bayaran'] = $this->model_invoice->tampil_bukti();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('hal_bukti', $data);
		$this->load->view('templates/footer');	
	}

	public function tambah_gb()
	{
		$nama			= $this->input->post('nama');
		$gambar			= $_FILES['gambar']['name'];
		if ($gambar	=''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
 
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload";
			} else {
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array( 
			'nama'	 		=> $nama, 
			'gambar' 		=> $gambar
		);

		$this->model_laptop->tambah_bukti($data, 'tb_pembayaran');
		redirect('dashboard/bukti_bayar');
	}

	public function hapus ($id)
	{
		$where = array('id_gb' => $id);
		$this->model_invoice->hapus($where,'tb_pembayaran');
		redirect('dashboard/bukti_bayar');
	}


}