<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jns_alkon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		$this->title = "Jenis Alkon";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$data['jenis'] = $this->M_jns_alkon->get_all();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/jns_alkon',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses()
	{
		$data = array(
			'jns_alkon' => $this->input->post('jns_alkon'),
			'satuan' => $this->input->post('satuan')
		);

		$proses = $this->M_jns_alkon->insert($data);

		// if ($proses == true) {
		// 	$this->session->set_flashdata('success', 'User Baru berhasil dibuat');
		// } else {
		// 	$this->session->set_flashdata('error', 'User Baru gagal dibuat');
		// }

		redirect('jns_alkon');
	}

	public function delete($id)
	{

		$getid = $this->encryption->decrypt(urldecode($id));

		$delete = $this->M_jns_alkon->delete($getid);

		// if ($delete == true) {
		// 	$this->session->set_flashdata('success', 'Password berhasil direset');
		// } else {
		// 	$this->session->set_flashdata('error', 'Password gagal direset');
		// }

		redirect('jns_alkon');
	}
}
