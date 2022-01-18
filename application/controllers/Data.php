<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('data_user_m');
        $this->load->library('form_validation');
        $this->load->model('Base_model', 'base');
    }

    public function user_account()
    {
        $data['title'] = 'Data Akun User';
        $data['user_account'] = $this->base->getUsers(userdata('id_user'))->result();
        $this->load->view('layout/header', $data);
        $this->load->view('view_data/user_acc', $data);
        $this->load->view('layout/footer');
    }

    public function toggle($getId)
    {
        $status = $this->base->getData('user', ['id_user' => $getId])['is_active'];
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user diaktifkan.' : 'user dinonaktifkan.';

        if ($this->base->update('user', 'id_user', $getId, ['is_active' => $toggle])) {
            set_pesan($pesan);
        }
        redirect('data/user_account');
    }

    function edit($id_user)
    {
        $data['title'] = 'Edit Akun User';
        $data['user'] = $this->data_user_m->getById($id_user);
        $this->load->view('layout/header', $data);
        $this->load->view('view_data/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('is_active', 'Is Active', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        // $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
        $this->form_validation->set_rules('namaKapal', 'Nama Kapal', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('shipping', 'Shipping Company', 'required|trim');

        if ($this->form_validation->run() == true) {
            $id_user = $this->input->post('id_user');
            $data['nama'] = $this->input->post('nama');
            $data['is_active'] = $this->input->post('is_active');
            $data['username'] = $this->input->post('username');
            $data['email'] = $this->input->post('email');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['role'] = $this->input->post('role');
            // $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data['namaKapal'] = $this->input->post('namaKapal');
            $data['jabatan'] = $this->input->post('jabatan');
            $data['shipping'] = $this->input->post('shipping');
            $this->data_user_m->update($data, $id_user);
            redirect('data/user_account');
        } else {
            $data['title'] = 'Edit Akun User';
            $id_user  = $this->input->post('id_user');
            $data['user'] = $this->data_user_m->getById($id_user);
            $this->load->view('layout/header', $data);
            $this->load->view('view_data/edit', $data);
            $this->load->view('layout/footer');
        }
    }

    function delete($id_user)
    {
        $this->data_user_m->delete($id_user);
        redirect('data/user_account');
    }

    public function data_umum()
    {
        $data['title'] = 'Data Umum Kapal User';
        $data['data_umum'] = $this->data_user_m->tampil_data_umum()->result();
        $data['user_kapal'] = $this->data_user_m->join_user_umum()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('view_data/data_umum', $data);
        $this->load->view('layout/footer');
    }

    public function manif_kargo()
    {
        $data['title'] = 'Manifest Kargo Kapal User';
        $data['manif_kargo'] = $this->data_user_m->tampil_manif_kargo()->result();
        $data['user_kapal'] = $this->data_user_m->join_user_manif()->result();
        $this->load->view('layout/header', $data);
        $this->load->view('view_data/manif_kargo', $data);
        $this->load->view('layout/footer');
    }
}
