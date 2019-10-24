<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peramalan extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Peramalan Penjualan';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('peramalan/peramalan');
		$this->load->view('templates/footer');
	}

}

/* End of file Peramalan.php */
/* Location: ./application/modules/peramalan/controllers/Peramalan.php */