<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata('login')) {
			redirect('home','refresh');
		}else{
			$this->load->view('login');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */