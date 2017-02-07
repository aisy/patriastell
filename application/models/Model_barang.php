<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Barang extends CI_Model {

	public function view(){
		$data = $this->db->get('Barang');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			'' => ,
			'' => , 
			'' => ,
			'' => ,
			'' => 
		);

		$this->db->insert('Barang', $object);
	}

	public function data_edit($id){
		$this->db->where('id_barang', $id);
		$data = $this->db->get('Barang');

		return $data->first_row();
	}

	public function edit($id){
		$object = array('' => , );

		$this->db->where('id_barang', $id);
		$this->db->update('Barang', $object);
	}

	public function hapus($id){
		$this->db->where('id_barang', $id);
		$this->db->delete('Barang');
	}

}

/* End of file model_Barang.php */
/* Location: ./application/models/model_Barang.php */