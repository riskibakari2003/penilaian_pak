<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// checkLogin();
		// checkAkses([0,1,2]);
		$this->title_one = "Cek Data";
		$this->title_two = "Verifikasi Berkas";
		// $this->session = $this->session->userdata();
		$this->session = array(
			'id' => 1,
			'username' => 'admin',
			'name' => 'Admin',
			'role' => 0,
			'nik' => "1234567890"
		);
	}

	public function index()
	{
		if ($this->session['role'] == 1) {
			$data['title'] = $this->title_one;
			$data['penilaian'] = $this->M_penilaian->getDataPenilaianByid($this->session['nik']);
		} else {
			$data['title'] = $this->title_two;
			$data['penilaianSudah'] = $this->M_penilaian->getDataPenilaianSudah();
			$data['penilaianBelum'] = $this->M_penilaian->getDataPenilaianBelum();
		}
		// $data['session'] = (object)$this->session;
		$data['session'] = (object)$this->session;
		$this->load->view('main/cek_data/index',$data);
	}
}
