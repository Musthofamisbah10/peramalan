<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		// helper chek login
		check_not_login();
		
	}

	// show
	public function index()
	{
		$this->template->load('template', 'dashboard/dashboard');
	}

	

}

/* End of file Dashboard.php */
/* Location: ./application/modules/dashboard/controllers/Dashboard.php */