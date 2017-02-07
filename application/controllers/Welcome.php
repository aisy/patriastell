<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('homepage/index');
		$this->load->view('homepage/profile');
		$this->load->view('javascript');

		// $this->load->view('home');
	}

	public function order(){

		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('homepage/order');
		$this->load->view('homepage/profile');
		$this->load->view('javascript');

	}

	public function produk(){
		
		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('homepage/produk');
		$this->load->view('homepage/profile');
		$this->load->view('javascript');

	}

	public function cari_barang($id){

		$this->load->view('head');
		$this->load->view('homepage/navbar');
		$this->load->view('javascript');

	}

}
