<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelanggan');
		$this->load->model('m_auth');
		// $this->load->model('m_chatting');
	}

	// List all your items
	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('no_tlpn', 'Nomor Tlpn', 'required|min_length[11]|max_length[13]', array(
			'required' => '%s Mohon Untuk Diisi !!!',
			'min_length' => '%s Minimal 11 angka !!!',
			'max_length' => '%s Maksimal 13 angka !!!'
		));
		$this->form_validation->set_rules('jenis_kel', 'Jenis Kelamin', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('usia', 'Usia', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('email', 'Email Pelanggan', 'required|is_unique[pelanggan.email]', array(
			'required' => '%s Mohon Untuk Diisi !!!',
			'is_unique' => '%s Email Sudah Terdaptar'
		));
		$this->form_validation->set_rules('password', 'Password Pelanggan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		// $this->form_validation->set_rules('ulangi_password', 'Ulangi Password Pelanggan', 'required|matches[password]', array(
		// 	'required' => '%s Mohon Untuk Diisi !!!',
		// 	'matches' => '%s Password Tidak Sama !!!'
		// ));
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('kode_post', 'Kode Post', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Daftar Pelanggan',
				'isi' => 'layout/frontend/register/v_register'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'no_tlpn' => $this->input->post('no_tlpn'),
				'usia' => $this->input->post('usia'),
				'jenis_kel' => $this->input->post('jenis_kel'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'kabupaten' => $this->input->post('kabupaten'),
				'kecamatan' => $this->input->post('kecamatan'),
				'desa' => $this->input->post('desa'),
				'kode_post' => $this->input->post('kode_post'),
				'alamat' => $this->input->post('alamat'),
			);
			$this->m_pelanggan->register($data);
			$this->session->set_flashdata('pesan', 'Pendaftaran Berhasil, Silahkan Untuk Login!!!');
			redirect('pelanggan/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'E-mail', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));

		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->pelanggan_login->login($email, $password);
		}
		$data = array(
			'title' => 'Masuk Pelanggan',
			'isi' => 'layout/frontend/login/v_login'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function logout()
	{
		$this->pelanggan_login->logout();
	}

	public function akun()
	{
		//proteksi halaman
		$this->pelanggan_login->proteksi_halaman();
		$data = array(
			'title' => 'Akun Saya',
			'isi' => 'layout/frontend/login/v_akun'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}

/* End of file Pelanggan.php */
