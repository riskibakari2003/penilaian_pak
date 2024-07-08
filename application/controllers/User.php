<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkAkses(0);
		$this->title = "User";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$data['user'] = $this->M_user->get_all();
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/user',$data);
		$this->load->view('template/footer',$data);
	}

	public function proses()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'role' => $this->input->post('role')
		);
		
		$proses = $this->M_user->insert($data);

		// if ($proses == true) {
		// 	$this->session->set_flashdata('success', 'User Baru berhasil dibuat');
		// } else {
		// 	$this->session->set_flashdata('error', 'User Baru gagal dibuat');
		// }

		redirect('user');
	}

	public function reset($id)
	{
		$getid = $this->encryption->decrypt(urldecode($id));

		$hasil = $this->M_user->reset($getid);

		// if ($hasil == true) {
		// 	$this->session->set_flashdata('success', 'Password berhasil direset');
		// } else {
		// 	$this->session->set_flashdata('error', 'Password gagal direset');
		// }

		redirect('user');
	}

	public function delete($id)
	{
		$getid = $this->encryption->decrypt(urldecode($id));

		$delete = $this->M_user->delete($getid);

		// if ($delete == true) {
		// 	$this->session->set_flashdata('success', 'Password berhasil direset');
		// } else {
		// 	$this->session->set_flashdata('error', 'Password gagal direset');
		// }

		redirect('user');
	}
}
