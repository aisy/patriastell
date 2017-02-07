<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function view(){
		$data = $this->db->get('admin');
		return $data->result();
	}

	public function tambah(){
		$object = array(
			// 'id_admin' 	=> ,
			'username' 	=> $this->input->post('username'), 
			'password' 	=> $this->input->post('password')
		);

		$this->db->insert('admin', $object);
	}

	public function data_edit($id){
		$this->db->where('id_admin', $id);
		$data = $this->db->get('admin');

		return $data->first_row();
	}

	public function edit($id){
		$object = array(
			'username' 	=> $this->input->post('username'), 
			'password' 		=> $this->input->post('password') 
			);

		$this->db->where('id_admin', $id);
		$this->db->update('admin', $object);
	}

	public function hapus($id){
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
	}


	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->db->get_where('admin', array('username' => $username, 'password' => $password));

		return $data->first_row();
	}

}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */