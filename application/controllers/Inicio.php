<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//if (!$this->session->userdata('login')) {
			//redirect('Login','refresh');
		//}
	}

	public function index()
	{
		$this->layout->setTitle($this->uri->segment(1));
		$this->layout->view('index');
	}
}

/* End of file Inicio.php */
/* Location: ./application/controllers/Inicio.php */