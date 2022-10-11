<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($email, $password)
	{
		$cek = $this->ci->m_auth->login_pelanggan($email, $password);
		if ($cek) {
			$id_pelanggan = $cek->id_pelanggan;
			$nama = $cek->nama;
			$email = $cek->email;
			$no_tlpn = $cek->no_tlpn;
			$jenis_kel = $cek->jenis_kel;
			$alamat = $cek->alamat;
			$kabupaten = $cek->kabupaten;
			$kecamatan = $cek->kecamatan;
			$desa = $cek->desa;
			$kode_post = $cek->kode_post;
			$usia = $cek->usia;

			//session
			$this->ci->session->set_userdata('id_pelanggan', $id_pelanggan);
			$this->ci->session->set_userdata('nama', $nama);
			$this->ci->session->set_userdata('email', $email);
			$this->ci->session->set_userdata('no_tlpn', $no_tlpn);
			$this->ci->session->set_userdata('jenis_kel', $jenis_kel);
			$this->ci->session->set_userdata('alamat', $alamat);
			$this->ci->session->set_userdata('kabupaten', $kabupaten);
			$this->ci->session->set_userdata('kecamatan', $kecamatan);
			$this->ci->session->set_userdata('desa', $desa);
			$this->ci->session->set_userdata('kode_post', $kode_post);
			$this->ci->session->set_userdata('usia', $usia);

			redirect('home');
		} else {
			$this->ci->session->set_flashdata('error', 'email Atau Password Salah');
			redirect('pelanggan/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('nama') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login');
			redirect('pelanggan/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_pelanggan');
		$this->ci->session->unset_userdata('nama');
		$this->ci->session->unset_userdata('email');
		$this->ci->session->set_userdata('no_tlpn');
		$this->ci->session->set_userdata('jenis_kel');
		$this->ci->session->set_userdata('alamat');
		$this->ci->session->set_userdata('kabupaten');
		$this->ci->session->set_userdata('kecamatan');
		$this->ci->session->set_userdata('desa');
		$this->ci->session->set_userdata('kode_post');
		$this->ci->session->unset_userdata('usia');
		$this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!!');
		redirect('pelanggan/login');
	}
}
