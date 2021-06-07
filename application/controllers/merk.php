<?php 

class Merk extends CI_Controller{
	public function ASUS()
	{
		$data['ASUS'] = $this->model_merk->data_ASUS()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ASUS', $data);
		$this->load->view('templates/footer');
	}

	public function Samsung()
	{
		$data['Samsung'] = $this->model_merk->data_Samsung()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Samsung', $data);
		$this->load->view('templates/footer');
	}

	public function HP()
	{
		$data['HP'] = $this->model_merk->data_HP()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('HP', $data);
		$this->load->view('templates/footer');
	}

	public function ACER()
	{
		$data['ACER'] = $this->model_merk->data_ACER()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('ACER', $data);
		$this->load->view('templates/footer');
	}

	public function Lenovo()
	{
		$data['Lenovo'] = $this->model_merk->data_Lenovo()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('Lenovo', $data);
		$this->load->view('templates/footer');
	}
}