<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_admin');
		$this->load->model('m_pesanan_masuk');
		$this->load->model('m_transaksi');
		$this->load->model('m_produk');
		$this->load->model('m_chatting');
		$this->load->model('m_pelanggan');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Beranda',
			'total_produk' => $this->m_admin->total_produk(),
			'total_pesanan' => $this->m_admin->total_pesanan(),
			'total_pelanggan' => $this->m_admin->total_pelanggan(),
			'total_transaksi' => $this->m_admin->total_transaksi(),
			'grafik' => $this->m_transaksi->grafik(),
			'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
			'grafik_alamat' => $this->m_transaksi->grafik_alamat(),
			'grafik_usia' => $this->m_transaksi->grafik_usia(),
			'grafik_kelamin' => $this->m_transaksi->grafik_kelamin(),
			'isi' => 'v_admin'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pesanan_masuk()
	{
		$data = array(
			'title' => 'Konfirmasi Transaksi',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			'pesanan_diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
			'pesanan_dikirim' => $this->m_pesanan_masuk->pesanan_dikirim(),
			'pesanan_selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
			'pesanan_dibatalkan' => $this->m_pesanan_masuk->pesanan_dibatalkan(),
			'isi' => 'layout/backend/transaksi/v_transaksi'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function proses($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'status_order' => 1
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di proses');
		redirect('admin/pesanan_masuk');
	}

	public function batal($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'catatan' => $this->input->post('catatan'),
			'status_order' => 4
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Batalkan');
		redirect('admin/pesanan_masuk');
	}

	public function kirim($id_transaksi)
	{
		$data = array(
			'id_transaksi' => $id_transaksi,
			'nama_pengirim' => $this->input->post('nama_pengirim'),
			'status_order' => 2
		);
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di kirim');
		redirect('admin/pesanan_masuk');
	}

	public function detail($no_order)
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan_detail' => $this->m_transaksi->pesanan_detail($no_order),
			'diproses_pesanan' => $this->m_pesanan_masuk->diproses_pesanan(),
			'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
			'isi' =>  'layout/backend/transaksi/v_detail'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	public function pelanggandata()
	{
		$data = array(
			'title' => 'Data Master Pelanggan',
			'pelanggan' => $this->m_pelanggan->all_pelanggan(),
			'isi' => 'layout/backend/pelanggan/v_pelanggan'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
	public function detail_belanja_pelanggan($no_order)
	{
		$data = array(
			'title' => 'Pesanan',
			'pesanan_detail' => $this->m_transaksi->pesanan_detail($no_order),
			'diproses_pesanan' => $this->m_pesanan_masuk->diproses_pesanan(),
			'proses_kirim' => $this->m_pesanan_masuk->proses_kirim(),
			'isi' =>  'layout/backend/pelanggan/v_detail'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}
}

/* End of file Admin.php */
