<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alkon_keluar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->title = "Data Alkon Keluar";
		$this->session = array(
			'id' => 1,
			'username' => "Eko Hidayat",
			'role' => 0
		);
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/dashboard',$data);
		$this->load->view('template/footer',$data);
	}
}
