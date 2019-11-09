<?php 
	
	Class Template{

		var $template_data = array();

		// set template
		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}

		// load template
		function load($template='', $view='', $view_data=array(), $return = false)
		{
			$this->CI =& get_instance();
			$this->set('contents', $this->CI->load->view($view, $view_data, true));
			return $this->CI->load->view($template, $this->template_data, $return);
		}
	}

 ?>