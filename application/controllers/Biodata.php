<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkAkses(1);
		$this->title = "Biodata";
	}

	public function index()
	{	
		$data['title'] = $this->title;
		$data['provinsi'] = $this->M_masterdata->getMasterData('mst_provinsi');
		$data['pangkat'] = $this->M_masterdata->getMasterData('mst_pangkat');
		$data['golongan'] = $this->M_masterdata->getMasterData('mst_golongan');
		$data['institusi'] = $this->M_masterdata->getMasterData('mst_institusi');
		$data['jabatan'] = $this->M_masterdata->getMasterData('mst_jabatan');
		$data['tahun_ajaran'] = $this->M_masterdata->getMasterData('mst_tahun_ajaran');
		$data['biodata'] = $this->db->where('nik',$this->session->userdata('nik'))->get('tbl_biodata')->row();
		$this->load->view('main/biodata/index',$data);
	}

	public function update($nik)
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nip_nidn' => $this->input->post('nip_nidn'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telfon'),
			'id_provinsi' => $this->input->post('provinsi'),
			'id_pangkat' => $this->input->post('pangkat'),
			'id_golongan' => $this->input->post('golongan'),
			'id_jabatan_fungsional' => $this->input->post('jabfung_terakhir'),
			'id_jabatan_usulan' => $this->input->post('jabatan_usulan'),
			'id_institusi' => $this->input->post('institusi'),
			'id_tahun_ajaran' => $this->input->post('tahun_ajaran')
		];
		$this->db->where('nik',$nik)->update('tbl_biodata',$data);
		
		$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Biodata Berhasil Diperbaharui !');
		redirect('data-dukung');
	}
}
