<?php

class UserModel extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get('tbl_user');
		return $query->result();
	}
}
