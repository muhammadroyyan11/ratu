<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Auth_model', 'auth');
		$this->load->model('Base_model', 'base');
	}

	private function _has_login()
	{
		if ($this->session->has_userdata('login_session')) {
			redirect('home');
		}
	}

	public function index()
	{
		$this->_has_login();

		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Aplikasi';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth/footer');
		} else {
			$input = $this->input->post(null, true);
			$cek_email = $this->auth->cek_email($input['email']);
			if ($cek_email > 0) {
				$password = $this->auth->get_password($input['email']);
				if (password_verify($input['password'], $password)) {
					$user_db = $this->auth->userdata($input['email']);
					if ($user_db['is_active'] != 1) {
						set_pesan('akun anda belum aktif/dinonaktifkan. Silahkan hubungi admin.', false);
						redirect('auth');
					} else {
						$userdata = [
							'user'  => $user_db['id_user'],
							'role'  => $user_db['role'],
							'timestamp' => time()
						];
						$this->session->set_userdata('login_session', $userdata);
						redirect('home');
					}
				} else {
					set_pesan('password salah', false);
					redirect('auth');
				}
			} else {
				set_pesan('username belum terdaftar', false);
				redirect('auth');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('login_session');

		set_pesan('anda telah berhasil logout');
		redirect('auth');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]|alpha_numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|trim');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]|trim');
		$this->form_validation->set_rules('namaKapal', 'Nama Kapal', 'required|trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
		$this->form_validation->set_rules('shipping', 'Shipping Company', 'required|trim');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Buat Akun';
			$this->load->view('auth/header', $data);
			$this->load->view('auth/register');
			$this->load->view('auth/footer');
		} else {
			$input = $this->input->post(null, true);
			unset($input['password2']);
			$input['password']      = password_hash($input['password'], PASSWORD_DEFAULT);
			$input['role']          = 'user';
			$input['foto']          = 'user.png';
			$input['is_active']     = 0;
			$input['created_at']    = time();

			$input['nama'] = $this->input->post('nama');
			$input['no_telp'] = $this->input->post('no_telp');
			$input['username'] = $this->input->post('username');
			$input['email'] = $this->input->post('email');
			$input['namaKapal'] = $this->input->post('namaKapal');
			$input['jabatan'] = $this->input->post('jabatan');
			$input['shipping'] = $this->input->post('shipping');

			$query = $this->base->insert('user', $input);
			if ($query) {
				set_pesan('daftar berhasil. Selanjutnya silahkan hubungi admin untuk mengaktifkan akun anda.');
				redirect('auth');
			} else {
				set_pesan('gagal menyimpan ke database', false);
				redirect('register');
			}
		}
	}
}
