<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
	protected $user;

	public function __construct()
	{
		parent::__construct();
		cek_login();

		$this->load->model('Base_model', 'base');
		$this->load->library('form_validation');
	}

	public function data_umum()
	{
		$this->form_validation->set_rules('namaKapal', 'Nama Kapal', 'required|trim|is_unique[data_umum.namaKapal]');
		$this->form_validation->set_rules('tandaPanggil', 'Tanda Panggil', 'required|trim');
		$this->form_validation->set_rules('pemilikKapal', 'Pemilik Kapal', 'required|trim');
		$this->form_validation->set_rules('benderaNegara', 'Bendera Negara', 'required|trim');
		$this->form_validation->set_rules('pelabuhanTerdaftar', 'Pelabuhan Terdaftar', 'required|trim');
		$this->form_validation->set_rules('tahunPembangunan', 'Tahun Pembangunan', 'required|trim');
		$this->form_validation->set_rules('tipeKapal', 'Tipe Kapal', 'required|trim');
		$this->form_validation->set_rules('rutePelayaran', 'Rute Pelayaran', 'required|trim');
		$this->form_validation->set_rules('klasifikasi', 'Klasifikasi', 'required|trim');
		$this->form_validation->set_rules('beratKotor', 'Berat Kotor', 'required|trim');
		$this->form_validation->set_rules('beratBersih', 'Berat Bersih', 'required|trim');
		$this->form_validation->set_rules('beratMati', 'Berat Mati', 'required|trim');
		$this->form_validation->set_rules('panjangKapalKeseluruhan', 'Panjang Kapal Keseluruhan', 'required|trim');
		$this->form_validation->set_rules('panjangAntaraTegakLurus', 'Panjang Antara Tegak Lurus', 'required|trim');
		$this->form_validation->set_rules('lebarKapalMolded', 'Lebar Kapal Molded', 'required|trim');
		$this->form_validation->set_rules('tinggiMoldedHinggaDeck', 'Tinggi Molded Hingga Deck', 'required|trim');
		$this->form_validation->set_rules('bagianTercelup', 'Bagian Tercelup', 'required|trim');
		$this->form_validation->set_rules('tipeMesinKapal', 'Tipe Mesin Kapal', 'required|trim');
		$this->form_validation->set_rules('kapasitasKargo', 'Kapasitas Kargo', 'required|trim');
		$id_user = userdata('id_user');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Input Data Umum';
			$this->load->view('layout/header', $data);
			$this->load->view('input/data_umum');
			$this->load->view('layout/footer');
		} else {
			$input = $this->input->post(null, true);
			$input['namaKapal']      = $this->input->post('namaKapal');
			$input['tandaPanggil']      = $this->input->post('tandaPanggil');
			$input['pemilikKapal']      = $this->input->post('pemilikKapal');
			$input['benderaNegara']      = $this->input->post('benderaNegara');
			$input['pelabuhanTerdaftar']      = $this->input->post('pelabuhanTerdaftar');
			$input['tahunPembangunan']      = $this->input->post('tahunPembangunan');
			$input['tipeKapal']      = $this->input->post('tipeKapal');
			$input['rutePelayaran']      = $this->input->post('rutePelayaran');
			$input['klasifikasi']      = $this->input->post('klasifikasi');
			$input['beratKotor']      = $this->input->post('beratKotor');
			$input['beratBersih']      = $this->input->post('beratBersih');
			$input['beratMati']      = $this->input->post('beratMati');
			$input['panjangKapalKeseluruhan']      = $this->input->post('panjangKapalKeseluruhan');
			$input['panjangAntaraTegakLurus']      = $this->input->post('panjangAntaraTegakLurus');
			$input['lebarKapalMolded']      = $this->input->post('lebarKapalMolded');
			$input['tinggiMoldedHinggaDeck']      = $this->input->post('tinggiMoldedHinggaDeck');
			$input['bagianTercelup']      = $this->input->post('bagianTercelup');
			$input['tipeMesinKapal']      = $this->input->post('tipeMesinKapal');
			$input['kapasitasKargo']      = $this->input->post('kapasitasKargo');
			$input['id_user'] = $id_user;

			$query = $this->base->insert('data_umum', $input);
			if ($query) {
				set_pesan('data berhasil tersimpan di database');
				redirect('home');
			} else {
				set_pesan('gagal menyimpan ke database', false);
				redirect('input/data_umum');
			}
		}
	}

	public function manif_kargo()
	{
		$this->form_validation->set_rules('namaKapal', 'Nama Kapal', 'required|trim|is_unique[manif_kargo.namaKapal]');
		$this->form_validation->set_rules('pelabAsal', 'Pelabuhan Asal', 'required|trim');
		$this->form_validation->set_rules('ETD', 'Perkiraan Waktu Keberangkatan (ETD)', 'required|trim');
		$this->form_validation->set_rules('pelabTujuan', 'Pelabuhan Tujuan', 'required|trim');
		$this->form_validation->set_rules('ETA', 'Perkiraan Waktu Tiba (ETA)', 'required|trim');
		$this->form_validation->set_rules('namaPengirim', 'Nama Pengirim', 'required|trim');
		$this->form_validation->set_rules('alamatPengirim', 'Alamat Pengirim', 'required|trim');
		$this->form_validation->set_rules('kontakPengirim', 'Kontak Pengirim', 'required|trim');
		$this->form_validation->set_rules('namaShipper', 'Nama Shipper', 'required|trim');
		$this->form_validation->set_rules('alamatShipper', 'Alamat Shipper', 'required|trim');
		$this->form_validation->set_rules('kontakShipper', 'Kontak Shipper', 'required|trim');
		$this->form_validation->set_rules('nomorKontainer', 'Nomor Kontainer', 'required|trim');
		$this->form_validation->set_rules('tipeKontainer', 'Tipe Kontainer', 'required|trim');
		$this->form_validation->set_rules('beratTara', 'Berat Tara', 'required|trim');
		$this->form_validation->set_rules('beratBersih', 'Berat Bersih', 'required|trim');
		$this->form_validation->set_rules('komoditas', 'Komoditas', 'required|trim');
		$this->form_validation->set_rules('deskripsiMuatan', 'Deskripsi Muatan', 'required|trim');
		$this->form_validation->set_rules('ukuranKontainer', 'Ukuran Kontainer', 'required|trim');
		$this->form_validation->set_rules('bay', 'Bay', 'required|trim');
		$this->form_validation->set_rules('raw', 'Raw', 'required|trim');
		$this->form_validation->set_rules('tier', 'Tier', 'required|trim');
		$id_user = userdata('id_user');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Manifest Kargo';
			$this->load->view('layout/header', $data);
			$this->load->view('input/manif_kargo');
			$this->load->view('layout/footer');
		} else {
			$input = $this->input->post(null, true);
			$input['namaKapal']      = $this->input->post('namaKapal');
			$input['pelabAsal']      = $this->input->post('pelabAsal');
			$input['ETD']      = $this->input->post('ETD');
			$input['pelabTujuan']      = $this->input->post('pelabTujuan');
			$input['ETA']      = $this->input->post('ETA');
			$input['namaPengirim']      = $this->input->post('namaPengirim');
			$input['alamatPengirim']      = $this->input->post('alamatPengirim');
			$input['kontakPengirim']      = $this->input->post('kontakPengirim');
			$input['namaShipper']      = $this->input->post('namaShipper');
			$input['alamatShipper']      = $this->input->post('alamatShipper');
			$input['kontakShipper']      = $this->input->post('kontakShipper');
			$input['nomorKontainer']      = $this->input->post('nomorKontainer');
			$input['tipeKontainer']      = $this->input->post('tipeKontainer');
			$input['beratTara']      = $this->input->post('beratTara');
			$input['beratBersih']      = $this->input->post('beratBersih');
			$input['komoditas']      = $this->input->post('komoditas');
			$input['deskripsiMuatan']      = $this->input->post('deskripsiMuatan');
			$input['ukuranKontainer']      = $this->input->post('ukuranKontainer');
			$input['bay']      = $this->input->post('bay');
			$input['raw']      = $this->input->post('raw');
			$input['tier']      = $this->input->post('tier');
			$input['id_user'] = $id_user;

			$query = $this->base->insert('manif_kargo', $input);
			if ($query) {
				set_pesan('data berhasil tersimpan di database');
				redirect('home');
			} else {
				set_pesan('gagal menyimpan ke database', false);
				redirect('input/manif_kargo');
			}
		}
	}
}
