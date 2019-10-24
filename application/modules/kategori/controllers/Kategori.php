<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->model('kategori/kategori_model');
	}

	public function index()
	{
		$data['judul'] 		= 'Peramalan Penjualan';
		$data['kategori'] 	= $this->kategori_model->getAllKategori();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('kategori/kategori', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$kategori = $this->kategori_model;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->_rules());

		if ($validation->run()) {
			$kategori->save();
			$this->session->set_flashdata('msg', '<div class="alert alert-success
				alert-dismissible
				fade show" role="alert">
				Data ketgori berhasil ditambah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('kategori');
		}else{
			redirect('kategori');
		}
	}

	public function update($id=null)
	{
		$kategori = $this->kategori_model;
		$validation = $this->form_validation;
		$validation->set_rules($kategori->_rules());

		if ($validation->run()) {
			$kategori->update();
			$this->session->set_flashdata('msg', '<div class="alert alert-success
				alert-dismissible
				fade show" role="alert">
				Data ketgori berhasil diubah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('kategori');
		}else{
			redirect('kategori');
		}
	}

	public function delete($id=null)
	{
		$kategori = $this->kategori_model;
		if ($kategori->delete($id)) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger
				alert-dismissible
				fade show" role="alert">
				Data facilities berhasil dihapus
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('kategori');
		}
	}
}
