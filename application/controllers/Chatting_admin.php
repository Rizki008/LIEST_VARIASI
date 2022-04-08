<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Chatting_admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_chatting');
		$this->load->model('m_admin');
	}

	public function pesan($id_pelanggan)
	{
		$this->form_validation->set_rules('pesan', 'fieldlabel', 'required', array('required' => '%s Mohon untuk diisi!'));

		$data = array(
			'title' => 'Pesan Masuk',
			'pesan' => $this->m_chatting->pesan($id_pelanggan),
			'isi' => 'layout/backend/chatting/v_chatting'
		);
		$this->load->view('layout/backend/v_wrapper', $data, FALSE);
	}


	function send()
	{
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'balas' => $this->input->post('pesan'),
			'pesan' => '0'
		);
		$this->db->insert('chatting', $data);
		redirect('chatting_admin/pesan/' . $data['id_pelanggan']);
	}
}
