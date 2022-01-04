<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    protected $user;

    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Base_model', 'base');
        $this->load->library('form_validation');

        $userId = $this->session->userdata('login_session')['user'];
        $this->user = $this->base->getData('user', ['id_user' => $userId]);
    }

    public function index()
    {
    }

    public function setting()
    {
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password');

        $db = $this->base->getData('user', ['id_user' => $this->input->post('id_user', true)]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|numeric');
        $this->form_validation->set_rules('namaKapal', 'namaKapal', 'trim');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'trim');
        $this->form_validation->set_rules('shipping', 'shipping', 'trim');

        $userId = $this->session->userdata('login_session')['user'];


        if ($this->form_validation->run() == false) {
            $data['title'] = "Profile";
            $data['user'] = $this->base->getData('user', ['id_user' => $userId]);
            $this->load->view('layout/header', $data);
            $this->load->view('user/detail', $data);
            $this->load->view('layout/footer');
        } else {
            $input = $this->input->post(null, true);
            $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);
            $update = $this->base->update('user', 'id_user', $input['id_user'], $input);
            if ($update) {
                set_pesan('perubahan berhasil disimpan.');
            } else {
                set_pesan('gagal menyimpan perubahan');
            }
            redirect('user/setting');
        }
    }
}
