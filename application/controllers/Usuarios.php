<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login')) {
			if (!$this->session->userdata('rol_id') == 1 && $this->session->userdata('rol_id') == 2) {
				redirect('Inicio','refresh');
			}
		}else{
			redirect('Login');
		}
	}

	public function index()
	{
		$this->layout->setTitle('Usuarios');
		$this->layout->view('index');
	}

	public function getAllUsers()
	{
		
	}
}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */