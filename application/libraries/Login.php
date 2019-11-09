<?php 

	class Login
	{

		function __construct()
		{
			$this->CI =& get_instance();
		}

		function user_login()
		{
			$this->CI->load->model('auth/auth_m');
			$id_admin = $this->CI->session->userdata('id_admin');

			$admin = $this->CI->auth_m->getAdminById($id_admin);
			return $admin;
		}
	}
 ?>