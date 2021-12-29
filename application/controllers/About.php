<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('about/about');
		$this->load->view('layout/footer');
	}
}
