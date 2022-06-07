<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kurang_laku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_produk');
        $this->load->model('m_kategori');
        $this->load->model('m_chatting');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Produk Kurang Diminati',
            'kurang_laku' => $this->m_produk->data_diskon(),
            'isi' => 'layout/backend/produk/v_kurang_laku'
        );
        $this->load->view('layout/backend/v_wrapper', $data, FALSE);
    }

    //Edit one item
    public function update($id_produk = NULL)
    {
        $data = array(
            'id_produk' => $id_produk,
            'diskon' => $this->input->post('diskon')
        );
        $this->m_produk->edit($data);
        $this->session->set_flashdata('pesan', 'Berhasil Update Kategori Produk');
        redirect('produk/kurang_laku');
    }
}

/* End of file Produk.php */
