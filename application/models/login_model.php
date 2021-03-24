<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


	public function entrar($user, $pass)
	{
		$this->db->select();
		$this->db->from('usuarios');
		$this->db->where('user_usuario', $user);
		$this->db->where('user_clave.', $pass);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->db_i
		}else{
			return FALSE;
		}
	}
	
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */