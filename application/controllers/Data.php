<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('data_user_m');
        $this->load->model('Base_model', 'base');
    }

    public function user_account()
    {
        $data['title'] = 'Data Akun User';
        $data['user_account'] = $this->data_user_m->tampil_data_user()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('view_data/user_acc', $data);
        $this->load->view('layout/footer');
    }

    public function data_umum()
    {
        $data['title'] = 'Data Umum Kapal User';
        $data['data_umum'] = $this->data_user_m->tampil_data_umum()->result();
        $data['user_kapal'] = $this->data_user_m->user_kapal()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('view_data/data_umum', $data);
        $this->load->view('layout/footer');
    }
}
