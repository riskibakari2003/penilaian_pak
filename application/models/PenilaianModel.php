<?php

class PenilaianModel extends CI_Model
{
	public function getDataPenilaianByNik($nik)
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
						->where('a.status', 1)
						->get();	

		return $query->result();
    }

	public function getDataPenilaianById($id)
    {
		$data = new StdClass();

		$data->verifikasi = $this->db->select('a.*,b.*')->from('tbl_verifikasi_detail a')->join('tbl_verifikasi b', 'a.id_verifikasi_detail = b.id_verifikasi', 'inner')->where('id_verifikasi_detail', $id)->get()->row();

		$data->dd = $this->db->select('a.*, b.*,c.*')
							->from('tbl_berkas a')
							->join('tbl_verifikasi_detail b', 'a.Id_pendukung_or_pak = b.id_data_pendukung', 'left')
							->join('mst_berkas_upload c', 'a.id_berkas_upload = c.id_berkas_upload', 'left')
							->where('a.id_jenis_berkas', 1)
							->where('b.id_verifikasi_detail', $id)
							->get()->result();

		$data->pak = $this->db->select('a.*, b.*,c.*')
							->from('tbl_berkas a')
							->join('tbl_verifikasi_detail b', 'a.Id_pendukung_or_pak = b.id_data_pak', 'left')
							->join('mst_berkas_upload c', 'a.id_berkas_upload = c.id_berkas_upload', 'left')
							->where('a.id_jenis_berkas', 2)
							->where('b.id_verifikasi_detail', $id)
							->get()->result();

		return $data;
    }

	public function updateStatus($id)
	{
		$data = array(
			'status' => 1
		);

		$this->db->where('id_verifikasi', $id);
		$this->db->update('tbl_verifikasi', $data);

		$verifikasi_detail = $this->db->get_where('tbl_verifikasi_detail', ['id_verifikasi_detail' => $id])->row();

		if ($verifikasi_detail) {
			$this->db->where('Id_pendukung_or_pak', $verifikasi_detail->id_data_pendukung);
			$this->db->or_where('Id_pendukung_or_pak', $verifikasi_detail->id_data_pak);
			$this->db->update('tbl_berkas', ['status_berkas' => 1]);
		}

		return $this->db->affected_rows();
	}
}
