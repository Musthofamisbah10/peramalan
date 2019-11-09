<?php 

	function check_already_login()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('masok');
		if ($user_session) {
			redirect('dashboard');
		}
	}

	function check_not_login()
	{
		$CI =& get_instance();
		$user_session = $CI->session->userdata('masok');
		if ($user_session != true) {
			redirect('auth');
		}
	}

	
 ?>