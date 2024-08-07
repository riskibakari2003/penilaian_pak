<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkAkses([0,1,2]);
		$this->title_one = "Cek Data";
		$this->title_two = "Verifikasi Berkas";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		if ($this->session['role'] == 1) {
			checkEmptyBiodata($this->session['nik']);
			$data['title'] = $this->title_one;
			$data['penilaian'] = $this->M_penilaian->getDataPenilaianByNik($this->session['nik']);
		} else {
			$data['title'] = $this->title_two;
			$data['penilaianSudah'] = $this->M_penilaian->getDataPenilaianSudah();
			$data['penilaianBelum'] = $this->M_penilaian->getDataPenilaianBelum();
		}
		$data['session'] = (object)$this->session;
		$this->load->view('main/cek_data/index',$data);
	}

	public function show($id)
	{
		if ($this->session['role'] == 1) {
			$data['title'] = $this->title_one;
		} else {
			$data['title'] = $this->title_two;
		}
		$data['penilaian'] = $this->M_penilaian->getDataPenilaianById($id);
		$data['session'] = (object)$this->session;
		$this->load->view('main/cek_data/show',$data);
	}

	public function verifikasi($id)
	{
		$update = $this->M_penilaian->updateStatus($id);

		redirect('cek-data');
	}
}
