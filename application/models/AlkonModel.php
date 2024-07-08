<?php

class AlkonModel extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->select('a.*, b.*')
						  ->from('tbl_data_alkon a')
						  ->join('tbl_mst_jns_alkon b', 'a.id_jns_alkon = b.id_jns_alkon', 'left')
						  ->get();
		return $query->result();
	}	

	public function insert($data)
	{
		$this->db->insert('tbl_data_alkon', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id_alkon', $id);
		$this->db->delete('tbl_data_alkon');

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
}
