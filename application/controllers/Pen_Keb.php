<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pen_Keb extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Base_model', 'base');
	}

	public function klsA()
	{
		$data['title'] = 'kelas A';
		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsA');
		$this->load->view('layout/footer');
	}

	public function klsB()
	{
		$data['title'] = 'kelas B';
		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsB');
		$this->load->view('layout/footer');
	}

	public function klsC()
	{
		$data['title'] = 'kelas C';
		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsC');
		$this->load->view('layout/footer');
	}

	public function klsD()
	{
		$data['title'] = 'kelas D';
		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsD');
		$this->load->view('layout/footer');
	}

	public function klsK()
	{
		$data['title'] = 'kelas K';
		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsK');
		$this->load->view('layout/footer');
	}
}
