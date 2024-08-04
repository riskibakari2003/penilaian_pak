<?php

class MasterDataModel extends CI_Model
{
	public function getMasterData($table)
	{
		if ($table == "mst_berkas_upload") {
			return $this->db->select('a.*, b.*')->from('mst_berkas_upload a')->join('mst_jenis_berkas b','a.id_jenis_berkas=b.id_jenis_berkas','left')->get()->result();
		}else {
			return $this->db->get($table)->result();
		}
	}

	public function getMasterDataById($table, $id)
	{
		return $this->db->where('id', $id)->get($table)->row();
	}

	public function insertMasterData($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function updateMasterData($table, $data, $id)
	{
		$this->db->where('id', $id)->update($table, $data);
	}

	public function deleteMasterData($table, $data)
	{
		$this->db->where($data)->delete($table);
	}
}
