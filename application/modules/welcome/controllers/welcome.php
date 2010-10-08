<?php

class Welcome extends MY_Controller {

	function Welcome()
	{
		parent::__construct();	
	}
	
	function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */