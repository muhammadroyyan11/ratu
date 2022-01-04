<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Muster extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('muster_m');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        $data['muster'] = $this->muster_m->tampil_data()->result();
        $dt['title'] = 'Muster List';
        $this->load->view('layout/header', $dt);
        $this->load->view('muster_list/muster', $data);
        $this->load->view('layout/footer');
    }
}
