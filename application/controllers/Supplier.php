<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->title = "Supplier";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$data['supplier'] = $this->M_supplier->get_all();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/supplier',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses()
	{
		$data = array(
			'nama_supplier' => $this->input->post('nama'),
			'alamat_supplier' => $this->input->post('alamat')
		);

		$proses = $this->M_supplier->insert($data);

		// if ($proses == true) {
		// 	$this->session->set_flashdata('success', 'User Baru berhasil dibuat');
		// } else {
		// 	$this->session->set_flashdata('error', 'User Baru gagal dibuat');
		// }

		redirect('supplier');
	}

	public function delete($id)
	{

		$getid = $this->encryption->decrypt(urldecode($id));

		$delete = $this->M_supplier->delete($getid);

		// if ($delete == true) {
		// 	$this->session->set_flashdata('success', 'Password berhasil direset');
		// } else {
		// 	$this->session->set_flashdata('error', 'Password gagal direset');
		// }

		redirect('supplier');
	}
}
