<?php

class Model_laptop extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_laptop');
	}
	public function tambah_laptop($data,$table){
		$this->db->insert($table,$data);
	}
	public function tambah_bukti($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_laptop($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id_laptop', $id)
						   ->limit(1)
						   ->get('tb_laptop');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_laptop($id_laptop)
	{
		$result = $this->db->where('id_laptop',$id_laptop)->get('tb_laptop');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function get_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tb_laptop');
		$this->db->like('nama_laptop', $keyword);
		$this->db->or_like('spesifikasi', $keyword);
		$this->db->or_like('merk', $keyword);
		return $this->db->get()->result();

	}
}