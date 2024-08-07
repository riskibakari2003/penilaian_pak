<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		doneLogin();
		$data['title'] = 'Login';
		$this->load->view('auth/login',$data);
	}

	public function register()
	{
		doneLogin();
		$data['title'] = 'Register';
		$this->load->view('auth/register',$data);
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'Username Pengguna', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/index');
		} else {
			$data = $this->M_auth->login();
	
			if ($data == true) {
				redirect('dashboard');
			}else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Username atau password salah.');
				redirect('login');
			}
		}
	}

	public function register_proses()
	{
		$this->form_validation->set_rules('username', 'Username Pengguna', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('name', 'Nama Pengguna', 'required');
		$this->form_validation->set_rules('role', 'Role Pengguna', 'required');
		$this->form_validation->set_rules('nik', 'NIK Pengguna', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/register');
		} else {
			$data = $this->M_auth->register();
	
			if ($data == true) {
				$this->session->set_flashdata('success', '<strong>SUCCESS!!!</strong> Register berhasil.');
				redirect('login');
			}else {
				$this->session->set_flashdata('error', '<strong>ERROR!!!</strong> Register gagal.');
				redirect('register');
			}
		}
	}

	public function logout()
	{
		$data = array(
			'id',
			'username',
			'name',
			'role',
			'nik'
		);

		$this->session->unset_userdata($data);

		redirect('login');
	}
}
