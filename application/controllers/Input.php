<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{

	public function data_umum()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('input/data_umum');
		$this->load->view('layout/footer');
	}

	public function manif_kargo()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('input/manif_kargo');
		$this->load->view('layout/footer');
	}
}
