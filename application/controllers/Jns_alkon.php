<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jns_alkon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->title = "Jenis Alkon";
		$this->session = $this->session->userdata();
	}

	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/jns_alkon',$data);
		$this->load->view('template/footer',$data);
	}
}
