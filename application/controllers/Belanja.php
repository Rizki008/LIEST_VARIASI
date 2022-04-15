<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}
		$data = array(
			'title' => 'Produk',
			'isi' => 'layout/frontend/pesanan/v_cart'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->pelanggan_login->proteksi_halaman();
		$redirect_page =  $this->input->post('redirect_page');
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('qty'),
			'price'   => $this->input->post('price'),
			'name'    => $this->input->post('name'),
		);

		$this->cart->insert($data);
		redirect($redirect_page, 'refresh');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('belanja');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid' => $items['rowid'],
				'qty'   => $this->input->post($i . '[qty]'),
			);
			$this->cart->update($data);
			$i++;
		}
		$this->session->set_flashdata('pesan', 'Berhasil Diupdate');
		redirect('belanja');
	}

	public function clear()
	{
		$this->cart->destroy();
		redirect('belanja');
	}

	public function cekout()
	{
		//proteksi halaman
		$this->pelanggan_login->proteksi_halaman();

		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Langsung Beli',
				'isi' => 'layout/frontend/pesanan/v_cekout'
			);
			$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
		} else {
			//simpan ke tabel transaksi
			$data = array(
				'id_pelanggan' => $this->session->userdata('id_pelanggan'),
				'no_order' => $this->input->post('no_order'),
				'tgl_order' => date('Y-m-d'),
				'alamat' => $this->input->post('alamat'),
				'pembayaran' => $this->input->post('pembayaran'),
				'pasang' => $this->input->post('pasang'),
				'grand_total' => $this->input->post('grand_total'),
				'total_bayar' => $this->input->post('total_bayar'),
				// 'checked' => TRUE,
				'status_bayar' => '0',
				'status_order' => '0',
			);
			$this->m_transaksi->simpan_transaksi($data);

			//simpan ke tabel rinci transaksi
			$i = 1;
			foreach ($this->cart->contents() as $item) {
				$data_rinci = array(
					'no_order' => $this->input->post('no_order'),
					'id_produk' => $item['id'],
					'qty' => $this->input->post('qty' . $i++),
				);

				$this->m_transaksi->simpan_rinci_transaksi($data_rinci);
			}
			$this->session->set_flashdata('pesan', 'Pesanan Berhasil Diproses');
			$this->cart->destroy();
			redirect('pesanan_saya');
		}
	}
}
