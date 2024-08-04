<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// checkLogin();
		// checkAkses([0,1,2]);
		// $this->session = $this->session->userdata();
		$this->session = array(
			'id' => 1,
			'username' => 'admin',
			'name' => 'Admin',
			'role' => 0,
			'nik' => "1234567890"
		);
	}

	// Berkas
	public function berkas()
	{
		$data['title'] = "Master Berkas Upload";
		$data['berkas'] = $this->M_masterdata->getMasterData('mst_berkas_upload');
		$data['session'] = (object)$this->session;
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
		// $data['session'] = (object)$this->session;
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/masterdata/tahun_ajaran/index',$data);
		$this->load->view('template/footer',$data);
	}

	// End Tahun Ajaran

	// Institusi
	public function institusi()
	{
		$data['title'] = "Master Data Institusi";
		$data['institusi'] = $this->M_masterdata->getMasterData('mst_institusi');
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/masterdata/institusi/index',$data);
		$this->load->view('template/footer',$data);
	}

	// End Institusi

	// Pangkat
	public function pangkat()
	{
		$data['title'] = "Master Data Pangkat";
		$data['pangkat'] = $this->M_masterdata->getMasterData('mst_pangkat');
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/masterdata/pangkat/index',$data);
		$this->load->view('template/footer',$data);
	}

	// End Pangkat

	// Golongan
	public function golongan()
	{
		$data['title'] = "Master Data Golongan";
		$data['golongan'] = $this->M_masterdata->getMasterData('mst_golongan');
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/masterdata/golongan/index',$data);
		$this->load->view('template/footer',$data);
	}

	// End Golongan

	// Jabatan
	public function jabatan()
	{
		$data['title'] = "Master Data Jabatan";
		$data['jabatan'] = $this->M_masterdata->getMasterData('mst_jabatan');
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/masterdata/jabatan/index',$data);
		$this->load->view('template/footer',$data);
	}

	// End Jabatan

	// Provinsi
	public function provinsi()
	{
		$data['title'] = "Master Data Provinsi";
		$data['provinsi'] = $this->M_masterdata->getMasterData('mst_provinsi');
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/masterdata/provinsi/index',$data);
		$this->load->view('template/footer',$data);
	}

	// End Provinsi
}
