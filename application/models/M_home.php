<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_home extends CI_Model
{

	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->join('warna', 'warna.id_produk = produk.id_produk', 'left');
		$this->db->where('stock>=1');
		$this->db->order_by('produk.id_produk', 'desc');
		$this->db->group_by('produk.id_produk');
		$this->db->limit(20);
		return $this->db->get()->result();
	}

	public function kategori_produk()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}

	// public function detail_produk($id_produk)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('produk');
	// 	$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
	// 	$this->db->join('warna', 'produk.id_produk = warna.id_produk', 'left');
	// 	$this->db->where('produk.id_produk', $id_produk);

	// 	return $this->db->get()->row();
	// }

	public function detail_produk($id)
	{
		$data['warna'] = $this->db->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori JOIN warna ON produk.id_produk=warna.id_produk WHERE produk.id_produk='" . $id . "'")->result();
		$data['produk'] = $this->db->query("SELECT * FROM produk JOIN kategori ON produk.id_kategori=kategori.id_kategori JOIN warna ON produk.id_produk=warna.id_produk WHERE produk.id_produk='" . $id . "'")->row();
		return $data;
	}

	public function gambar_produk($id_produk)
	{
		$this->db->select('*');
		$this->db->from('gambar');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->result();
	}

	public function kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->row();
	}

	public function produk_all($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->where('produk.id_kategori', $id_kategori);
		return $this->db->get()->result();
	}

	public function related_products($id_produk)
	{
		return $this->db->where(array('id_produk !=' => $id_produk))->limit(10)->get('produk')->result();
	}

	public function reviews($id_produk)
	{
		$this->db->select('*');
		$this->db->from('riview');
		$this->db->join('pelanggan', 'riview.id_pelanggan = pelanggan.id_pelanggan', 'left');

		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->result();
	}

	public function riview($nama_pelanggan)
	{
		$this->db->select('*');
		$this->db->from('riview');
		$this->db->join('pelanggan', 'riview.nama_pelanggan = pelanggan.nama_pelanggan', 'left');
		$this->db->where('nama_pelanggan', $nama_pelanggan);
		return $this->db->get()->result();
	}
}
