<?php

class SupplierModel extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->get('tbl_mst_supplier');
		return $query->result();
	}	

	public function insert($data)
	{
		$this->db->insert('tbl_mst_supplier', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function delete($id)
	{
		$this->db->where('id_supplier', $id);
		$this->db->delete('tbl_mst_supplier');

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
}
