<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {



	public function getUser($id)
	{
		$this->db->select('*');
		$this->db->from('usuarios u');
		$this->db->join('persona p', 'p.pers_id = u.user_pers_id');
		$this->db->join('roles r', 'r.rol_id = u.user_rol_id');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}else{
			return FALSE;
		}
	}

	public function getAllUsers()
	{
		$this->db->select('*');
		$this->db->from('usuarios u');
		$this->db->join('persona p', 'p.pers_id = u.user_pers_id');
		$this->db->join('roles r', 'r.rol_id = u.user_rol_id');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return FALSE;
		}
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */