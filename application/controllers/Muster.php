<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muster extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('muster_m');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['muster'] = $this->muster_m->tampil_data()->result();

        $this->load->view('layout/header', $data);
        $this->load->view('muster_list/muster');
        $this->load->view('layout/footer');
    }
}
