<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
		$this->load->model('m_produk');
		$this->load->model('m_transaksi');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Katalog Produk',
			'produk' => $this->m_home->produk(),
			'diskon' => $this->m_produk->diskon(),
			// 'best_deal_product' => $this->m_produk->best_deal_product(),
			'best_deal_product_transaksi' => $this->m_produk->best_deal_product_transaksi(),
			'isi' => 'v_home'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_home->kategori($id_kategori);
		$data = array(
			'title' => $kategori->nama_kategori,
			'produk' => $this->m_home->produk_all($id_kategori),
			'isi' => 'layout/frontend/kategori/v_kategori'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}



	public function detail_produk($id)
	{
		$data = array(
			'title' => 'Detail Produk',
			'produk' => $this->m_home->detail_produk($id),
			'related_products' => $this->m_home->related_products($id),
			'reviews' => $this->m_home->reviews($id),
			'isi' => 'layout/frontend/detail/v_detail_produk'
		);
		$this->load->view('layout/frontend/v_wrapper', $data, FALSE);
	}
}

/* End of file Home.php */
