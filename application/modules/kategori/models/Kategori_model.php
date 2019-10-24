<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	private $table = "kategori";
	public $id_kategori;
	public $nama_kategori;

	public function _rules()
	{
		return[
			[
				'field' => 'nama_kategori',
				'label' => 'Nama Kategori',
				'rules' => 'required'
			]
		];
	}

	public function getAllKategori()
	{
		return $this->db->get($this->table)->result();
	}

	public function getKategoriById($id)
	{
		return $this->db->get_where($this->table, ['id_kategori' => $id])->row();
	}

	public function save()
	{
		$post = $this->input->post();
		$this->nama_kategori = $post['nama_kategori'];

		$this->db->insert($this->table, $this);
	}

	public function update()
	{
		$post = $this->input->post();
		$this->id_kategori = $post['id_kategori'];
		$this->nama_kategori = $post['nama_kategori'];

		$this->db->update($this->table, $this, ['id_kategori' => $this->id_kategori]);
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, ['id_kategori' => $id]);
	}

}

/* End of file Kategori_model.php */
/* Location: ./application/modules/kategori/models/Kategori_model.php */