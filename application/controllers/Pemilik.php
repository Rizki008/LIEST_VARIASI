<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemilik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_admin');
        $this->load->model('m_pesanan_masuk');
        $this->load->model('m_transaksi');
        $this->load->model('m_produk');
        $this->load->model('m_chatting');
    }

    // List all your items
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'total_produk' => $this->m_admin->total_produk(),
            'total_pesanan' => $this->m_admin->total_pesanan(),
            'total_pelanggan' => $this->m_admin->total_pelanggan(),
            'total_transaksi' => $this->m_admin->total_transaksi(),
            'grafik' => $this->m_transaksi->grafik(),
            'grafik_pelanggan' => $this->m_transaksi->grafik_pelanggan(),
            'isi' => 'v_pemilik'
        );
        $this->load->view('layout/pemilik/v_wrapper', $data, FALSE);
    }
}
