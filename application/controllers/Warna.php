<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Warna extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_chatting');
	}
	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Warna Produk',
			'kategori' => $this->m_produk->warna(),
			'isi' => 'layout/backend/warna/v_warna'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}

	//size produk
	public function warna_produk($id)
	{
		$this->form_validation->set_rules('warna', 'Warna', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Warna Produk',
				'warna' => $this->m_produk->warna($id),
				'isi' => 'layout/backend/warna/v_warna'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_produk' => $id,
				'warna' => $this->input->post('warna'),
			);
			$this->m_produk->add_warna($data);
			$this->session->set_flashdata('pesan', 'Data Warna Berhasil Disimpan');
			redirect('warna/warna_produk/' . $id);
		}
	}
	public function edit_warna($id, $id_produk)
	{
		$this->form_validation->set_rules('warna', 'Warna', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Update Warna Produk',
				'warna' => $this->m_produk->warna_detail($id),
				'isi' => 'layout/backend/warna/v_edit'
			);
			$this->load->view('layout/backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'warna' => $this->input->post('warna'),
			);
			$this->m_produk->update_warna($id, $data);
			$this->session->set_flashdata('pesan', 'Data Warna Berhasil Diperbarui');
			redirect('warna/warna_produk/' . $id_produk);
		}
	}
	public function delete_warna($id, $id_produk)
	{
		$this->m_produk->delete_warna($id);
		$this->session->set_flashdata('pesan', 'Data Warna Berhasil Dihapus');

		redirect('warna/warna_produk/' . $id_produk);
	}
}

/* End of file Kategori.php */
