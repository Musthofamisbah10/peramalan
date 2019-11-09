<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model kategori
		// $this->load->model('kategori/kategori_m');
	}

	// show
	public function index()
	{
		$data = [
			'header' => 'Data Kategori',
			'table' => 'Tabel Kategori',
			'sistem' => 'Peramalan',
		];

		$this->template->load('template', 'kategori/kategori', $data);
	}

}

/* End of file Kategori.php */
/* Location: ./application/modules/kategori/controllers/Kategori.php */