<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Rekening extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
		$this->load->model('m_chatting');
	}
	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Rekening',
			'rekening' => $this->m_transaksi->rekening(),
			'isi' => 'layout/backend/rekening/v_rekening'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'nama_bank' => $this->input->post('nama_bank'),
			'no_rek' => $this->input->post('no_rek'),
			'atas_nama' => $this->input->post('atas_nama'),
		);
		$this->m_transaksi->add($data);
		$this->session->set_flashdata('pesan', 'Berhasil Menambahkan Rekening');
		redirect('rekening');
	}

	//Update one item
	public function update($id_rekening = NULL)
	{
		$data = array(
			'id_rekening' => $id_rekening,
			'nama_bank' => $this->input->post('nama_bank'),
			'no_rek' => $this->input->post('no_rek'),
			'atas_nama' => $this->input->post('atas_nama'),
		);
		$this->m_transaksi->update($data);
		$this->session->set_flashdata('pesan', 'Berhasil Update Rekening');
		redirect('rekening');
	}

	//Delete one item
	public function delete($id_rekening = NULL)
	{
		$data = array(
			'id_rekening' => $id_rekening,
		);
		$this->m_transaksi->delete($data);
		$this->session->set_flashdata('pesan', 'berhasil Hapus Rekening');
		redirect('rekening');
	}
}

/* End of file Kategori.php */
