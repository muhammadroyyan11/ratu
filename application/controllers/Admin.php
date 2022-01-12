<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {
        if (is_admin()) {
            $this->load->view('admin/index');
        } else {
            redirect('home');
        }
    }
}
