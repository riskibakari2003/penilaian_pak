<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		checkLogin();
		checkAkses([0,1,2]);
		$this->title = "Dashboard";
	}

	public function index()
	{
		$data['dataVerif'] = $this->db->query("SELECT * FROM tbl_verifikasi WHERE status = 1")->num_rows();	
		$data['dataBelumVerif'] = $this->db->query("SELECT * FROM tbl_verifikasi WHERE status = 0")->num_rows();	
		$data['title'] = $this->title;
		$this->load->view('template/header',$data);
		$this->load->view('template/navbar',$data);
		$this->load->view('template/topbar',$data);
		$this->load->view('main/dashboard',$data);
		$this->load->view('template/footer',$data);
	}
}
