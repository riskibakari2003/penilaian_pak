<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pak extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		// checkAkses([0,1,2]);
		$this->title = "Data PAK";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$data['file'] = $this->db->where('id_jenis_berkas', 2)->get('mst_berkas_upload')->result();
		$this->load->view('main/data_pak/index',$data);
	}

	public function new()
    {
        $this->load->library('upload');
        
        $nik = $this->session['nik'];
		
        $verifikasi = $this->db->where('nik', $nik)->where('status', 0)->get('tbl_verifikasi')->row();
        if (!$verifikasi) {
            redirect('data_pak/index');
        }
		
        $verifikasi_detail = $this->db->where('id_verifikasi_detail', $verifikasi->id_verifikasi)->get('tbl_verifikasi_detail')->row();
        if (!$verifikasi_detail || !$verifikasi_detail->id_data_pendukung) {
			
            redirect('data_pak/index');
        }
		
        $this->db->select('id_verifikasi_detail');
        $this->db->order_by('id_verifikasi_detail', 'DESC');
        $this->db->limit(1);
        $last_detail = $this->db->get('tbl_verifikasi_detail')->row();
        $new_id = $last_detail ? intval(substr($last_detail->id_verifikasi_detail, 0, 3)) + 1 : 1;
        $id_data_pak = sprintf('%03dDPAK%s', $new_id, $nik);
		
		$this->db->update('tbl_verifikasi_detail', ['id_data_pak' => $id_data_pak], ['id_verifikasi_detail' => $verifikasi->id_verifikasi]);
		
        $upload_path = './uploads/' . $nik . '/DPAK/' . $id_data_pak . '/';
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
                $new_file_name = $berkas_singkatan . '_DPAK_' . $nik . '.' . $file_ext;

                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = 'pdf';
                $config['file_name'] = $new_file_name;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('file')) {
                    $upload_data = $this->upload->data();
                    $berkas_data = [
                        'Id_pendukung_or_pak' => $id_data_pak,
                        'nama_berkas' => $upload_data['file_name'],
                        'id_jenis_berkas' => 2, 
						'id_berkas_upload' => $id_berkas_upload,
                        'status_berkas' => 0,
                        'catatam' => ''
                    ];
                    $this->db->insert('tbl_berkas', $berkas_data);
                } else {
                    $error = $this->upload->display_errors();
                }
            }
        }
		
        redirect('cek-data');
    }
}
