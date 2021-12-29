<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SOP extends CI_Controller
{

	public function timbul_api()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('sop_kebakaran/timbul_api');
		$this->load->view('layout/footer');
	}

	public function air_masuk()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('sop_kebakaran/air_masuk');
		$this->load->view('layout/footer');
	}

	public function man_overboard()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('sop_kebakaran/man_overboard');
		$this->load->view('layout/footer');
	}
}
