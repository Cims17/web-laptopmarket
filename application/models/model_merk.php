<?php

class Model_merk extends CI_Model{
	public function data_ASUS(){
		return $this->db->get_where("tb_laptop",array('merk' => 'ASUS'));
	}

	public function data_Samsung(){
		return $this->db->get_where("tb_laptop",array('merk' => 'Samsung'));
	}

	public function data_HP(){
		return $this->db->get_where("tb_laptop",array('merk' => 'HP'));
	}

	public function data_ACER(){
		return $this->db->get_where("tb_laptop",array('merk' => 'ACER'));
	}

	public function data_Lenovo(){
		return $this->db->get_where("tb_laptop",array('merk' => 'Lenovo'));
	}

	
}