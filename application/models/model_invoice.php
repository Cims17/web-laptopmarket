<?php 

class Model_invoice extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama	= $this->input->post('nama');
		$alamat	= $this->input->post('alamat');
		$tlp 	= $this->input->post('tlp');
		$jasa 	= $this->input->post('jasa');
		$bank 	= $this->input->post('bank');

		$invoice = array (
			'nama' => $nama,
			'alamat' => $alamat,
			'tlp'			=> $tlp,
			'jasa'			=> $jasa,
			'bank'			=> $bank,
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'),date('s'), date('m'), date('d') + 1,date('Y'))),
		);
		$this->db->insert('tb_invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'	=> $id_invoice,
				'id_laptop'	=>  $item['id'],
				'nama_laptop'	=> $item['name'],
				'jumlah'	=> $item['qty'],
				'harga'	=> $item['price'],
			);
			$this->db->insert('tb_pesanan', $data);
		}	

		return TRUE; 
	}

	public function tampil_data()
	{
		$result = $this->db->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function tampil_datauser()
	{
		// $result = $this->db->get('tb_invoice');
		// if($result->num_rows() >= 0){
		// 	return $result->result();
		// } else {
		// 	return false;
		// }
		$user =  $this->session->userdata('username');
		if($user == "admin"){
			$result = $this->db->get('tb_invoice');
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		} else {
			$result = $this->db->get_where('tb_invoice', array('nama' => $user));
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		}
	
	}

	public function ambil_id_invoice($id_invoice)
	{
		$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function tampil_bukti()
	{
		$user =  $this->session->userdata('username');
		if($user == "admin"){
			$result = $this->db->get('tb_pembayaran');
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		} else {
			$result = $this->db->get_where('tb_pembayaran', array('nama' => $user));
			if($result->num_rows() >= 0){
				return $result->result();
			} else {
				return false;
			}
		}
	}

	public function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	
}