<?php

class AlkonModel extends CI_Model
{
	public function get_all()
	{
		$query = $this->db->select('a.*, b.*, c.*')
						  ->from('tbl_stock_alkon a')
						  ->from('tbl_data_alkon b', 'a.id_data_alkon = b.id_alkon', 'left')
						  ->join('tbl_mst_jns_alkon c', 'b.id_jns_alkon = c.id_jns_alkon', 'left')
						  ->where('a.is_first', 1)
						  ->get();
		return $query->result();
	}	

	public function insert($data)
	{
		$this->db->insert('tbl_data_alkon', $data);

		$getId = $this->db->insert_id();

		if ($this->db->affected_rows() > 0) {
			$stok = array(
				'status' => true,
				'id' => $getId
			);
			return $stok;
		} else {
			$stok = array(
				'status' => false,
				'id' => null
			);
			return $stok;
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

	public function insert_alkon_masuk($data)
	{
		$this->db->insert('tbl_stock_alkon', $data);

		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
