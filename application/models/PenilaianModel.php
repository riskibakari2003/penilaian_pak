<?php

class PenilaianModel extends CI_Model
{
	public function getDataPenilaianByid($nik)
    {
		$query = $this->db->select('a.*, b.*, c.*, d.*, e.*, f.*, g.*, h.*')
						->from('tbl_verifikasi a')
						->join('tbl_biodata b', 'a.nik = b.nik', 'left')
						->join('mst_provinsi c', 'b.id_provinsi = c.id_provinsi', 'left')
						->join('mst_pangkat d', 'b.id_pangkat = d.id_pangkat', 'left')
						->join('mst_golongan e', 'b.id_golongan = e.id_golongan', 'left')
						->join('mst_institusi f', 'b.id_institusi = f.id_institusi', 'left')
						->join('mst_jabatan g', 'b.id_jabatan_usulan = g.id_jabatan', 'left')
						->join('mst_tahun_ajaran h', 'b.id_tahun_ajaran = h.id_tahun_ajaran', 'left')
						->where('a.nik', $nik)
						->get();	

		return $query->result();
    }

	public function getDataPenilaianBelum()
    {
		$query = $this->db->select('a.*, b.*, c.*, d.*, e.*, f.*, g.*, h.*')
						->from('tbl_verifikasi a')
						->join('tbl_biodata b', 'a.nik = b.nik', 'left')
						->join('mst_provinsi c', 'b.id_provinsi = c.id_provinsi', 'left')
						->join('mst_pangkat d', 'b.id_pangkat = d.id_pangkat', 'left')
						->join('mst_golongan e', 'b.id_golongan = e.id_golongan', 'left')
						->join('mst_institusi f', 'b.id_institusi = f.id_institusi', 'left')
						->join('mst_jabatan g', 'b.id_jabatan_usulan = g.id_jabatan', 'left')
						->join('mst_tahun_ajaran h', 'b.id_tahun_ajaran = h.id_tahun_ajaran', 'left')
						->where('a.status', 0)
						->get();	

		return $query->result();
    }

	public function getDataPenilaianSudah()
    {
		$query = $this->db->select('a.*, b.*, c.*, d.*, e.*, f.*, g.*, h.*')
						->from('tbl_verifikasi a')
						->join('tbl_biodata b', 'a.nik = b.nik', 'left')
						->join('mst_provinsi c', 'b.id_provinsi = c.id_provinsi', 'left')
						->join('mst_pangkat d', 'b.id_pangkat = d.id_pangkat', 'left')
						->join('mst_golongan e', 'b.id_golongan = e.id_golongan', 'left')
						->join('mst_institusi f', 'b.id_institusi = f.id_institusi', 'left')
						->join('mst_jabatan g', 'b.id_jabatan_usulan = g.id_jabatan', 'left')
						->join('mst_tahun_ajaran h', 'b.id_tahun_ajaran = h.id_tahun_ajaran', 'left')
						->where('a.nik', 1)
						->get();	

		return $query->result();
    }
}
