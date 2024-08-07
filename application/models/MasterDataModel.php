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

	public function getUser()
	{
		return $this->db->select('a.*, b.*')
						->from('tbl_user a')
						->join('tbl_biodata b','a.nik = b.nik','inner')
						->where_not_in('a.role', 0)
						->get()
						->result();
	}

	public function getUserNik($nik)
	{
		return $this->db->where('nik', $nik)->get('tbl_user')->row();
	}

	public function updateUser($nik, $data)
	{
		$this->db->where('nik', $nik);
		$this->db->update('tbl_user', $data);
		
		$this->db->where('nik', $nik);
		$this->db->update('tbl_biodata', $data);
	}

	public function updatePassword($nik, $data)
	{
		$this->db->where('nik', $nik);
		$this->db->update('tbl_user', $data);
	}

	public function deleteUserData($data)
	{
		$this->db->where($data)->delete('tbl_user');
		$this->db->where($data)->delete('tbl_biodata');
	}
}
