<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Penjualan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('penjualan/penjualan');
		$this->load->view('templates/footer');
	}
}
