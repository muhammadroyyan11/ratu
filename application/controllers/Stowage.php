<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stowage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('muster_m');
        // $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        // $data['muster'] = $this->muster_m->tampil_data()->result();
        $dt['title'] = 'Stowage Plan System';
        $this->load->view('layout/header', $dt);
        $this->load->view('stowage/index');
        $this->load->view('layout/footer');
    }
}
