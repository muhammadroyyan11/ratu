<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// cek_login();
		date_default_timezone_set('Asia/Jakarta');
		// // $this->load->model('Auth_model', 'auth');
		$this->load->model('Base_model', 'base');
	}


	public function index()
	{
		// print_r($this->session->userdata());    

		$this->load->view('layout/header_asap');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}
}
