<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
		$this->load->model('m_chatting');
	}
	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Kategori',
			'kategori' => $this->m_kategori->kategori(),
			'isi' => 'layout/backend/kategori/v_kategori'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'nama_kategori' => $this->input->post('nama_kategori'),
		);
		$this->m_kategori->add($data);
		$this->session->set_flashdata('pesan', 'Berhasil Menambahkan Kategori Produk');
		redirect('kategori');
	}

	//Update one item
	public function update($id_kategori = NULL)
	{
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_kategori' => $this->input->post('nama_kategori')
		);
		$this->m_kategori->update($data);
		$this->session->set_flashdata('pesan', 'Berhasil Update Kategori Produk');
		redirect('kategori');
	}

	//Delete one item
	public function delete($id_kategori = NULL)
	{
		$data = array(
			'id_kategori' => $id_kategori,
		);
		$this->m_kategori->delete($data);
		$this->session->set_flashdata('pesan', 'berhasil Hapus Kategori');
		redirect('kategori');
	}
}

/* End of file Kategori.php */
