<?php 

class Data_laptop extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
			redirect('auth/login');
		}
	}
	
	public function index()
	{
		$data['laptop'] = $this->model_laptop->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_laptop', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_laptop	= $this->input->post('nama_laptop');
		$spesifikasi	= $this->input->post('spesifikasi');
		$merk	= $this->input->post('merk');
		$harga	= $this->input->post('harga');
		$stok	= $this->input->post('stok');
		$gambar	= $_FILES['gambar']['name'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal terUpload!";
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_laptop'	=> $nama_laptop,
			'spesifikasi'	=> $spesifikasi,
			'merk'	=> $merk,
			'harga'	=> $harga,
			'stok'	=> $stok,
			'gambar'	=> $gambar
		);

		$this->model_laptop->tambah_laptop($data, 'tb_laptop');
		redirect('admin/data_laptop/index');
	}

	public function edit($id)
	{
		$where = array('id_laptop' =>$id);
		$data['laptop'] = $this->model_laptop->edit_laptop($where, 'tb_laptop')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_laptop', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id =$this->input->post('id_laptop');
		$nama_laptop =$this->input->post('nama_laptop');
		$spesifikasi =$this->input->post('spesifikasi');
		$merk =$this->input->post('merk');
		$harga =$this->input->post('harga');
		$stok =$this->input->post('stok');

		$data = array(
			'nama_laptop'	=> $nama_laptop,
			'spesifikasi'	=> $spesifikasi,
			'merk'	=> $merk,
			'harga'	=> $harga,
			'stok'	=> $stok
		);

		$where = array('id_laptop' =>$id);

		$this->model_laptop->update_data($where,$data, 'tb_laptop');
		redirect('admin/data_laptop/index');
	}

	public function hapus($id)
	{
		$where = array('id_laptop' => $id);
		$this->model_laptop->hapus_data($where, 'tb_laptop');
		 redirect('admin/data_laptop/index');
	}
}