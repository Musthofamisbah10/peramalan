<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Peramalan Penjualan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/kategori');
		$this->load->view('templates/footer');
	}
}
