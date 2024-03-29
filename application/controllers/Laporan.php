<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
		$this->load->model('m_admin');
		$this->load->model('m_chatting');
	}

	public function index()
	{
		$data = array(
			'title' => 'Laporan',
			'isi' => 'layout/pemilik/laporan/v_laporan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_harian()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Penjualan Harian',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_harian($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/v_lap_harian'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_bulanan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Penjualan Bulanan',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_bulanan($bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/v_lap_bulanan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_tahunan()
	{
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Penjualan Tahunan',
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_tahunan($tahun),
			'isi' => 'layout/pemilik/laporan/v_lap_tahunan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_stock()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Stock Barang',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_harian($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/v_lap_stock'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
	public function lap_pelanggan()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Laporan Pelanggan',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_pelanggan($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/v_lap_pelanggan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
}
