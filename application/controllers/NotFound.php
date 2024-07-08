<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->title = "404";
		$this->session = $this->session->userdata();
	}
	
	public function index()
	{
		$data['title'] = $this->title;
		$data['session'] = (object)$this->session;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('errors/not_found');
		$this->load->view('template/footer',$data);
	}
}
