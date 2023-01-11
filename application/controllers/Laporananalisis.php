<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporananalisis extends CI_Controller
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
			'isi' => 'layout/pemilik/laporan/analisis/v_laporananalisis'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_usia()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Analisis Usia',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_usia($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/analisis/v_lap_analisis_usia'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_alamat()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Analisis Alamat',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_alamat($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/analisis/v_lap_alamat'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}

	public function lap_jk()
	{
		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'title' => 'Analisis Jenis Kelamin',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_jk($tanggal, $bulan, $tahun),
			'isi' => 'layout/pemilik/laporan/analisis/v_lap_jk'
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
			'isi' => 'layout/pemilik/laporan/analisis/v_lap_pelanggan'
		);
		$this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
	}
}
