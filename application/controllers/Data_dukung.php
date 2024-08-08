<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dukung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkEmptyBiodata($this->session->userdata('nik'));
		checkAkses(1);
		$this->title = "Data Dukung";
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['file'] = $this->db->where('id_jenis_berkas', 1)->get('mst_berkas_upload')->result();
		$this->load->view('main/data_dukung/index',$data);
	}

	public function new()
	{
		$this->load->library('upload');
		
		$nik = $this->session->userdata('nik');
		$no_surat = $this->input->post('no_surar');
		$tgl_surat = $this->input->post('tgl_surat');
		
		$verifikasi_data = [
			'nik' => $nik,
			'status' => 0
		];
		$this->db->insert('tbl_verifikasi', $verifikasi_data);
		$id_verifikasi = $this->db->insert_id();
		
		$this->db->select('id_verifikasi_detail');
		$this->db->order_by('id_verifikasi_detail', 'DESC');
		$this->db->limit(1);
		$last_detail = $this->db->get('tbl_verifikasi_detail')->row();
		$new_id = $last_detail ? intval(substr($last_detail->id_verifikasi_detail, 0, 3)) + 1 : 1;
		$id_pendukung = sprintf('%03dDD%s', $new_id, $nik);
		
		$verifikasi_detail_data = [
			'id_verifikasi_detail' => $id_verifikasi,
			'id_data_pendukung' => $id_pendukung,
			'id_data_pak' => '',
			'no_surat_pengantar' => $no_surat,
			'tgl_surat_pengatar' => $tgl_surat
		];
		$this->db->insert('tbl_verifikasi_detail', $verifikasi_detail_data);
		
		$upload_path = './uploads/' . $nik . '/DD/' . $id_pendukung . '/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, true);
            chown($upload_path, 'nceko');
            chgrp($upload_path, 'nceko');
        }

		$files = $_FILES['berkas'];
		foreach ($files['name'] as $id_berkas_upload => $file_name) {
			if (!empty($file_name)) {
				$this->db->select('berkas_singkatan');
				$this->db->where('id_berkas_upload', $id_berkas_upload);
				$berkas = $this->db->get('mst_berkas_upload')->row();
				$berkas_singkatan = $berkas->berkas_singkatan;

				$_FILES['file']['name'] = $files['name'][$id_berkas_upload];
				$_FILES['file']['type'] = $files['type'][$id_berkas_upload];
				$_FILES['file']['tmp_name'] = $files['tmp_name'][$id_berkas_upload];
				$_FILES['file']['error'] = $files['error'][$id_berkas_upload];
				$_FILES['file']['size'] = $files['size'][$id_berkas_upload];

				$file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
				$file_ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
				$new_file_name = $berkas_singkatan . '_' . $nik . '.' . $file_ext;

				$config['upload_path'] = $upload_path;
				$config['allowed_types'] = 'pdf';
				$config['file_name'] = $new_file_name;

				$this->upload->initialize($config);

				if ($this->upload->do_upload('file')) {
					$upload_data = $this->upload->data();
					$berkas_data = [
						'Id_pendukung_or_pak' => $id_pendukung,
						'nama_berkas' => $upload_data['file_name'],
						'id_jenis_berkas' => 1, 
						'id_berkas_upload' => $id_berkas_upload,
						'status_berkas' => 0,
						'catatam' => ''
					];
					$this->db->insert('tbl_berkas', $berkas_data);
				} else {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('data-dukung');
				}
			}else{
				$this->session->set_flashdata('error', 'File tidak boleh kosong');
				redirect('data-dukung');
			}
		}
		
		redirect('data-pak');
	}

}
