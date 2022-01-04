<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Base_model', 'base');
	}

	public function index()
	{
		$this->load->view('layout/header_asap');
		$this->load->view('index');
		$this->load->view('layout/footer');
	}
}
