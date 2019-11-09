<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// load model auth
		$this->load->model('auth/auth_m');

	}

	// form login
	public function index()
	{
		check_already_login();
		$this->load->view('auth/auth');
	}

	// action
	public function action()
	{
		$validator = array('success' => false, 'mssagges' => array());
		$validate_data = [
			[
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'required'
			],
			[
				'field'	=> 'password',
				'label'	=> 'Password',
				'rules'	=> 'required'
			]
		];

		$this->form_validation->set_rules($validate_data);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if ($this->form_validation->run() == false) {
			redirect('auth');
		}else{

			// tangkap data pengrus / anggota
			$username = htmlspecialchars($this->input->post('username', true));
			$password = htmlspecialchars(sha1($this->input->post('password', true)));
			$admin = $this->auth_m->auth_admin($username, $password);

			if ($admin->num_rows() > 0) { //jika data login lebih dari 0

				foreach ($admin->result() as $sess) {
						$sess_data['masok'] = true;
						$sess_data['id_admin'] = $sess->id_admin;
						$sess_data['nama_admin'] = $sess->nama_admin;
					}

					$this->session->set_userdata($sess_data);
					$masok = $this->session->userdata('masok');

					if ($masok == true) { //jika login admin
						redirect('dashboard');
					}

			}else{ //jika gagal
				redirect('auth');
			}
		}
	}

	// destroy session
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/auth/controllers/Auth.php */