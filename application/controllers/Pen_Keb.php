<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pen_Keb extends CI_Controller
{

	public function klsA()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsA');
		$this->load->view('layout/footer');
	}

	public function klsB()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsB');
		$this->load->view('layout/footer');
	}

	public function klsC()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsC');
		$this->load->view('layout/footer');
	}

	public function klsD()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsD');
		$this->load->view('layout/footer');
	}

	public function klsK()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('layout/header', $data);
		$this->load->view('pen_kebakaran/klsK');
		$this->load->view('layout/footer');
	}
}
