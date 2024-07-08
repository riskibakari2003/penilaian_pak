<?php

class UserModel extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get('tbl_user');
		return $query->result();
	}

	public function insert($data)
	{
		$this->db->insert('tbl_user', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function reset($id)
	{
		$data = array(
			'password' => md5('Admin123')
		);

		$this->db->where('id_user', $id);
		$this->db->update('tbl_user', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('tbl_user');

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
