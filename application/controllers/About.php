<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Base_model', 'base');
	}

	public function index()
	{
		$data['title'] = 'About Us';
		$this->load->view('layout/header', $data);
		$this->load->view('about/about');
		$this->load->view('layout/footer');
	}
}
