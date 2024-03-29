<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{

	public function produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->order_by('id_produk', 'desc');
		return $this->db->get()->result();
	}

	public function kurang_laku()
	{
		$this->db->select('*');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->order_by('rinci_transaksi.id_produk', 'desc');
		return $this->db->get()->result();
	}

	public function data_diskon()
	{
		$this->db->select_sum('qty');
		$this->db->select('kategori.nama_kategori,produk.gambar, produk.nama_produk, produk.stock, produk.deskripsi, produk.harga, produk.diskon, produk.id_produk');
		//$this->db->select('rinci_transaksi.qty');
		$this->db->from('rinci_transaksi');
		$this->db->join('warna', 'rinci_transaksi.id_warna = warna.id_warna', 'left');
		$this->db->join('produk', 'warna.id_produk = produk.id_produk', 'left');
		$this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
		$this->db->group_by('rinci_transaksi.id_warna');
		$this->db->order_by('qty', 'asc');
		return $this->db->get()->result();
	}
	//search
	public function pencarian($keyword)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->like('nama_produk', $keyword);
		$this->db->or_like('harga', $keyword);
		return $this->db->get()->result();
	}

	//diskon produk
	public function best_deal_product()
	{
		$this->db->from('produk');
		$this->db->where('is_available', 1);
		$this->db->order_by('diskon', 'desc');
		$this->db->limit(1);
		return $this->db->get()->row();
	}

	//diskon produk
	public function diskon()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->where('diskon>=1 and stock>=1');
		$this->db->order_by('id_produk', 'desc');
		return $this->db->get()->result();
	}

	//bagus produk
	public function best_deal_product_transaksi()
	{
		$this->db->select_sum('qty');
		$this->db->select('produk.gambar, produk.nama_produk, produk.harga, produk.diskon, produk.id_produk, produk.deskripsi');
		$this->db->from('rinci_transaksi');
		$this->db->join('warna', 'rinci_transaksi.id_warna = warna.id_warna', 'left');
		$this->db->join('produk', 'warna.id_produk = produk.id_produk', 'left');
		$this->db->group_by('rinci_transaksi.id_warna');
		$this->db->limit(4);
		return $this->db->get()->result();
	}

	public function related_products($current, $category)
	{
		return $this->db->where(array('id_produk !=' => $current, 'id_kategori' => $category))->limit(4)->get('produk')->result();
	}

	// List all your items
	public function detail($id_produk)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori', 'left');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->row();
	}

	//data kurang minat produk
	public function kurang_produk()
	{
		$this->db->select_sum('qty' <= 10);
		$this->db->select('produk.gambar, produk.nama_produk, produk.harga, produk.diskon, produk.id_produk');
		$this->db->from('rinci_transaksi');
		$this->db->join('produk', 'rinci_transaksi.id_produk = produk.id_produk', 'left');
		$this->db->group_by('rinci_transaksi.id_produk');
		$this->db->limit(4);
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('produk', $data);
	}

	//Update one item
	public function edit($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('produk', $data);
	}

	//Delete one item
	public function delete($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->delete('produk', $data);
	}

	//menambahkan ke tabel warna
	public function id_produk()
	{
		return $this->db->query('SELECT max(id_produk) as id FROM produk')->row();
	}

	//size data produk
	public function warna($id)
	{
		$this->db->select('*');
		$this->db->from('warna');
		$this->db->join('produk', 'warna.id_produk = produk.id_produk', 'left');
		$this->db->where('produk.id_produk', $id);
		$data['warna'] = $this->db->get()->result();
		$data['produk'] = $this->db->get_where('produk', array('id_produk' => $id))->row();
		return $data;
	}
	public function add_warna($data)
	{
		$this->db->insert('warna', $data);
	}
	public function warna_detail($id)
	{
		$this->db->select('*');
		$this->db->from('warna');
		$this->db->join('produk', 'warna.id_produk = produk.id_produk', 'left');
		$this->db->where('warna.id_warna', $id);
		return $this->db->get()->row();
	}
	public function update_warna($id, $data)
	{
		$this->db->where('id_warna', $id);
		$this->db->update('warna', $data);
	}
	public function delete_warna($id)
	{
		$this->db->where('id_warna', $id);
		$this->db->delete('warna');
	}
	//jika produk di hapus maka semua data size di hapus
	public function delete_warna_all($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->delete('warna');
	}
}

/* End of file M_barang.php */
