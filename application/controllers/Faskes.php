<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faskes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		$this->title = "Faskes";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$data['faskes'] = $this->M_faskes->get_all();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/faskes',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses()
	{
		$data = array(
			'nama_faskes' => $this->input->post('nama'),
			'alamat_faskes' => $this->input->post('alamat')
		);

		$proses = $this->M_faskes->insert($data);

		// if ($proses == true) {
		// 	$this->session->set_flashdata('success', 'User Baru berhasil dibuat');
		// } else {
		// 	$this->session->set_flashdata('error', 'User Baru gagal dibuat');
		// }

		redirect('faskes');
	}

	public function delete($id)
	{

		$getid = $this->encryption->decrypt(urldecode($id));

		$delete = $this->M_faskes->delete($getid);

		// if ($delete == true) {
		// 	$this->session->set_flashdata('success', 'Password berhasil direset');
		// } else {
		// 	$this->session->set_flashdata('error', 'Password gagal direset');
		// }

		redirect('faskes');
	}
}
