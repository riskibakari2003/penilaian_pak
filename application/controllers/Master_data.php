<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkAkses(0);
	}

	// Berkas
	public function berkas()
	{
		$data['title'] = "Master Berkas Upload";
		$data['berkas'] = $this->M_masterdata->getMasterData('mst_berkas_upload');
		$this->load->view('main/masterdata/berkas/index',$data);
	}

	public function berkas_new()
	{
		$data = [
			'berkas_name' => $this->input->post('nama_berkas'),
			'berkas_singkatan' => $this->input->post('singkatan_berkas'),
			'id_jenis_berkas' => $this->input->post('jenis_berkas')
		];
		$this->M_masterdata->insertMasterData('mst_berkas_upload', $data);
		redirect('master/berkas');
	}

	public function berkas_delete($id)
	{
		$data = array('id_berkas_upload' => $id);
		$this->M_masterdata->deleteMasterData('mst_berkas_upload', $data);
		redirect('master/berkas');
	}
	// End Berkas

	// Tahun Ajaran 
	public function tahun_ajaran()
	{
		$data['title'] = "Master Tahun Ajaran";
		$data['tahun_ajaran'] = $this->M_masterdata->getMasterData('mst_tahun_ajaran');
		$this->load->view('main/masterdata/tahun_ajaran/index',$data);
	}

	public function tahun_ajaran_new()
	{
		$data = [
			'tahun_ajaran' => $this->input->post('tahun_ajaran'),
		];
		$this->M_masterdata->insertMasterData('mst_tahun_ajaran', $data);
		redirect('master/tahun-ajar');
	}

	public function tahun_ajaran_delete($id)
	{
		$data = array('id_tahun_ajaran' => $id);
		$this->M_masterdata->deleteMasterData('mst_tahun_ajaran', $data);
		redirect('master/tahun-ajar');
	}

	// End Tahun Ajaran

	// Institusi
	public function institusi()
	{
		$data['title'] = "Master Data Institusi";
		$data['institusi'] = $this->M_masterdata->getMasterData('mst_institusi');
		$this->load->view('main/masterdata/institusi/index',$data);
	}

	public function institusi_new()
	{
		$data = [
			'nama_institusi' => $this->input->post('nama_institusi'),
			'alamat_institusi' => $this->input->post('alamat_institusi'),
		];
		$this->M_masterdata->insertMasterData('mst_institusi', $data);
		redirect('master/institusi');
	}

	public function institusi_delete($id)
	{
		$data = array('id_institusi' => $id);
		$this->M_masterdata->deleteMasterData('mst_institusi', $data);
		redirect('master/institusi');
	}

	// End Institusi

	// Pangkat
	public function pangkat()
	{
		$data['title'] = "Master Data Pangkat";
		$data['pangkat'] = $this->M_masterdata->getMasterData('mst_pangkat');
		$this->load->view('main/masterdata/pangkat/index',$data);
	}

	public function pangkat_new()
	{
		$data = [
			'pangkat' => $this->input->post('pangkat'),
		];
		$this->M_masterdata->insertMasterData('mst_pangkat', $data);
		redirect('master/pangkat');
	}

	public function pangkat_delete($id)
	{
		$data = array('id_pangkat' => $id);
		$this->M_masterdata->deleteMasterData('mst_pangkat', $data);
		redirect('master/pangkat');
	}

	// End Pangkat

	// Golongan
	public function golongan()
	{
		$data['title'] = "Master Data Golongan";
		$data['golongan'] = $this->M_masterdata->getMasterData('mst_golongan');
		$this->load->view('main/masterdata/golongan/index',$data);
	}

	public function golongan_new()
	{
		$data = [
			'golongan' => $this->input->post('golongan'),
		];
		$this->M_masterdata->insertMasterData('mst_golongan', $data);
		redirect('master/golongan');
	}

	public function golongan_delete($id)
	{
		$data = array('id_golongan' => $id);
		$this->M_masterdata->deleteMasterData('mst_golongan', $data);
		redirect('master/golongan');
	}

	// End Golongan

	// Jabatan
	public function jabatan()
	{
		$data['title'] = "Master Data Jabatan";
		$data['jabatan'] = $this->M_masterdata->getMasterData('mst_jabatan');
		$this->load->view('main/masterdata/jabatan/index',$data);
	}

	public function jabatan_new()
	{
		$data = [
			'jabatan' => $this->input->post('jabatan'),
		];
		$this->M_masterdata->insertMasterData('mst_jabatan', $data);
		redirect('master/jabatan');
	}

	public function jabatan_delete($id)
	{
		$data = array('id_jabatan' => $id);
		$this->M_masterdata->deleteMasterData('mst_jabatan', $data);
		redirect('master/jabatan');
	}

	// End Jabatan

	// Provinsi
	public function provinsi()
	{
		$data['title'] = "Master Data Provinsi";
		$data['provinsi'] = $this->M_masterdata->getMasterData('mst_provinsi');
		$this->load->view('main/masterdata/provinsi/index',$data);
	}

	public function provinsi_new()
	{
		$data = [
			'provinsi' => $this->input->post('provinsi'),
		];
		$this->M_masterdata->insertMasterData('mst_provinsi', $data);
		redirect('master/provinsi');
	}

	public function provinsi_delete($id)
	{
		$data = array('id_provinsi' => $id);
		$this->M_masterdata->deleteMasterData('mst_provinsi', $data);
		redirect('master/provinsi');
	}

	// End Provinsi

	// User
	public function user()
	{
		$data['title'] = "Master Data User";
		$data['user'] = $this->M_masterdata->getUser();
		$this->load->view('main/masterdata/user/index',$data);
	}

	public function user_update()
	{
		$nik = $this->input->post('old_nik');
		
		$data = [
			'nik' => $this->input->post('new_nik')
		];

		$this->M_masterdata->updateUser($nik, $data);
		redirect('master/user');
	}

	public function user_password($nik)
	{
		$data = [
			'password' => MD5('Default123')
		];

		$this->M_masterdata->updatePassword($nik, $data);
		redirect('master/user');
	}

	public function user_delete($nik)
	{
		$data = array('nik' => $nik);
		$this->M_masterdata->deleteUserData($data);
		redirect('master/user');
	}

	// End User
}
