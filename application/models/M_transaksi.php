<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{
	public function simpan_transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}

	public function simpan_rinci_transaksi($data_rinci)
	{
		$this->db->insert('rinci_transaksi', $data_rinci);
	}


	//informasi pesanan
	public function belum_bayar()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->where('status_order=0');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function diproses()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->where('status_order=1');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function dikirim()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->where('status_order=2');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function selesai()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->where('status_order=3');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function batalpesan()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_pelanggan', $this->session->userdata('id_pelanggan'));
		$this->db->where('status_order=4');
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}

	public function detail_pesanan($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('id_transaksi', $id_transaksi);
		return $this->db->get()->row();
	}

	public function rekening()
	{
		$this->db->select('*');
		$this->db->from('rekening');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('rekening', $data);
	}

	public function update($data)
	{
		$this->db->where('id_rekening', $data['id_rekening']);
		$this->db->update('rekening', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_rekening', $data['id_rekening']);
		$this->db->delete('rekening');
	}

	public function upload_buktibayar($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('transaksi', $data);
	}

	public function produk()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->order_by('id_pelanggan', 'desc');
		return $this->db->get()->result();
	}

	//detail pesanan selesai
	public function pesanan_detail($no_order)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->join('rinci_transaksi', 'transaksi.no_order = rinci_transaksi.no_order', 'left');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->where('transaksi.no_order', $no_order);
		return $this->db->get()->result();
	}

	public function insert_riview()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_produk' => $this->input->post('id_produk'),
			'nama_pelanggan' => $this->session->userdata('nama_pelanggan'),
			'tanggal' => date('Y-m-d'),
			'isi' => $this->input->post('isi'),
			'status' => 1,
		);
		$this->db->insert('riview', $data);
	}

	public function info($no_order)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->where('no_order', $no_order);
		return $this->db->get()->result();
	}
	//and pesanan selesai

	//grafik
	public function grafik()
	{
		$this->db->select_sum('qty');
		$this->db->select('produk.nama_produk');
		//$this->db->select('rinci_transaksi.qty');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->group_by('rinci_transaksi.id_produk');
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}
	//grafik
	public function grafik_pelanggan()
	{

		// return $this->db->query("SELECT COUNT(transaksi.no_order) as qty, nama, month(tgl_order) FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan GROUP BY transaksi.id_pelanggan")->result();
		$this->db->select_sum('qty');
		$this->db->select('pelanggan.nama');
		$this->db->select('rinci_transaksi.qty');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->join('transaksi', 'rinci_transaksi.no_order = transaksi.no_order', 'left');
		$this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
		$this->db->group_by('pelanggan.id_pelanggan');
		$this->db->order_by('qty', 'desc');
		return $this->db->get()->result();
	}
}
