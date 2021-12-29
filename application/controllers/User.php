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
        $this->user = $this->base->getUsers('user', ['id_user' => $userId]);
    }

    public function index()
    {
        $data['title'] = "Profile";
        $data['user'] = $this->user;
        $this->template->load('template', 'profile/user', $data);
    }


    // private function _config()
    // {
    //     $config['upload_path']      = "./assets/img/avatar";
    //     $config['allowed_types']    = 'gif|jpg|jpeg|png';
    //     $config['encrypt_name']     = TRUE;
    //     $config['max_size']         = '2048';

    //     $this->load->library('upload', $config);
    // }

    public function setting()
    {
        // $this->_validasi();
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);

        $db = $this->base->getUser('user', ['id_user' => $this->input->post('id_user', true)]);
        // $uniq_username = $db['username'] == $username ? '' : '|is_unique[user.username]';
        // $uniq_email = $db['email'] == $email ?  : '|is_unique[user.email]';

        // $this->form_validation->set_rules('username', 'Username', 'required|trim|alpha_numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'trim|numeric');
        $this->form_validation->set_rules('namaKapal', 'namaKapal', 'trim|valid_email');
        $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|valid_email');
        $this->form_validation->set_rules('shipping', 'shipping', 'trim|valid_email');
        // $this->_config();

        $userId = $this->session->userdata('login_session')['user'];


        if ($this->form_validation->run() == false) {
            $data['title'] = "Profile";
            $data['user'] = $this->base->getUser('user', ['id_user' => $userId]);;
            //akhdan
            // var_dump($data);
            $this->load->view('layout/header', $data);
            $this->load->view('user/detail', $data);
            $this->load->view('layout/footer');
        } else {
            $input = $this->input->post(null, true);
            $update = $this->base->update('user', 'id_user', $input['id_user'], $input);
            if ($update) {
                set_pesan('perubahan berhasil disimpan.');
            } else {
                set_pesan('gagal menyimpan perubahan');
            }
            redirect('user/setting');
        }
    }

    public function ubahpassword()
    {
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required|trim|min_length[3]|differs[password_lama]');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'matches[password_baru]');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Ubah Password";
            $this->template->load('template', 'profile/ubahpassword', $data);
        } else {
            $input = $this->input->post(null, true);
            if (password_verify($input['password_lama'], userdata('password'))) {
                $new_pass = ['password' => password_hash($input['password_baru'], PASSWORD_DEFAULT)];
                $query = $this->base->update('user', 'id_user', userdata('id_user'), $new_pass);

                if ($query) {
                    set_pesan('password berhasil diubah.');
                } else {
                    set_pesan('gagal ubah password', false);
                }
            } else {
                set_pesan('password lama salah.', false);
            }
            redirect('profile/ubahpassword');
        }
    }
}
