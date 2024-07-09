<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alkon_masuk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkAkses([0,1]);
		$this->title = "Data Alkon Masuk";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$data['alkon'] = $this->M_alkon->get_all();
		$data['supplier'] = $this->M_supplier->get_all();
		$data['masuk'] = $this->M_alkon->get_alkon_masuk();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/alkon_masuk',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses()
	{
		$data = array(
			'id_data_alkon' => $this->input->post('alkon'),
			'stock' => $this->input->post('stok'),
			'expired_date' => $this->input->post('expired_date'),
			'id_supplier' => $this->input->post('supplier'),
			'no_batch' => $this->input->post('no_batch'),
			'entry_date' => date('Y-m-d'),
			'is_first' => 0	,
			'status' => 1
		);

		$proses = $this->M_alkon->insert_alkon_masuk($data);

		// if ($proses == true) {
		// 	echo "success";
		// } else {
		// 	echo "error";
		// }

		redirect('alkon_masuk');
	}

	public function delete($id)
	{

		$getid = $this->encryption->decrypt(urldecode($id));

		$delete = $this->M_alkon->delete_alkon_masuk($getid);

		// if ($delete == true) {
		// 	$this->session->set_flashdata('success', 'Password berhasil direset');
		// } else {
		// 	$this->session->set_flashdata('error', 'Password gagal direset');
		// }

		redirect('alkon_masuk');
	}
}
