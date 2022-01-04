<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SOP extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Base_model', 'base');
	}

	public function timbul_api()
	{
		$data['title'] = 'Timbul Api';
		$this->load->view('layout/header', $data);
		$this->load->view('sop_kebakaran/timbul_api');
		$this->load->view('layout/footer');
	}

	public function air_masuk()
	{
		$data['title'] = 'Air Masuk';
		$this->load->view('layout/header', $data);
		$this->load->view('sop_kebakaran/air_masuk');
		$this->load->view('layout/footer');
	}

	public function man_overboard()
	{
		$data['title'] = 'Man Overboard';
		$this->load->view('layout/header', $data);
		$this->load->view('sop_kebakaran/man_overboard');
		$this->load->view('layout/footer');
	}
}
