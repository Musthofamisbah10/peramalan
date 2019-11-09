<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

	//cek usernmae dan password
	public function auth_admin($username, $password)
	{	
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('admin');

	}

	// getAdminById
	public function getAdminById($id_admin=null)
	{
		return $this->db->get_where('admin', ['id_admin' => $id_admin])->row();
	}


}

/* End of file Auth_m.php */
/* Location: ./application/modules/auth/models/Auth_m.php */