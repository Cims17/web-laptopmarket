<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Lanjutan extends CI_Controller{

	public function riwayat_belanja()
	{
		$data['riwayat'] = $this->model_invoice->tampil_datauser();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('riwayat_belanja', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_belanja', $data);
		$this->load->view('templates/footer');

	}

}